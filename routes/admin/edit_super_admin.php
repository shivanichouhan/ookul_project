<?php include"header.php";
include"menu.php";
$b=explode('/',$a);
 $_GET['id']=$b['5'];
$rs=$obj->fetchById($_GET['id'],"super_admin","id"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <div class="content-wrapper">
                <div class="container">
                    <div class="content">
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1>Academic Year </h1>
                                <small>Add Academic Year <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="super_admin_list">Super Admin List</a></li>
                                    <li class="active">Super Admin</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add Super Admin</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  action="<?php echo $base1; ?>edit_super_admin_sub" enctype="multipart/form-data"  method="post">
                                            <input type="hidden" value="<?php echo $rs['id']; ?>" name="id">
                                            <div class="form-group">
                                                <label for="exampleSelect1">Digination</label>
                                                <select class="form-control" id="exampleSelect1" onChange="emplo(this.value);"  name="digination"  id="city">
                                                 <option value="">Digination</option>
                                                    <option value="1" <?php  if($rs['designation']==1){  ?>selected="selected" <?php  } ?>>Teacher</option>
                                                    <option value="2" <?php  if($rs['designation']==2){  ?>selected="selected" <?php  } ?>>Coupan Manager</option>
                                                     <option value="3" <?php  if($rs['designation']==3){  ?>selected="selected" <?php  } ?>>RelationShip Manager Super Admin</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
												<div id="employee">
												
												</div>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label"> Name</label>
                                                <input type="text" class="form-control" id="inputName" value="<?php echo $rs['name']; ?>" name="name" placeholder="Super Admin Name " required>
											</div>
											
											<div class="form-group">
                                                <label for="inputName" class="control-label">Email</label>
                                                <input type="email" class="form-control" id="inputName" value="<?php echo $rs['email']; ?>" name="email" placeholder="Email" required>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Phone </label>
                                                <input type="text" class="form-control" id="inputName" value="<?php echo $rs['phone']; ?>" name="phone" placeholder="phone" required>
											</div>
                                            <div class="form-group">
                                                <label for="inputName" class="control-label">Password </label>
                                                <input type="password" class="form-control" value="<?php echo $rs['password']; ?>" id="inputName" name="password" placeholder="password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName" class="control-label">Image  </label>
                                                <input type="file" class="form-control" id="inputName" name="image" placeholder="image" >
                                                 <input type="hidden" class="form-control" id="inputName" name="limg" placeholder="image" value="<?php echo $rs['image'] ?>" >
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Add Super Admin</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> 
       <?php include"footer.php"; ?>
       <script>
 function clas(a){
                 //alert(a);
                 $("#subject").load("subjectAjax.php?id="+a);
                  }
                  </script>
<script>
		function emplo(b){
					    //alert(b);
						
						var http=new XMLHttpRequest();
						http.onreadystatechange=function()
						{	
						if(http.readyState==4 && http.status==200)
						{
					 	document.getElementById("employee").innerHTML=http.responseText;
						}
						//alert(http.responseText);
						}
						
						http.open("GET","http://app.bongosikha.com/admin/employeeAjax.php?id="+b,true);
						http.send();
						//estimation(user,bus,date,id);
						}
						

				  </script>