<?php
	echo basename($_SERVER['HTTP_REFERER']);
	var_dump($_POST);
	if(isset($_SERVER['HTTP_REFERER']) && basename($_SERVER['HTTP_REFERER']) == "add_form.php" ){
		if(isset($_POST['al_intent_fn_save']) && $_POST['al_intent_fn_save']!=""){
				
		}
	}else{
		die('refer error '.$_SERVER['HTTP_REFERER']);
	}
?>