<?php include"header.php";
include"menu.php"; ?>
<?php
$conn = mysql_connect('localhost','root','') or die (mysql_error);
$db   = mysql_select_db('elearning_portel_update', $conn) or die (mysql_error);
$select = "select distinct  user_register from city_id ";

$result = mysql_query($select);
$option = '';
while($row = mysql_fetch_assoc($result)){ 
$cot=$obj->fetchById($row['city_id'],"city","id");
    $option .= '<option value="'.$row['city_id'].'">'.$cot['city'].'</option>';
}
?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript">
            function getData(city_id, divid){
                $.ajax({
                    url: 'loademployeedata.php?city_id='+city_id, //call storeemdata.php to store form data
                    success: function(html) {
                        var ajaxDisplay = document.getElementById(divid);
                        ajaxDisplay.innerHTML = html;
                    }
                });
            }
        </script>


<!-- /. main header -->
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-box1"></i>
                            </div>
                            <div class="header-title">
                                <h1>Report</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                 
                                    <li class="active">Report/History</li>
                                </ol>
                            </div>
							<div class="header-title">
                                <h1>Report/History</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                 
                                    <li class="active">Report /History</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Report History</h4>
                                        </div>
                                    </div>
									<?php 
include"db.php";


?>

   <!-- CSS -->
   <link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>

   <!-- Script -->
   <script src='jquery-3.3.1.js' type='text/javascript'></script>
   <script src='jquery-ui.min.js' type='text/javascript'></script>
   <script type='text/javascript'>
   $(document).ready(function(){
     $('.dateFilter').datepicker({
        dateFormat: "yy-mm-dd"
     });
   });
   </script>
   <div class="panel-body">
   <div class="col-md-4">
	<form method='post' action='loademployeedata_fetch.php'>
            <select name="empid" id="empid" onchange="getData(this.value, 'displaydata')" style="width: 200px;padding: 10px;  margin: 11px;">
              <?php
                echo $option;
              ?>
            </select>
           
        
		</div>
   <div class="col-md-8">
   
     Start Date <input type='text' class='dateFilter' name='fromDate' value='<?php if(isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>' style='width: 200px;padding: 10px;  margin: 11px;'>
 
     End Date <input type='text' class='dateFilter' name='endDate' value='<?php if(isset($_POST['endDate'])) echo $_POST['endDate']; ?>' style='width: 200px;padding: 10px;  margin: 11px;'>

     <input type='submit' name='but_search' value='Search'  class="btn btn-success">
   </form>
   </div>
    <div id="displaydata">
            </div>
			
</div>                             
							 </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
           <?php include"footer.php"; ?> <!-- /. footer -->
        </div> <!-- ./wrapper -->
        <!-- jQuery -->
        <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel js -->
        <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- animsition js -->
        <script src="assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <!-- bootsnav js -->
        <script src="assets/plugins/bootsnav/js/bootsnav.js" type="text/javascript"></script>
        <!-- SlimScroll js -->
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick js-->
        <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- dataTables js -->
        <script src="assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->
        <script>
            $(document).ready(function () {

                "use strict"; // Start of use strict

                $('#dataTableExample1').DataTable({
                    "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
                    "iDisplayLength": 6
                });

                $("#dataTableExample2").DataTable({
                    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    buttons: [
                        {extend: 'copy', className: 'btn-sm'},
                        {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'print', className: 'btn-sm'}
                    ]
                });

            });
        </script>
    </body>

<!-- Mirrored from thememinister.com/bootstrap-admin-template/template/theme/adminpage_v1.0/dataTables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Aug 2018 05:44:38 GMT -->
</html>