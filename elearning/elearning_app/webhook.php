<?php
include"../include/database.php";
$obj=new database();
$id=$_GET['id']; 
$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
 
if($_GET['payment_status']=='Credit'){
    
	header("location:http://app.bongosikha.com/gov/success.php?oid=$id");
}else{
    header("location:http://app.bongosikha.com/PRO_panel/unsuccess.php?id=$user_id");
}
   
?>