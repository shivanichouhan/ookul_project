<?php
$a="http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
 $b=explode('/',$a);
   
$_GET['page']=$b['6']; 
 $page=$_GET['page'];  
 $file='bongorefral'.$page.'.'.txt; 
    function force_file_download($filepath, $filename = ''){
        if($filename == ''){
            $filename = basename($filepath);
        }

        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary"); 
        header("Content-disposition: attachment; filename=\"" . $filename . "\""); 
        readfile($filepath); // do the double-download-dance (dirty but worky)  
    }

    force_file_download($file);
    	
?>

  