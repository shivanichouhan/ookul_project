<?php  
 //filter.php  
 if(isset($_POST["order_date"], $_POST["order_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "elearning_portel_update");  
      $output = '';  
      $query = "  
           SELECT * FROM order_book  
           WHERE order_date BETWEEN '".$_POST["order_date"]."' AND '".$_POST["order_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="30%">Customer Name</th>  
                     <th width="43%">Item</th>  
                     <th width="10%">Value</th>  
                     <th width="12%">Order Date</th>  
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["order_id"] .'</td>  
                          <td>'. $row["user_id"] .'</td>  
                          <td>'. $row["user_name"] .'</td>  
                          <td>$ '. $row["price"] .'</td>  
                          <td>'. $row["order_date"] .'</td>  
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>

