<?php
function connect_to_database($host,$username,$password,$db){
	try{
		$db= new PDO("mysql:dbname=$db;host=$host",$username,$password);
		return $db;
	}catch(PDOException $e){
		die("Error connectiong to server. Error :".$e->getMessage());
	}
}

	function get_intent_package($intent_name){
			$PDOdb = connect_to_database("localhost","root","","daptiv");			
			$intentQry = "SELECT * FROM `al_intent_functions` WHERE LCASE(`intent_name`) ='".strtolower($intent_name)."' LIMIT 0,1";
			if($intentSt= $PDOdb->prepare($intentQry) ){
				try{
					$intentSt->execute();
					$intentPackage = $intentSt->fetch(PDO::FETCH_ASSOC);
					$PDOdb =null;
					return $intentPackage;
				}catch(PDOException $e){
					die("MYSQL Error occured -".$e->getMessage());
				}
			}
			$PDOdb =null;
			return 0;
	}
	
	function execute_intent_package($intent_name,$params){
		//$PDOdb = connect_to_database("localhost","root","","daptiv");
		$intentPackage = get_intent_package($intent_name);
		$queries_and_placeholders = get_executable_queries_and_placeholders($intentPackage);
		$arr_of_records=get_records_of_array($queries_and_placeholders,$params);
		return generate_output_response_speech($intentPackage,$arr_of_records,2);
		
	}
	
	function get_executable_queries_and_placeholders($intentPackage){
		$arr_return=array();
		$paramFound=0;
		$qry_placeholders=array();
		$queryCount=0;
		$all_queryList= array();
		if(count($intentPackage)>0){
			$allSQLqrs = $intentPackage['sql_query'];
			$allSQLqrs = explode(";",$allSQLqrs);
			foreach($allSQLqrs as $SQLqry){
				//$SQLqry = $intentPackage['sql_query'];
				$replaceSQLqry = $SQLqry;
				$placeholders = array();
				if(strpos($SQLqry,"}")>=0){
					//$paramFound =1;
					while(strpos($SQLqry,"{")){
						$open_brace_pos = strpos($SQLqry,"{");
						$close_brace_pos = strpos($SQLqry,"}");
						$each_ph = substr($replaceSQLqry,$open_brace_pos+1,($close_brace_pos-$open_brace_pos));
						$placeholders[]=$each_ph;
						$SQLqry=str_replace($each_ph,"?",$SQLqry);
						$paramFound++;
					}
				}
				
				$qry_placeholders[]=array('count'=>$paramFound,'data'=>$placeholders);
				$all_queryList[]= $SQLqry;
				$queryCount++;
			}
		}
		$arr_return["queryCount"] = $queryCount;
		$arr_return["queries"] = $all_queryList;
		//$arr_return["placeholderCount"] = $paramFound;
		$arr_return["placeholders"] = $qry_placeholders;
		return $arr_return;
		
	}
	function get_records_of_array($queries_and_placeholders,$params){
		$arr_of_records = array();
		$con = connect_to_database("localhost","root","","daptiv");
		$queryList = $queries_and_placeholders['queries'];
		foreach($queryList as $index=>$query){
			$ph_count = $queries_and_placeholders['placeholders'][$index]['count'];
			$arr_params_to_bind=array();
			if($ph_count>0){
				$bind_to = $queries_and_placeholders['placeholders'][$index]['data'];
				foreach($bind_to as $eachPh){
					if(isset($params[$eachPh]) && $params[$eachPh]!=""){
						$arr_params_to_bind[]=$params[$eachPh];
					}
				}
			}
			if($qrySt = $con->prepare($query)){
				try{
					$qrySt->execute($arr_params_to_bind);
					$recordCount = $qrySt->rowCount(); 
					$allRecords =$qrySt->fetchAll(PDO::FETCH_ASSOC);
					if($recordCount>0){
						$arr_of_records[]= $allRecords;
					}else{
						$arr_of_records[]= null;
					}
					
				}catch(PDOException $e){
					die("Dyn MySQL Erro :".$e->getMessage());
				}
			}
		}
		return $arr_of_records;
	}
	
	/* function re_arrange_record_arrayarray($arr_of_records){
		$final_arr_record =array();
		foreach($arr_of_records as $eachResult){
			if(is_array($eachResult)){
				foreach($eachResult as )
			}
		}
	} */
	
	function generate_output_response_speech($intentPackage,$recordsFound,$qryCount){
		$responseSchema = $intentPackage['response_text'];
		$responseSchema= explode("\n",$responseSchema);
		$responsePointCount = count($responseSchema);
		
		$norecordResponseSchema= $intentPackage['no_record_response_text'];
		$reponsePlaceHolders="";
		
		$finalResponseSchema = "";
		
		if($intentPackage['response_placeholder_count']>0){
			$reponsePlaceHolders = $intentPackage['response_placeholders'];
			$reponsePlaceHolders= explode(",",$reponsePlaceHolders);
			
			foreach($recordsFound as $eachRecord){
				if($eachRecord==null){
					return $norecordResponseSchema;
				}else{
					if(is_array($eachRecord)){
						foreach($eachRecord as $index=>$sub_eachRec){
							 $replaceResSchema =$responseSchema[$index];
							 foreach($reponsePlaceHolders as $eachPH){
								if(isset($sub_eachRec[$eachPH])){
									$responseSchema[$index]=str_replace("*".$eachPH."*",$sub_eachRec[$eachPH],$replaceResSchema);
								}
							}	
							if($qryCount==1){
								$finalResponseSchema.=$responseSchema[$index];
							}
						}
					}
				}
				if($qryCount>1){
					$finalResponseSchema=$responseSchema[$index];
				}
			}
			return $finalResponseSchema;
		}else{
			return $responseSchema;
		}
	}
	
	execute_intent_package("isight_qs_one",null);
	
?>