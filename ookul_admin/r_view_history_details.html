<?php include"header.php";
include"menu.php"; 

$id=$_GET['id'];
$persentage;
$final;
$date;
$time;
$total_rong;
$q_mark_min;
$rong;
$rightm;
$right789;

 $ex4=$obj->fetchById($_GET['exam_type_id'],"gove_exam","id");
 
$use=$obj->fetchById($_GET['user_id'],"user_register_goverment","id");

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <div class="content-wrapper">
                <div class="container">
                    <div class="content">
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1><?php echo  $ex4['exam_name']; ?>  </br> <?php echo $use['name']; ?></h1>
                                
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4> <?php echo $ex4['exam_name']; ?> </br> </h4>
                                           <h4>  <?php echo $use['name']; ?></h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        

										    <?php 
										     $rs=$obj->fetchDetailById($id,"`question_answer_gov`","`id`"); 
                                        if($rs)
                                        {
                                        while($row=mysqli_fetch_assoc($rs))
                                        { 
                                       
                                        
                                        $ex44=$obj->fetchById($row['exam_type_id'],"gove_exam","id");
                                         $ex44['total_marks'];
                                        
                                        
                                        $someArray = json_decode($row['question'], true);
                                        $amswerArray = json_decode($row['answer'], true);
                                 
                                        foreach($someArray as $u => $value)
                                        
                                        {  
                                        //     foreach($amswerArray as $u1 => $value)
                                        // {
                                            
                                             $rs=$obj->fetchDetailById($someArray[$u],"`gover_multiple_question`","`id`"); 
                                                    if($rs)
                                                    {
                                                        
                                                        while($row1=mysqli_fetch_assoc($rs))
                                                        {  
                                                            // $response["error"] =false;
                                                            //     $response["success"] =1;
                                                            //     $response["msg"] = "Exam Details";
                                                           $r;
                                                                ?>
                                                                <div class="form-group">
                                                <label for="inputName" class="control-label">Question</label> </br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;"><?php echo $row1['question']; ?></label>
                                               
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Answer</label> </br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;"><?php if($row1['answer']=='1'){ echo  $row1['option1']; } if($row1['answer']=='2'){ echo  $row1['option2']; } if($row1['answer']=='3'){ echo  $row1['option3']; }  if($row1['answer']=='4'){ echo  $row1['option4']; } ?></label>
                                               
											</div>
                                                                <?php
                                                            //     $info["id"]=$row['id'];
                                                            //     $info["user_id"]=$row['user_id'];
                                                                                    
                                                            //  $info["question"]=$row1['id'];
                                                            //  $info["answer"]=$row1['answer'];
                                                             $info["answer1"]=$amswerArray[$r];
                                                              $user_ans=$amswerArray[$r];
                                                             if($row1['answer']==$user_ans)
                                                             {
                                                               
                                                                  $right789=$right789+1;
                                                                // $info["right_answer"]= 1;
                                                                 ?>
                                            <div class="form-group">
                                                <label for="inputName" class="control-label">Answer Given </label>
                                                </br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;">Right</label>
                                               
											</div>
                                                                 <?php 
                                                             }
                                                             else
                                                             {
                                                                 $rong=$rong+1;
                                                                  $info["right_answer"]= 0;
                                                                  //?>
                                           <div class="form-group">
                                                <label for="inputName" class="control-label">Answer Given</label>
                                            </br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;">Rong</label>
                                               
											</div>
                                                                  <?php
                                                             }
                                                        }
                                                        ?>
                                                          
                                                        <?php 
                                                       $date=$row['date'];
                                                        $time=$row['time'];
                                                         if($ex44['exam_type']=='1')
                                                    {
                                                       
                                                        ?>
                                                  	 <div class="form-group">
                                                <label for="inputName" class="control-label">Exam Type</label></br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;">Practise</label>
                                               
											</div>      
                                                        <?php 
                                                    }
                                                
                                                       $rightm=$right789 * $ex44['q_marks_pluse'];
                                                       
                                                       
                                                     $q_mark_min=  $ex44['q_mark_min']; 
                                                        ?>
                                         
											
											
										
									
                                                        <?php
                                                        // $response["total_right_quntion"] =$right789;
                                                           // $response["total_right_quntion_marks"] =$rightm;
                                                            //$response["total_rong_question"] =$rong;
                                                           // $response["total_rong_question_minus"]=$ex44['q_mark_min'];
                                                            
                                                            $mi=explode(",",$ex44['q_mark_min']);
                                                            $total_rong=$mi[0]/$rong;
                                                           // $response["total_rong_question_minus_cut"]=$total_rong;
                                                            ?>
                                           	                
                                                            <?php 
                                                            $final=$total_rong*$mi[1];
                                                            ?>
                                       
                                                            <?php
                                                           // $response["total_marks"]=$final;
                                                          $persentage=  $ex44['total_marks']/100*$final;
                                                            $response["persentage"] =$persentage;
                                                            ?>
                                                        
                                                            <?php
                                                        
                                                          $r++;
                                                    }
                                        }
                                        //}
                                  
                                       
                                        }
                               
                                        }
                                										    
										    
										    
										    
										    ?>
										        <div class="form-group">
                                                <label for="inputName" class="control-label">Total Right Quntion</label></br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;"><?php echo $right789; ?></label>
                                               
											</div> 
										    <div class="form-group">
                                                <label for="inputName" class="control-label">Total Right Quntion Marks</label></br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;"><?php echo $rightm; ?></label>
                                               
											</div>
										    <div class="form-group">
                                                <label for="inputName" class="control-label">Total Rong Question</label></br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;"><?php echo $rong; ?></label>
                                               
											</div> 
										    	<div class="form-group">
                                                <label for="inputName" class="control-label">Total Rong Question Minus</label></br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;"><?php echo $q_mark_min; ?></label>
                                               
											</div> 
										    	<div class="form-group">
                                                <label for="inputName" class="control-label">Total Rong Question Minus Cut</label></br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;"><?php echo $total_rong; ?></label>
                                               
											</div>  
										     <div class="form-group">
                                                <label for="inputName" class="control-label">Total Marks</label></br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;"><?php echo $final; ?></label>
                                               
											</div>  
											  <div class="form-group">
                                                <label for="inputName" class="control-label">Persentage</label></br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;"><?php echo $persentage; ?></label>
                                               
											</div>   
											<div class="form-group">
                                                <label for="inputName" class="control-label">Date</label></br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;"><?php echo $date; ?></label>
                                               
											</div>
											 <div class="form-group">
                                                <label for="inputName" class="control-label">Time</label></br>
                                                <label for="inputName" class="control-label" style="color: #484142!important;"><?php echo $time; ?></label>
                                               
											</div>
										
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> 
       <?php include"footer.php"; ?>