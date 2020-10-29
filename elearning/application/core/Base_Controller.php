<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
error_reporting(0);
class Base_Controller extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		
	}

	public function frontHtml($title="Legend",$page,$data="")
	{
		$header['title'] = $title;
		$this->load->view('header',$header);
		$this->load->view($page,$data);
		$this->load->view('footer');
	}

	public function adminuser($title="Legend",$page,$data="")
	{
		$header['title'] = $title;
		$this->load->view('header_admin',$header);
		$this->load->view('sidebar_site',$header);
		$this->load->view($page,$data);
		$this->load->view('footer');
	}

	public function adminHtml($title="E-learning",$page,$data="")
	{
		$header['title'] = $title;
		$this->load->view('admin_header',$header);
		$this->load->view('sidebar');
		$this->load->view($page,$data);
		$this->load->view('admin_footer');
	}
	
	public function flashMsg($class,$msg)
	{
		$msg1 = '<div class="alert alert-'.$class.' alert-dismissible" role="alert">'.$msg.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      	<div class="clearfix"></div>';	
        $this->session->set_flashdata('msg',$msg1);  
        return true;      
	}

	public function response($status,$message,$other_option= array())
	{
       $status = ($status) =='true' ? "1" : "0";
		$response = array(
				"success" => $status ,			
				"message" => $message
		    );	
		if(!empty($other_option)){
			foreach ($other_option as $key => $value) {
				$response[$key] = $value;
			}
		}
		echo json_encode($response);
	}

	
	public function curl($url,$headers,$fields){

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
		$result = curl_exec($ch);         
		if ($result === FALSE) {
		   die('Curl failed: ' . curl_error($ch));
		}
		curl_close($ch);
		return $result;
	}

	function Apn($deviceToken,$message){  

		$url = 'https://fcm.googleapis.com/fcm/send';
	
		$fields = array
		(
			'to'	=> $deviceToken,
			'priority' => 'high',
			'notification' => array	('body'	=> $message['message'],	'title'	=> $message['title'],		'sound' => 'chime.aiff'),
			'data'  => $message
		);

		$headers = array
		(
			'Authorization: key=' . API_ACCESS_KEY_ios,
			'Content-Type: application/json'
		);

		$this->curl($url,$headers,$fields);
	}

	public function send_notification($tokens,$message)
	{	
		
		$url = 'https://fcm.googleapis.com/fcm/send';
		$fields = array(
				 	'registration_ids' => $tokens,
				 	'data' => $message
				);

		 $headers = array(
            'Authorization:key=AAAAq1iJkKo:APA91bEqKiWM8sWOP7OsW3bdbId-QV_X4mdrnq_7EVIT7POV4M3T5egtyAK30yOn2Gf4-tOUD9pzeIBCvkMEpuLNsxpDUogCNSAkgiFmv7QHkbs226vE8-jJaCW0PCchO8V4HWXqGQXM',
            'Content-Type: application/json'
        );

		$this->curl($url,$headers,$fields);
	}

	public function pagination($url,$table,$segment)
  {
    $this->load->library('pagination');
    $config = [
      'base_url'      =>  base_url($url),
      'per_page'      =>  10,
      'total_rows'    =>  $this->common->getData($table,array(),array('count')),
      'full_tag_open'   =>  "<ul class='pagination'>",
      'full_tag_close'  =>  "</ul>",
      'first_tag_open'  =>  '<li>',
      'first_tag_close' =>  '</li>',
      'last_tag_open'   =>  '<li>',
      'last_tag_close'  =>  '</li>',
      'next_tag_open'   =>  '<li>',
      'next_tag_close'  =>  '</li>',
      'prev_tag_open'   =>  '<li>',
      'prev_tag_close'  =>  '</li>',
      'num_tag_open'    =>  '<li>',
      'num_tag_close'   =>  '</li>',
      'cur_tag_open'    =>  "<li class='active'><a>",
      'cur_tag_close'   =>  '</a></li>',
    ];
    $this->pagination->initialize($config);
    $data = $this->common->getData($table,array(),array('limit' => $config['per_page'],'offset'=> $this->uri->segment($segment) ));
    return $data;
  } 

  
	 public function send_otp($code,$phone)
    {
    	include(APPPATH.'third_party/vendor/autoload.php');
    	//include(APPPATH.'third_party/Aws/Sns/SnsClient');
    	//include(APPPATH.'third_party/Aws/Exception/AwsException');

          $SnSclient = new \Aws\Sns\SnsClient([
		    'version'     => 'latest',
		    'region'      => 'us-east-1',
		    'credentials' => [
		        'key'    => 'AKIAT4LSHL254FRME4R3',
		        'secret' => 'fBoLxiPK6qzg3PIpYujd0ADfbm5c424yOOEL7FnG',
		    ],
		]);
        $otp = rand(1000,9999);
        $message = "$otp is your verification code to login to your Golec Account";
        $phone =trim($code.$phone);
		
	    $result = $SnSclient->publish([
	        'Message' => $message,
	        'PhoneNumber' => $phone,
	    ]);
	   if($result['MessageId'])
	    {
	      return $otp;
	      
	    } else
	    {
	    	return 0;
	    }

    }

}