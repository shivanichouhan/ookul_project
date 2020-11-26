<?php

include_once("../include/database.php");
$obj= new database();

$id=$_GET['id'];


if($id==100){

?>


<label for="inputName" class="control-label">Custom Date for Package Expiry</label>
<input type="date" class="form-control"  name="date">

<?php } else {?>





<?php } ?>


