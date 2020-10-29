<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Base_Controller {
	
	function __construct()
	{
		parent::__construct();
	}



	public function index()
	{
	  $data['video'] = $this->common->getdata('welcome_videos');
	  $this->frontHtml('legend','index',$data);
		
	}

	public function signup()
	{

		 $where= " email = '".$_POST['email']."'";
		 $result = $this->common->getData('register',$where,array('single'));
		 if(empty($result))
		 {

		  $where1= "phone	= '".$_POST['phone']."'";
		  $result1 = $this->common->getData('register',$where1,array('single'));
		  if(empty($result1))
		  {
		  	$insert = $this->common->insertData('register',$_POST);
		  	if($insert)
		  	{
		  		 $data = array('code'=>1,"msg"=>"you have successfully signup");
		 	     echo json_encode($data); die;
		  	}else
		  	{
		  		 $data = array('code'=>0,"msg"=>"There is the error in singup");
		 	     echo json_encode($data); die;
		  	}

		  }else{

		  		 $data = array('code'=>0,"msg"=>"phone number already exist");
		 	     echo json_encode($data); die;
		  }

		 }else{

		 	 $data = array('code'=>0,"msg"=>"email already exist");
		 	echo json_encode($data); die;
		 }
	}

	public function login()
	{
         $where= "(email	='".$_POST['email']."' OR phone	='".$_POST['email']."') AND password = '".$_POST['pass']."'";

		   $result = $this->common->getData('register',$where,array('single'));
		   if(!empty($result))
		   {

		   	 $member = array('email'=>$result['email'],'id'=>$result['id']);
    		 $this->session->set_userdata('member',$member);
		   	 echo "1"; die;
		   }
		   else
		   {
		 	 echo "0"; die;
		    }
          
		}


	public function profile()
	{

		$member = $this->session->userdata('member');
		if(empty($member)){ 
			redirect(base_url());
		}
		$data['user'] = $this->common->getdata('register',array('id'=>$member['id']),array('single'));
		$this->adminuser('profile','profile',$data);

	}

	public function updateprofile()
	{
		$member = $this->session->userdata('member');
		if(empty($member)){ 
			redirect(base_url());
		}

        if(isset($_FILES['picture']))
        {
            $image = $this->common->do_upload('picture','./admin/upload/');
           
            if(isset($image['upload_data'])){
                $_POST['picture'] = $image['upload_data']['file_name'];
            }
        }

        $post = $this->common->getField('register',$_POST);
        $result = $this->common->updateData('register',$post,array('id' =>$member['id']));

        if($result)
        {
        		$this->flashMsg('success','Profile Changed succcessfully');
        		redirect(base_url('home/profile'));
        }


	}

	 public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('flash_message','login successfully');
		redirect(base_url());
	}

	public function ebook()
	{
		$member = $this->session->userdata('member');
		if(empty($member)){ 
			redirect(base_url());
		}
		$this->adminuser('profile','e-book');
	}

	public function addvideo()
	{
		$member = $this->session->userdata('member');
		if(empty($member)){ 
			redirect(base_url());
		}
		$this->adminuser('add-video','add_video');
	}

	public function adddocument()
	{
	  $member = $this->session->userdata('member');
		if(empty($member)){ 
			redirect(base_url());
		}
		if(isset($_FILES['images']))
        {
            $image = $this->common->do_upload('images','./admin/upload/');

            if(isset($image['upload_data'])){
                $_POST['images'] = $image['upload_data']['file_name'];
            }
        }

        $_POST["user_id"] = $member['id'];
        $post = $this->common->getField('ebook_pdf',$_POST);
        $insert = $this->common->insertData('ebook_pdf',$post);

        if($insert)
        {
        	$this->flashMsg('success','E-book added succcessfully');
        	redirect('home/alldocumentlist');
        }else
        {
        	$this->flashMsg('danger','Error to add E-book, please check your network');
        	redirect('home/ebook');
        }

	}

	public function addvideosecion()
	{
	  $member = $this->session->userdata('member');
		if(empty($member)){ 
			redirect(base_url());
		}
		if(isset($_FILES['videos']))
        {
            $image = $this->common->do_upload('videos','./admin/upload/');

            if(isset($image['upload_data'])){
                $_POST['videos'] = $image['upload_data']['file_name'];
            }
        }

        if(isset($_FILES['thumbnail']))
        {
            $image = $this->common->do_upload('thumbnail','./admin/upload/');

            if(isset($image['upload_data'])){
                $_POST['thumbnail'] = $image['upload_data']['file_name'];
            }
        }

        $_POST["user_id"] = $member['id'];
        $post = $this->common->getField('welcome_videos',$_POST);
        $insert = $this->common->insertData('welcome_videos',$post);
        if($insert)
        {
        	$this->flashMsg('success','video added succcessfully');
        	redirect('home/allvideolist');
        }else
        {
        	$this->flashMsg('danger','Error to add video, please check your network');
        	redirect('home/addvideo');
        }

	}

	public function alldocumentlist()
	{
		$member = $this->session->userdata('member');
		if(empty($member)){ 
			redirect(base_url());
		}

		$data['user'] = $this->common->getdata('ebook_pdf',array('user_id'=>$member['id']));
		$this->adminuser('Ebook list','ebook_list',$data);

	}

	public function allvideolist()
	{
		$member = $this->session->userdata('member');
		if(empty($member)){ 
			redirect(base_url());
		}

		$data['user'] = $this->common->getdata('welcome_videos',array('user_id'=>$member['id']));
		$this->adminuser('Video list','video_list',$data);

	}

	public function deleteebook($id)
	{
       $dt = $this->common->deleteData('ebook_pdf',array('id'=>$id));
       if($dt){

       	 $this->flashMsg('success','E-book Deleted succcessfully');
  
       }
       redirect('home/alldocumentlist');
	}
	
	public function deletevideo($id)
	{
       $dt = $this->common->deleteData('welcome_videos',array('id'=>$id));
       if($dt){

       	 $this->flashMsg('success','Video Deleted succcessfully');
  
       }
       redirect('home/allvideolist');
	}


	public function gogoleredirect(){

		echo "google login successfull";
	}
	
	
}

