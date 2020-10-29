<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Common extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function getData($table,$where="",$options=array())
	{
		if(isset($options['field'])){
			$this->db->select($options['field']);
		}
				
		if($where != ""){
			$this->db->where($where);
		}
		if(isset($options['where_in']) && isset($options['where_in'])){
			 $this->db->where_in($options['colname'] ,$options['where_in']);
		}

		if (isset($options['sort_by']) && isset($options['sort_direction'])) {
			$this->db->order_by($options['sort_by'], $options['sort_direction']);
		}
		
		if (isset($options['group_by']) ) {
			$this->db->group_by($options['group_by']);
		}
		if (isset($options['limit']) && isset($options['offset']))	{
			$this->db->limit($options['limit'], $options['offset']);
		}
		else {
			if (isset($options['limit'])) {
			    $this->db->limit($options['limit']);
			}
		}
		$query = $this->db->get($table);
		$result = $query->result_array();
		if (!empty($options) && in_array('count', $options)) {

			return count($result);
		}
		if($result){
			if(isset($options) && in_array('single',$options)){ 
				return $result[0];
			}else{
				return $result;
			}
		}else{
			return false;
		}
	}

	public function getField($table,$data)
	{
		$post = array();
		$fields = $this->db->list_fields($table);
		foreach ($data as $key => $value) {
			if(in_array($key, $fields)){
				$post[$key] = $value;
			}
		}
		return $post;
	}

	public function getFieldKey($table)
	{
		return $this->db->list_fields($table);
	}

	public function insertData($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	public function updateData($table,$data,$where)
	{		
		return $this->db->update($table,$data,$where);			
	}

	public function sendMail($to,$subject,$message,$options = array())
	{

		 include(APPPATH.'third_party/PHPMailer/PHPMailerAutoload.php');
         
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'mail.villagelocal.com.au';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@villagelocal.com.au';
    $mail->Password = '8315303vl';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465; 
    /*$mail->addReplyTo('info@mediss-ng.com', 'mediss');
    $mail->addAddress('info@mediss-ng.com');*/
    $mail->addReplyTo('tanuja.ctinfotech@gmail.com', 'golec');
    $mail->addAddress($to);
    $mail->CharSet = 'UTF-8';
    //$mail->addAddress('tanuja.ctinfotech@gmail.com');  // Add a recipient             
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;                
    if($mail->send()){
        return true;   
    }
    else
    {
       return false;   
    } 
   }


    public function do_upload($file,$path)
    { 	
        $config['upload_path']          = $path;
        $config['allowed_types']        = '*';
        $config['encrypt_name']        = true;
        //$config['max_size']             = 5272;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload');
        $this->upload->initialize($config);
        
        if ( ! $this->upload->do_upload($file))
        {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            return $data;
        }
    }

    
 public function deleteData($table,$where)
{		
	return $this->db->delete($table,$where);
}
	

public function query($sql) 
 {
   $query = $this->db->query($sql);
   if ($query->num_rows() > 0) {
       
       return $query->result_array();
   }else
   {
    return FALSE;
   }
}

}
