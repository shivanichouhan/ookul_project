<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

     $block=$_GET['block'];
  $sdate=$_GET['sdate'];
 $edate=$_GET['edate'];
 $originalDate = $sdate;
	$newDate = date("d-m-Y", strtotime($originalDate));
 $originalDate1 = $edate;
	$newDate1 = date("d-m-Y", strtotime($originalDate1));
		
if($block=='')
{
	$_SESSION['report']="2";
	
	header("location:final_block_supervioser_report.php");
}
else {
if($block=='0')
{
	 
	if($sdate=='')
	{
		$_SESSION['report']="0";
		header("location:final_block_supervioser_report.php");
	}
	else
	{	
		if($edate=='')
		{
		 $_SESSION['report']="3";
		
		header("location:final_block_supervioser_report.php?sdate=$newDate");
		}
		else
		{
			$_SESSION['report']="4"; 
			header("location:final_block_supervioser_report.php?sdate=$newDate&edate=$newDate1");
			
		}
	}
}

else
{
	
	if($sdate=='')
	{
		$_SESSION['report']="1";
	header("location:final_block_supervioser_report.php?id=$block");
	}
	else
	{
		if($edate=='')
		{
			$_SESSION['report']="5";
			header("location:final_block_supervioser_report.php?id=$block&sdate=$newDate");
		}
		else 
		{
			$_SESSION['report']="6";
			header("location:final_block_supervioser_report.php?id=$block&sdate=$newDate&edate=$newDate1");
			
			
		}
		
		
	}
	
	
	
	
	
}
}
?>