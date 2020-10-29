<?php 

include_once("../include/database.php");
$obj= new database();
$info=array();
$response789["generate_token"] = array();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.instamojo.com/oauth2/token/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

$payload = Array(
    'grant_type' => 'client_credentials',
    'client_id' => 'WuRokC5I3lI0PnYJfbXKhWFrS1LZ0GHCBm7Df6rF',
    'client_secret' => 'dly1u3gfOcEOeHi0gSEbNoB0sQk4OPgLXEuaA4tzhUw9T5cL06DFTvEXG08hhudJF17mq1R4UygWvoPmskTUKg6ZM6TWeeYEVORagZUtP6N3dnCut9IqmdhEj9rZYkG2',
    'scope' => 'virtual-accounts:write'
);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$decodedText = html_entity_decode($response);
$myArray = array(json_decode($response, true));

$access_token = $myArray[0]["access_token"];

// $response;

// echo '<br>';
// echo '<br>';

 $access_token;
//$access_token45 = json_encode($access_token);



$user_id=$_POST['user_id'];
$order_id=$_POST['order_id'];

if($user_id=='')
{
    $response789["msg"] = "Plase Enter User Id";
    $response789["error"] =true;
    $response789["success"] =0;
    @array_push($response789["generate_token"]);
    echo json_encode($response789);
}
else
{
if($order_id=='')
{
    $response789["msg"] = "Plase Enter Order Id";
    $response789["error"] =true;
    $response789["success"] =0;
    array_push($response789["generate_token"]);
    echo json_encode($response789);
    
}
else
{
    
             $response789["error"] =false;
			$response789["success"] =1;
			$response789["msg"] = "Access Token";
			$info["user_id"]=$user_id;
			$info["order_id"] = $order_id;
			$info["access_token"] = $access_token;
			

			
		array_push($response789["generate_token"], $info);

		echo json_encode($response789);
    
}
    
}





?>