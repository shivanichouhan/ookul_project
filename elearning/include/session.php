<?php
if(@$_SESSION['msg']!="")
{
?>
<script>
alert('<?php echo $_SESSION["msg"];?>');
</script>
<?php
$_SESSION['msg']="";
}
?>