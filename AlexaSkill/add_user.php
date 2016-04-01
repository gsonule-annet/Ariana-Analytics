<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Advanced form elements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href=" plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href=" plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href=" plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href=" plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href=" plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href=" dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php require_once("includes/header.php"); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php require_once('includes/left_side_bar.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Intent Function
            <small>Add</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
          </ol>
        </section>
		
		<!-- Main content -->
        <section class="content">
			<div class="col-md-6">	
				<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Input Addon</h3>
                </div>
                <div class="box-body">
                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                  <br>
                 
				 <div class="input-group">
					<button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			 </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src=" plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=" bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src=" plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src=" plugins/input-mask/jquery.inputmask.js"></script>
    <script src=" plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src=" plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src=" plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src=" plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src=" plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src=" plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src=" plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src=" plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src=" dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=" dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
	<script>
		$("#al_select_field_btn").click(function(){
			to_element_flag = $("#al_for_field_select").val();
			element_selected="";
			text_encloser = "`";
			if(to_element_flag==1){
				element_selected= "al_sql_query";
				text_encloser = "`";
			}else if(to_element_flag==2){
				element_selected= "al_response_schema";
				text_encloser = "*";
			}
			fieldSelected_txt = ""+$("#al_fields_select_box").val();
			split_fieldSelected_txt = fieldSelected_txt.split(",");
			modified_text=""
			
			$(split_fieldSelected_txt).each(function(key,text){
				//insertAtCaret_tbl_field(element_selected,text);
				if(key==split_fieldSelected_txt.length-1){
					modified_text+=text_encloser+text+text_encloser; 
				}else{
					modified_text+=text_encloser+text+text_encloser+",";
				}
			});
			insertAtCaret_tbl_field(element_selected,modified_text,"");
		});
		
		function insertAtCaret_tbl_field(areaId,text) {
			var txtarea = document.getElementById(areaId);
			var scrollPos = txtarea.scrollTop;
			var strPos = 0;
			var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ? 
				"ff" : (document.selection ? "ie" : false ) );
			if (br == "ie") { 
				txtarea.focus();
				var range = document.selection.createRange();
				range.moveStart ('character', -txtarea.value.length);
				strPos = range.text.length;
			}
			else if (br == "ff") strPos = txtarea.selectionStart;

			var front = (txtarea.value).substring(0,strPos);  
			var back = (txtarea.value).substring(strPos,txtarea.value.length); 
			txtarea.value=front+text+back;
			strPos = strPos + text.length;
			if (br == "ie") { 
				txtarea.focus();
				var range = document.selection.createRange();
				range.moveStart ('character', -txtarea.value.length);
				range.moveStart ('character', strPos);
				range.moveEnd ('character', 0);
				range.select();
			}
			else if (br == "ff") {
				txtarea.selectionStart = strPos;
				txtarea.selectionEnd = strPos;
				txtarea.focus();
			}
			txtarea.scrollTop = scrollPos;
		}
		
		
		$("#al_render_type_btn").click(function(){
			element_selected="al_response_schema";
			open_tag = "";
			close_tag="";
			fieldSelected_txt = $("#al_response_data_type").val();
			modified_text = "";
			caseText = fieldSelected_txt;
			//alert(fieldSelected_txt.substr(0,6));
			if(fieldSelected_txt.substr(0,6)=='say-as' ){
				caseText = "say-as";
			}
			
			switch(""+caseText.toLowerCase()){
				case  'break': 
							 open_tag = "<break time='1s'/>";
							 break;
				case  'p': 
							 open_tag = "<p>";
							 close_tag="</p>";
							 break;
				case  'say-as' : 
							 interpret_as=""+fieldSelected_txt.split('*')[1];
							 open_tag = "<say-as interpret-as='"+interpret_as+"'>";
							 close_tag = "</say-as>";
							 break;
				default :
						open_tag="";
						
			}
			insertAtCaret_renderType(element_selected,open_tag,close_tag);
		});
		
		function insertAtCaret_renderType(areaId,open_tag,close_tag) {
			var txtarea = document.getElementById(areaId);
			var scrollPos = txtarea.scrollTop;
			var strPos = 0;
			var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ? 
				"ff" : (document.selection ? "ie" : false ) );
			if (br == "ie") { 
				txtarea.focus();
				var range = document.selection.createRange();
				range.moveStart ('character', -txtarea.value.length);
				strPos = range.open_tag.length;
			}
			else if (br == "ff") strPos = txtarea.selectionStart;

			var front = (txtarea.value).substring(0,strPos);  
			var back = (txtarea.value).substring(strPos,txtarea.value.length); 
			txtarea.value=front+open_tag+back+close_tag;
			strPos = strPos + open_tag.length;
			if (br == "ie") { 
				txtarea.focus();
				var range = document.selection.createRange();
				range.moveStart ('character', -txtarea.value.length);
				range.moveStart ('character', strPos);
				range.moveEnd ('character', 0);
				range.select();
			}
			else if (br == "ff") {
				txtarea.selectionStart = strPos;
				txtarea.selectionEnd = strPos;
				txtarea.focus();
			}
			txtarea.scrollTop = scrollPos;
		}
		
		function validator(){
			is_error=0;
			to_focus= new Array();
			intent_name=$("#al_intent_name").val();
			if(intent_name==""){
				$("#al_intent_name").closest("div.form-group").addClass("has-error");
				err_label1='<label class="control-label err-label" for="al_intent_name"><i class="fa fa-times-circle-o">&nbsp;</i>Intent name required</label>';
				$("#al_intent_name").closest("div.form-group").prepend(err_label1);
				to_focus.push("#al_intent_name");
				is_error=1;
			}
			
			sql_qry=$("#al_sql_query").val();
			if(sql_qry==""){
				$("#al_sql_query").closest("div.form-group").addClass("has-error");
				err_label1='<label class="control-label err-label" for="al_sql_query"><i class="fa fa-times-circle-o">&nbsp;</i>Please define the query.</label>';
				$("#al_sql_query").closest("div.form-group").prepend(err_label1);
				to_focus.push("#al_sql_query");
				is_error=1;
			}
			
			response_text=$("#al_response_schema").val();
			if(response_text==""){
				$("#al_response_schema").closest("div.form-group").addClass("has-error");
				err_label1='<label class="control-label err-label" for="al_response_schema"><i class="fa fa-times-circle-o">&nbsp;</i>Please define the output response.</label>';
				$("#al_response_schema").closest("div.form-group").prepend(err_label1);
				to_focus.push("#al_response_schema");
				is_error=1;
			}
			
			//alert(is_error)
			if(is_error==1){
				$(to_focus[0]).focus();
				return false;
			}
			return true;
		}
		
		$(document).ready(function(){
			$("#al_intent_fn_save").click(function(){
				return validator();
			});
		});
		
		</script>
  </body>
</html>

<?php
	function connect_to_database($host,$username,$password,$db){
		try{
			$db= new PDO("mysql:dbname=$db;host=$host",$username,$password);
			return $db;
		}catch(PDOException $e){
			die("Error connectiong to server. Error :".$e->getMessage());
		}
	}
	function get_all_columns_name($con,$db,$table_name){
		$all_fields = "";
		if($con){
			if($table_name!="" && !empty($table_name)){
				$qry = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='".$db."' AND `TABLE_NAME`='".$table_name."'";
				if($st =$con->prepare($qry)){
					$st->execute();
					$recordCount = $st->rowCount();
					if($recordCount>0){
						$all_fields = $st->fetchAll(PDO::FETCH_ASSOC);
					}else{
						$all_fields=null;
					}/* While($row = $st->fetch(PDO::FETCH_ASSOC)){
						var_dump($row);
					} */
				}
			}
		}
		return $all_fields;
	}
?>