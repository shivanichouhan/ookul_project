<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$company = $this->session->userdata('admin');
	
		$this->id = $company['id'];

		$admin = $this->session->userdata('admin');
		if(empty($admin)){ 
			redirect(base_url('admin-login'));
		}

	}
	
	public function changepass()
	{
	    if(isset($_POST['password'])){
	         $pass = md5($_POST['password']);
	         $admin = $this->session->userdata('admin');
	         if(!empty($admin)){
	               $result = $this->common->updateData('admin',array('password'=>$pass),array('id'=>1));
	               	$this->flashMsg('success','Password Changed succcessfully');
	               	$this->adminHtml('Change password','changepass');
	         }else
	         {
	             redirect(base_url('admin-login'));
	         }
	       	
	         
	    }
	   
	    else{
	        	$this->adminHtml('Change password','changepass');
	    }
	    
	    
	}

	public function updateGallery()
	{

		 if(isset($_POST['Edit']))
	    {
	    	      
	        $gallery_id =$_POST['gallery_id'];
	        $result = $this->common->updateData('gallery',array('tittle'=>$_POST['tittle']),array('gallery_id'=>$gallery_id));
			if(!empty($_FILES['files']['name'][0]) && isset( $_FILES["files"]))
			{
	             $filesCount = count($_FILES['files']['name']);
	             
	              for($i = 0; $i < $filesCount; $i++)
	              {


		            $_FILES['image']['name']     = $_FILES['files']['name'][$i];
	                $_FILES['image']['type']     = $_FILES['files']['type'][$i];
	                $_FILES['image']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
	                $_FILES['image']['error']     = $_FILES['files']['error'][$i];
	                $_FILES['image']['size']     = $_FILES['files']['size'][$i];
	                $image = $this->common->do_upload2('image','./assets/userfile/gallery/');
        			if (isset($image['upload_data'])) {
        				$imagenm = $image['upload_data']['file_name'];        				
        			}else{
        					$this->flashMsg('danger','Image size must not be more then 2MB');
				           redirect(base_url('admin/addgallery'));
        			}
	        		$result = $this->common->insertData('gallery_images',array('gallery_id'=>$gallery_id,'image'=>$imagenm));
	                  
	              }
			 }
			 if(!empty($_FILES['video']['name'][0]))
			{
	             $filesCount = count($_FILES['video']['name']);
	             
	              for($i = 0; $i < $filesCount; $i++)
	              {


		            $_FILES['video']['name']     = $_FILES['video']['name'][$i];
	                $_FILES['video']['type']     = $_FILES['video']['type'][$i];
	                $_FILES['video']['tmp_name'] = $_FILES['video']['tmp_name'][$i];
	                $_FILES['video']['error']     = $_FILES['video']['error'][$i];
	                $_FILES['video']['size']     = $_FILES['video']['size'][$i];
	                $video = $this->common->do_uploadvideo('video','./assets/userfile/gallery/');
        			if (isset($video['upload_data'])) {
        				$vname = $video['upload_data']['file_name'];
        				
        			}
	        		$result = $this->common->insertData('gallery_video',array('gallery_id'=>$gallery_id,'	name'=>$vname));
	                  
	              }
			 }		
			if($result)
			{			
                $this->flashMsg('success','gallery added successfully');
				redirect(base_url('admin/gallerylist'));

			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addgallery'));
			}
			
		}else
		{	
			$this->adminHtml('Add gallery','add-gallery');
			
		}

	}
	
	public function deletecategory()
	{
	    $id = $this->input->post('id');

		 	$data['cat'] = $this->common->deleteData('classfied_category',array('category_id'=>$id));
		 	$data['cat'] = $this->common->deleteData('classfied',array('category_id'=>$id));
		 	$data['cat'] = $this->common->deleteData('classfied_subcategory',array('category_id'=>$id));
		
			if($data){
				echo '1';
			}else{
				echo '0';
			}
	}
	public function deleteradio()
	{
	    $id = $this->input->post('id');

		 	$data['cat'] = $this->common->deleteData('radio',array('radio_id'=>$id));
		
			if($data){
				echo '1';
			}else{
				echo '0';
			}
	}
	
		public function deletesubcategory()
	{
	    $id = $this->input->post('id');
		 
		 	$data['cat'] = $this->common->deleteData('classfied',array('subcatogory_id'=>$id));
		 	$data['cat'] = $this->common->deleteData('classfied_subcategory',array('subcatogory_id'=>$id));
		
			if($data){
				echo '1';
			}else{
				echo '0';
			}
	}
	
		public function deletetv()
	{
	    $id = $this->input->post('id');
		 
		 	$data['cat'] = $this->common->deleteData('tv',array('tv_id'=>$id));
		 	if($data){
				echo '1';
			}else{
				echo '0';
			}
	}
	
	public function categorylist()
	{
	    $data['cat'] = $this->common->getData('classfied_category','',array('sort_by'=>'category_id','sort_direction' => 'desc'));
		$this->adminHtml('Category List','categorylist',$data);
	}
	public function tvlist()
	{
	    $data['cat'] = $this->common->getData('tv','',array('sort_by'=>'tv_id','sort_direction' => 'desc'));
		$this->adminHtml('TV List','tvlist',$data);
	}
		public function livelist()
	{
	    $data['cat'] = $this->common->getData('livestreaming','',array('sort_by'=>'live_id','sort_direction' => 'desc'));
		$this->adminHtml(' Live event list','livelist',$data);
	}
	public function radiolist()
	{
	    $data['cat'] = $this->common->getData('radio','',array('sort_by'=>'radio_id','sort_direction' => 'desc'));
		$this->adminHtml('Radio List','radiolist',$data);
	}
	
		public function subcategorylist()
	{
	    $data['cat'] = $this->common->getData('classfied_subcategory','',array('sort_by'=>'subcatogory_id','sort_direction' => 'desc'));
		$this->adminHtml(' Subcategory List','subcategorylist',$data);
	}

	public function addgallery() // Tanuja Created
	{
	   
	    if( !empty($_POST) && isset($_POST['submit']))
	    {
	    	
	        $result = $this->common->insertData('gallery',array('tittle'=>$_POST['tittle']));
	        $gallery_id = $this->db->insert_id();
			if(!empty($_FILES['files']['name'][0]))
			{
	             $filesCount = count($_FILES['files']['name']);
	             
	              for($i = 0; $i < $filesCount; $i++)
	              {


		            $_FILES['image']['name']     = $_FILES['files']['name'][$i];
	                $_FILES['image']['type']     = $_FILES['files']['type'][$i];
	                $_FILES['image']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
	                $_FILES['image']['error']     = $_FILES['files']['error'][$i];
	                $_FILES['image']['size']     = $_FILES['files']['size'][$i];
	                $image = $this->common->do_upload('image','./assets/userfile/gallery/');
        			if (isset($image['upload_data'])) {
        				$image = $image['upload_data']['file_name'];
        				$_POST['image']=$image;
        			}
	        		$result = $this->common->insertData('gallery_images',array('gallery_id'=>$gallery_id,'image'=>$_POST['image']));
	                  
	              }
			 }
			 if(!empty($_FILES['video']['name'][0]))
			{
	             $filesCount = count($_FILES['video']['name']);
	             
	              for($i = 0; $i < $filesCount; $i++)
	              {


		            $_FILES['video']['name']     = $_FILES['video']['name'][$i];
	                $_FILES['video']['type']     = $_FILES['video']['type'][$i];
	                $_FILES['video']['tmp_name'] = $_FILES['video']['tmp_name'][$i];
	                $_FILES['video']['error']     = $_FILES['video']['error'][$i];
	                $_FILES['video']['size']     = $_FILES['video']['size'][$i];
	                $video = $this->common->do_upload('video','./assets/userfile/gallery/');
        			if (isset($video['upload_data'])) {
        				$video = $video['upload_data']['file_name'];
        				$_POST['video']=$video;
        			}
	        		$result = $this->common->insertData('gallery_video',array('gallery_id'=>$gallery_id,'	name'=>$_POST['video']));
	                  
	              }
			 }		
			if($result)
			{			
                $this->flashMsg('success','gallery added successfully');
				redirect(base_url('admin/gallerylist'));

			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addgallery'));
			}
			
		}else
		{	
			$this->adminHtml('Add gallery','add-gallery');
			
		}
	}

	public function editgallery()
	{
		$gid = $this->uri->segment(3);
		$data['title'] = $this->common->getData('gallery',array('gallery_id'=>$gid),array('single'));
	    $data['video'] = $this->common->getData('gallery_video',array('gallery_id'=>$gid));
	    $data['image'] = $this->common->getData('gallery_images',array('gallery_id'=>$gid));
		$this->adminHtml('Edit Gallery','edit-gallery',$data);
	}

	public function dashboard()
	{	
		$data['user'] = $this->common->getData('register','',array('count'));
		$this->adminHtml('Dashboard','admin/dashboard',$data);
	}


		public function privacy_policy()
	{
		$this->form_validation->set_rules('description','description','required');
		if($this->form_validation->run() == false)
		{	
		   $data['page'] = $this->common->getData('privacy_policy',array('id'=>2),array('single'));					
			$this->adminHtml('Add privacy policy','add_privacy',$data);
		}
		else
		{
			$result = $this->common->updateData('privacy_policy',array('description'=>$_POST['description']),array('id'=>2));
			
			if($result){
				$this->flashMsg('success','privacy policy updated successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/privacy_policy'));
		}
	}

	public function terms()
	{
		$this->form_validation->set_rules('description','description','required');
		if($this->form_validation->run() == false)
		{	
		   $data['page'] = $this->common->getData('privacy_policy',array('id'=>1),array('single'));					
			$this->adminHtml('Add Terms & condition','add-terms',$data);
		}
		else
		{
			$result = $this->common->updateData('privacy_policy',array('description'=>$_POST['description']),array('id'=>1));
			
			if($result){
				$this->flashMsg('success','Terms and Condition updated successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/terms'));
		}
	}
	public function about()
	{
		$this->form_validation->set_rules('description','description','required');
		if($this->form_validation->run() == false)
		{	
		   $data['page'] = $this->common->getData('privacy_policy',array('id'=>3),array('single'));					
			$this->adminHtml('About','add_about',$data);
		}
		else
		{
			$result = $this->common->updateData('privacy_policy',array('description'=>$_POST['description']),array('id'=>3));
			
			if($result){
				$this->flashMsg('success','Data updated successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/about'));
		}
	}
	
		

    	public function AdsList()
	{
		
		$data['contact'] = $this->common->getData('ads',array(),array());		
		//$data['link'] = 'admin/adsDetail/';
		$this->adminHtml('Ads List','ads-list',$data);
	}
	
	public function editadds()
	{
	    $id= $this->uri->segment(3);
	    if(!isset($_POST['submit']))
	    {
	    $data['gallery'] = $this->common->getData('ads',array('id' => $id), array('single'));
		$this->adminHtml('Update contact','add-ads',$data);
	    }else{
			
			unset($_POST["submit"]);
		 $id=  $_POST["id"];
		    unset($_POST["id"]);
		    if(!empty($_FILES['image']['name']))
		{
          
                $image = $this->common->do_upload1('image','./assets/userfile/gallery/');
        			if (isset($image['upload_data'])) {
        				$image = $image['upload_data']['file_name'];
        				$_POST['image']=$image;
        			}else{
        			    	$this->flashMsg('danger',$image['error']);
				             redirect(base_url('admin/addads'));
        			}
                  
                  
              
		 }
			$result = $this->common->updateData('ads',$_POST,array('id'=>$id));	
			if($result){
				$a = $this->flashMsg('success','Data update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/AdsList'),'refresh');
		}
		
	}
	    
	    
	    
	    
	    
	    
	    
	    
	
		public function addads() 
	{
	    
	    if(isset($_POST['submit']))
	    {
	  
	
		if(!empty($_FILES['image']['name']))
		{
          
                $image = $this->common->do_upload1('image','./assets/userfile/gallery/');
        			if (isset($image['upload_data'])) {
        				$image = $image['upload_data']['file_name'];
        				$_POST['image']=$image;
        			}else{
        			    	$this->flashMsg('danger',$image['error']);
				             redirect(base_url('admin/addads'));
        			}
                  
                  
              
		 }
			unset($_POST["submit"]);
			$result = $this->common->insertData('ads',$_POST);

			if($result)
			{			
                $this->flashMsg('success','ads added successfully');
				redirect(base_url('admin/Adslist'));

			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addads'));
			}
			
		}else
		{	
			$this->adminHtml('Add ads','add-ads');
			
		}
	}
	
	
	
	



	public function contactList()
	{
		
		$data['contact'] = $this->common->getData('contact',array(),array('single'));		
		$data['link'] = 'admin/contactDetail/';
		$this->adminHtml('contact List','contact-list',$data);
	}
	public function contactDetail($id)
	{

		$data['contact'] = $this->common->getData('contact',array('contact_id' => $id), array('single'));
	
		$this->adminHtml('contact Detail','contact-detail',$data);
	}


	public function editcontact()
	{

		$contact_id= $this->uri->segment(3);
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('phone_number','phone number','required');
		if($this->form_validation->run() == false){			
			$data['contact'] = $this->common->getData('contact',array('contact_id' => $contact_id), array('single'));
			$this->adminHtml('Update contact','add-contact',$data);
		}else{				
			
			unset($_POST["submit"]);
			$contact_id = $this->input->post('contact_id');
		    unset($_POST["contact_id"]);
			$result = $this->common->updateData('contact',$_POST,array('contact_id'=>$contact_id));	
			if($result){
				$a = $this->flashMsg('success','Data update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/contactList'),'refresh');
		}
	}


	public function gallerylist()
	{
		$data['gallery'] = $this->common->getData('gallery','',array('sort_by'=>'gallery_id','sort_direction' => 'desc'));
		$this->adminHtml('Gallery List','gallery-list',$data);
	}

	public function bmemberlist()
	{
		$data['member'] = $this->common->getData('Board_member','',array('sort_by'=>'position','sort_direction' => 'asc'));
		$this->adminHtml('BOARD MEMBER LIST','member-list',$data);
	}


	

	public function addBmember() // Tanuja Created
	{
	
		if(isset($_FILES['image']))
		{

			$image = $this->common->do_upload('image','./assets/userfile/member/');
			if (isset($image['upload_data'])) {
				$image = $image['upload_data']['file_name'];
				$_POST['image']=$image;
			}

			unset($_POST["submit"]);
			$result = $this->common->insertData('Board_member',$_POST);

			if($result)
			{			
                $this->flashMsg('success',' Board Member added successfully');
				redirect(base_url('admin//bmemberlist'));

			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addBmember'));
			}
			
		}else
		{	
			$this->adminHtml('Add Board Member','add-member');
			
		}
	}	

	public function deleteImage(){ 
        // Delete image data
      
        $delete = $this->common->deleteData('gallery_images',array('id'=>$_POST['id']));
      
           
        // Return the status 
        return $delete?true:false; 
    } 
    
     public function deletevideo($id){ 
       
    
        $result = $this->common->deleteData('welcome_videos',array('id'=>$id));

        if($result)
        {
          $a = $this->flashMsg('success','Video Deleted successfully');
          redirect('admin/videoList');
        }
    }

    public function addintrendingvideo($id)
    {		
    	 $result = $this->common->updateData('welcome_videos',
    	 	   						 array('status'=>2),array('id'=>$id));
        if($result)
        {
          $a = $this->flashMsg('success','Video added in Trending List');
          redirect('admin/videoList');
        }
    }

    public function removeintrendingvideo($id)
    {		
    	 $result = $this->common->updateData('welcome_videos',
    	 	   						 array('status'=>1),array('id'=>$id));
        if($result)
        {
          $a = $this->flashMsg('success','Video added in Trending List');
          redirect('admin/Trendingvideo');
        }
    }


	public function editBmember() // Tanuja Created
	{
		$id = $this->uri->segment(3);
	    $data['user']=$this->common->getData('Board_member',array('member_id'=>$id),array('single'));
		if(isset($_FILES['image']))
		{

			$image = $this->common->do_upload('image','./assets/userfile/member/');
			if (isset($image['upload_data'])) {
				$image = $image['upload_data']['file_name'];
				$_POST['image']=$image;
			}

			unset($_POST["submit"]);
		
			$result = $this->common->updateData('Board_member',$_POST,array('member_id'=>$_POST["member_id"]));
			if($result)
			{			
                $this->flashMsg('success',' Board Member edit successfully');
				redirect(base_url('admin/bmemberlist'));

			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addBmember'));
			}
			
		}else
		{	
			$this->adminHtml('Add Board Member','add-member',$data);
			
		}
	}

	public function bookedevent()
	{		
		$data['event'] = $this->common->eventbooking();
    	$this->adminHtml('Booking event','event/booking-list',$data);
	}

	public function donationhistory()
	{
		$data['result'] = $this->common->getdonation();
		$this->adminHtml('Donation History','history-list',$data);
	}
	
		public function nonmemberdonationhistory()
	{
		$data['result'] = $this->common->getData('donation_without_register','',array('sort_by'=>'donation_id','sort_direction' => 'desc'));
		$this->adminHtml('Non Member Donation History','nonhistory-list',$data);
	}

	
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('msg','Logged out successfully');
		redirect(base_url('admin-login'));
	}

	public function addcontributor()
	{
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('contributor_desc','description','required');
		$this->form_validation->set_rules('target_amount','target amount','required');	
		if($this->form_validation->run() == false)
		{

			$this->adminHtml('Add contributor','add-contributor');

		}else
		{
			$_POST['created_at'] = date('Y-m-d H:i:s');	

			if(isset($_FILES['image']))
            {
              $image = $this->common->do_upload('image','./assets/userfile/contributor/');
			   if(isset($image['upload_data']))
                {
                    $_POST['image'] = $image['upload_data']['file_name'];
                }
            }
		    $post = $this->common->getField('contributor',$_POST);			
			$result = $this->common->insertData('contributor',$post);
			if($result){
				$this->flashMsg('success','contributor added successfully');
				redirect(base_url('admin/conteributionList'));
			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addcontributor'));
			}
		}
	}

	public function addfaq()
	{
		$this->form_validation->set_rules('question','question','required');
		$this->form_validation->set_rules('answer','answer','required');
		if($this->form_validation->run() == false)
		{

			$this->adminHtml('Add FAQ','add-faq');

		}else
		{
			
		    $post = $this->common->getField('FAQ',$_POST);			
			$result = $this->common->insertData('FAQ',$post);
			if($result){
				$this->flashMsg('success','FAQ added successfully');
				redirect(base_url('admin/faqList'));
			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addfaq'));
			}
		}
	}



	public function addUser()
	{
		$this->form_validation->set_rules('fname','first name','required');
		$this->form_validation->set_rules('lname','last name','required');
		$this->form_validation->set_rules('email','email','trim|required|valid_email|is_unique[register.email] ',

		 		array('is_unique' => 'email already exist')

		);

		$this->form_validation->set_rules('phone','Phone','trim|required|is_unique[register.phone] ',

		 		array('is_unique' => 'Phone number already exist')

		);
		$this->form_validation->set_rules('password','password','required');
				
		if($this->form_validation->run() == false){
			$this->adminHtml('Add User','add-user');
		}else
		{			
			$image = $this->common->do_upload('picture','./admin/upload/');
			if (isset($image['upload_data'])) {
				$image = $image['upload_data']['file_name'];
				$_POST['picture']=$image;
			}

			//$data['image'] = $this->input->post('image');
			unset($_POST["submit"]);		
			$_POST['status']=1;
			$result = $this->common->insertData('register',$_POST);

			if($result){
				$this->flashMsg('success','User added successfully');
				redirect(base_url('admin/UserList'));
			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addUser'));
			}
		}
	}
	
	public function addcategory()
	{
		$this->form_validation->set_rules('cat_name','category name','required');
		if($this->form_validation->run() == false){
			$this->adminHtml('Add category','add-category');
		}else
		{			
			 if(isset($_FILES))
		    {
		        $video = $this->common->do_uploadvideo('cat_image','./assets/userfile/classfied/');
    			if (isset($video['upload_data'])) {
    				$video = $video['upload_data']['file_name'];
    				$_POST['cat_image']=$video;
    			} 
		    }
			 unset($_POST["submit"]);
			$result = $this->common->insertData('classfied_category',$_POST);
			if($result){
				$this->flashMsg('success','Category added successfully');
				redirect(base_url('admin/categorylist'));
			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addcategory'));
			}
		}
	}
	
		public function addtv()
	{
		$this->form_validation->set_rules('tv_url',' tv url','required');
		$this->form_validation->set_rules('name','name','required');
		if($this->form_validation->run() == false){
			$this->adminHtml('Add TV','add-tv');
		}else
		{	
		     if(isset($_FILES))
		    {
		        $video = $this->common->do_uploadvideo('tv_image','./assets/userfile/classfied/');
    			if (isset($video['upload_data'])) {
    				$video = $video['upload_data']['file_name'];
    				$_POST['tv_image']=$video;
    			} 
		    }
			
			 unset($_POST["submit"]);
			$result = $this->common->insertData('tv',$_POST);
			if($result){
				$this->flashMsg('success','TV added successfully');
				redirect(base_url('admin/tvlist'));
			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addtv'));
			}
		}
	}
	
		public function addlive()
	{
		$this->form_validation->set_rules('video_url',' live url','required');
		$this->form_validation->set_rules('name','name','required');
		if($this->form_validation->run() == false){
			$this->adminHtml('Add Live url','add-live');
		}else
		{
			
			 unset($_POST["submit"]);
			$result = $this->common->insertData('livestreaming',$_POST);
			if($result){
				$this->flashMsg('success','Live  url added successfully');
				redirect(base_url('admin/livelist'));
			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addlive'));
			}
		}
	}
		public function addradio()
	{
		$this->form_validation->set_rules('radio_url',' radio url','required');
		$this->form_validation->set_rules('radio_nm','name','required');
		if($this->form_validation->run() == false){
			$this->adminHtml('Add Radio','add-radio');
		}else
		{			
			
			 unset($_POST["submit"]);
			 if(isset($_FILES))
		    {
		        $video = $this->common->do_uploadvideo('radio_image','./assets/userfile/classfied/');
    			if (isset($video['upload_data'])) {
    				$video = $video['upload_data']['file_name'];
    				$_POST['radio_image']=$video;
    			} 
		    }
			$result = $this->common->insertData('radio',$_POST);
			if($result){
				$this->flashMsg('success','Radio added successfully');
				redirect(base_url('admin/radiolist'));
			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addradio'));
			}
		}
	}
	
	public function addsubcategory()
	{
		$this->form_validation->set_rules('subcategory_name','subcategory name','required');
		if($this->form_validation->run() == false){
		    $data['cat'] = $this->common->getData('classfied_category','',array('sort_by'=>'category_id','sort_direction' => 'desc'));
			$this->adminHtml('Add subcategory','add-subcategory',$data);
		}else
		{			
			
			 if(isset($_FILES))
		    {
		        $video = $this->common->do_uploadvideo('subcat_image','./assets/userfile/classfied/');
    			if (isset($video['upload_data'])) {
    				$video = $video['upload_data']['file_name'];
    				$_POST['subcat_image']=$video;
    			} 
		    }
			 unset($_POST["submit"]);
			$result = $this->common->insertData('classfied_subcategory',$_POST);
			if($result){
				$this->flashMsg('success','SubCategory added successfully');
				redirect(base_url('admin/subcategorylist'));
			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addsubcategory'));
			}
		}
	}


	public function addClassified()
	{
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('classfied_desc','description','required');
		$this->form_validation->set_rules('category_id','category name','required');
		if($this->form_validation->run() == false){
		     $data['cat'] = $this->common->getData('classfied_category','',array('sort_by'=>'category_id','sort_direction' => 'desc'));
			$this->adminHtml('Add Classified','add-classfied',$data);
		}
		else
		{   
		    if(isset($_FILES))
		    {
		        $image = $this->common->do_upload('image','./assets/userfile/classfied/');
    			if (isset($image['upload_data'])) {
    				$image = $image['upload_data']['file_name'];
    				$_POST['image']=$image;
    			} 
		    }
		    
		    if(isset($_FILES))
		    {
		        $video = $this->common->do_uploadvideo('video','./assets/userfile/classfied/');
    			if (isset($video['upload_data'])) {
    				$video = $video['upload_data']['file_name'];
    				$_POST['video']=$video;
    			} 
		    }
		   
			unset($_POST['submit']);
			$result = $this->common->insertData('classfied',$_POST);			
			if($result)
			{
				$this->flashMsg('success','Classified added successfully');
				redirect(base_url('admin/ClassifiedList'));
			}else{

				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addClassified'));
			}
	     }
	  }
	  
	  public function subcategorybycatid()
	  {
	      $cat_id = $this->input->post('cat_id');

	if(!empty($cat_id)){
		$sub = $this->common->getData('classfied_subcategory',array('category_id' =>$cat_id));

		if($sub){

			    $options1 = '<option value="">Please Select Subcategory</option>';
				foreach ($sub as $key => $value) {
					$options .= '<option value="'.$value['subcatogory_id'].'">'.$value['subcategory_name'].'</option>'; 
				    
				}
					echo $options1.$options;
		}
		else{
		 	echo '<option value="">Subcategory not available</option>'; 
		}
	}
	      
	  }

	public function edituser()
	{

		$user_id = $this->uri->segment(3);
		$this->form_validation->set_rules('fname','fname','required');
		$this->form_validation->set_rules('email','email','required');		
		$this->form_validation->set_rules('phone','Phone number','required');
		if($this->form_validation->run() == false){			
			$data['user'] = $this->common->getData('register',array('id' => $user_id), array('single'));
			$this->adminHtml('Update User','add-user',$data);
		}else{

			 if(!empty($_FILES['picture']['name']))

              {

			  $image = $this->common->do_upload('picture','./admin/upload');
			
				if (isset($image['upload_data'])) {
					$image = $image['upload_data']['file_name'];
					$_POST['picture']=$image;
					unset($_POST["submit"]);
				}

			}		
			
			unset($_POST["submit"]);
			$id = $this->input->post('id');
		    unset($_POST["id"]);
			$result = $this->common->updateData('register',$_POST,array('id'=>$id));	
			if($result){
				$a = $this->flashMsg('success','Data update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/UserList'),'refresh');
		}
	}
	
	public function editcategory()
	{

		$category_id = $this->uri->segment(3);
		$this->form_validation->set_rules('cat_name','category name','required');
		if($this->form_validation->run() == false){			
		 $data['cat'] = $this->common->getData('classfied_category',array('category_id' =>$category_id),array('single'));
			$this->adminHtml('Update Category','add-category',$data);
		}else{
		    
			 if(isset($_FILES))
		    {
		        $video = $this->common->do_uploadvideo('cat_image','./assets/userfile/classfied/');
    			if (isset($video['upload_data'])) {
    				$video = $video['upload_data']['file_name'];
    				$_POST['cat_image']=$video;
    			} 
		    }
			unset($_POST["submit"]);
			$id = $this->input->post('category_id');
		    unset($_POST["category_id"]);
			$result = $this->common->updateData('classfied_category',$_POST,array('category_id'=>$id));		
			if($result){
				$a = $this->flashMsg('success','Category update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/categorylist'),'refresh');
		}
	}
	
	public function edittv()
	{

		$category_id = $this->uri->segment(3);
    	$this->form_validation->set_rules('tv_url',' tv url','required');
		$this->form_validation->set_rules('name','name','required');
		if($this->form_validation->run() == false){			
		 $data['cat'] = $this->common->getData('tv',array('tv_id' =>$category_id),array('single'));
			$this->adminHtml('Update Tv','add-tv',$data);
		}else{
			
			unset($_POST["submit"]);
			if(isset($_FILES))
		    {
		        $video = $this->common->do_uploadvideo('tv_image','./assets/userfile/classfied/');
    			if (isset($video['upload_data'])) {
    				$video = $video['upload_data']['file_name'];
    				$_POST['tv_image']=$video;
    			} 
		    }
			$id = $this->input->post('tv_id');
		    unset($_POST["tv_id"]);
			$result = $this->common->updateData('tv',$_POST,array('tv_id'=>$id));		
			if($result){
				$a = $this->flashMsg('success','Tv update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/tvlist'),'refresh');
		}
	}
	
		public function editlive()
	{

		$category_id = $this->uri->segment(3);
    	$this->form_validation->set_rules('video_url',' video url','required');
		$this->form_validation->set_rules('name','name','required');
		if($this->form_validation->run() == false){			
		 $data['cat'] = $this->common->getData('livestreaming',array('live_id' =>$category_id),array('single'));
			$this->adminHtml('Update url','add-live',$data);
		}else{
			
			unset($_POST["submit"]);
			$id = $this->input->post('live_id');
		    unset($_POST["live_id"]);
			$result = $this->common->updateData('livestreaming',$_POST,array('live_id'=>$id));		
			if($result){
				$a = $this->flashMsg('success','url update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/livelist'),'refresh');
		}
	}
	
	public function editradio()
	{

		$category_id = $this->uri->segment(3);
    	$this->form_validation->set_rules('radio_url',' radio url','required');
		$this->form_validation->set_rules('radio_nm','name','required');
		if($this->form_validation->run() == false){			
		 $data['cat'] = $this->common->getData('radio',array('radio_id' =>$category_id),array('single'));
			$this->adminHtml('Update Radio','add-radio',$data);
		}else{
			
			unset($_POST["submit"]);
			if(isset($_FILES))
		    {
		        $video = $this->common->do_uploadvideo('radio_image','./assets/userfile/classfied/');
    			if (isset($video['upload_data'])) {
    				$video = $video['upload_data']['file_name'];
    				$_POST['radio_image']=$video;
    			} 
		    }
			$id = $this->input->post('radio_id');
		    unset($_POST["radio_id"]);
			$result = $this->common->updateData('radio',$_POST,array('radio_id'=>$id));		
			if($result){
				$a = $this->flashMsg('success','radio update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/radiolist'),'refresh');
		}
	}
	
	
	
	public function editsubcategory()
	{

		$suncat_id = $this->uri->segment(3);
		$this->form_validation->set_rules('subcategory_name','subcategory name','required');
		if($this->form_validation->run() == false){			
		 $data['cat'] = $this->common->getData('classfied_category');
		 $data['subcat'] = $this->common->getData('classfied_subcategory',array('subcatogory_id' =>$suncat_id),array('single'));
			$this->adminHtml('Update Subcategory','add-subcategory',$data);
		}else{
			
			if(isset($_FILES))
		    {
		        $video = $this->common->do_uploadvideo('subcat_image','./assets/userfile/classfied/');
    			if (isset($video['upload_data'])) {
    				$video = $video['upload_data']['file_name'];
    				$_POST['subcat_image']=$video;
    			} 
		    }
			unset($_POST["submit"]);
			$id = $this->input->post('subcatogory_id');
		    unset($_POST["subcatogory_id"]);
			$result = $this->common->updateData('classfied_subcategory',$_POST,array('subcatogory_id'=>$id));		
			if($result){
				$a = $this->flashMsg('success','SubCategory update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/subcategorylist'),'refresh');
		}
	}

	public function editevent()
	{

		$event_id = $this->uri->segment(3);
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('event_desc','Description','required');
		$this->form_validation->set_rules('location','location','required');
		$this->form_validation->set_rules('edate_time','date and time','required');
							
			
		if($this->form_validation->run() == false){			
			$data['event'] = $this->common->getData('event',array('event_id' =>$event_id), array('single'));
			$this->adminHtml('Add Event','add-event',$data);
		}else{

			 if(!empty($_FILES['image']['name']))

              {			
			  $image = $this->common->do_upload('image','./assets/userfile/event');
			
				if (isset($image['upload_data'])) {
					$image = $image['upload_data']['file_name'];
					$_POST['image']=$image;	
				}

			}
			unset($_POST["submit"]);
			$event_id = $this->input->post('event_id');
		    unset($_POST["event_id"]);
			$result = $this->common->updateData('event',$_POST,array('event_id'=>$event_id));			
			if($result){
				$a = $this->flashMsg('success','event update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/eventList'),'refresh');
		}
	}

	public function editcontributor()
	{
		$contributor_id = $this->uri->segment(3);
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('contributor_desc','description','required');
		$this->form_validation->set_rules('target_amount','target amount','required');
		if($this->form_validation->run() == false){			
			$data['contributor'] = $this->common->getData('contributor',array('contributor_id' =>$contributor_id), array('single'));
			$this->adminHtml('Update Contributor','add-contributor',$data);
		}else
		{

			 
			 if(isset($_FILES['image']))
            {
              $image = $this->common->do_upload('image','./assets/userfile/contributor/');
			   if(isset($image['upload_data']))
                {
                    $_POST['image'] = $image['upload_data']['file_name'];
                }
            }

        	
			unset($_POST["submit"]);
			$contributor_id = $this->input->post('contributor_id');
		    unset($_POST["contributor_id"]);
			$result = $this->common->updateData('contributor',$_POST,array('contributor_id'=>$contributor_id));
			if($result){
				$a = $this->flashMsg('success','Data update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/conteributionList'),'refresh');
		}
	}

	public function editfaq()
	{

		$faq_id = $this->uri->segment(3);
		$this->form_validation->set_rules('question','question','required');
		$this->form_validation->set_rules('answer','answer','required');
		if($this->form_validation->run() == false){			
			$data['faq'] = $this->common->getData('FAQ',array('faq_id' =>$faq_id), array('single'));
			$this->adminHtml('Update FAQ','add-faq',$data);
		}else
		{		
        	
			unset($_POST["submit"]);
			$faq_id = $this->input->post('faq_id');
		    unset($_POST["faq_id"]);
			$result = $this->common->updateData('FAQ',$_POST,array('faq_id'=>$faq_id));
			if($result){
				$a = $this->flashMsg('success','Data update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/faqList'),'refresh');
		}
	}

	public function editclassfied()
	{

		$job_id = $this->uri->segment(3);
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('classfied_desc','description','required');
		$this->form_validation->set_rules('category_id','category name','required');
		if($this->form_validation->run() == false)
		{			
			$data['classfied'] = $this->common->getData('classfied',array('classified_id' => $job_id), array('single'));
			 $data['cat'] = $this->common->getData('classfied_category','',array('sort_by'=>'category_id','sort_direction' => 'desc'));
			  $data['subcat'] = $this->common->getData('classfied_subcategory',array('category_id'=>$data['classfied']['category_id']),array('sort_by'=>'subcatogory_id','sort_direction' => 'desc'));
			$this->adminHtml('Update Job','add-classfied',$data);
		}else{
            
             if(isset($_FILES))
		    {
		        $image = $this->common->do_upload('image','./assets/userfile/classfied/');
    			if (isset($image['upload_data'])) {
    				$image = $image['upload_data']['file_name'];
    				$_POST['image']=$image;
    			} 
		    }
		    if(isset($_FILES))
		    {
		        $video = $this->common->do_uploadvideo('video','./assets/userfile/classfied/');
    			if (isset($video['upload_data'])) {
    				$video = $video['upload_data']['file_name'];
    				$_POST['video']=$video;
    			} 
		    }
			unset($_POST["submit"]);
			$job_id = $this->input->post('classified_id');
		    unset($_POST["classified_id"]);
			$result = $this->common->updateData('classfied',$_POST,array('classified_id'=>$job_id));			
			if($result)
			{
				$a = $this->flashMsg('success','classified update successfully');

			}else
			{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/ClassifiedList'),'refresh');
		}
	}


	public function deletegalary($gid)
	{
	    $result = $this->common->deleteData('gallery',array('gallery_id'=>$gid));
        if($result)
        {
          $a = $this->flashMsg('success','gallery Deleted successfully');
          redirect('admin/gallerylist');
        }

	}
	
		public function deleteaboutimg($gid)
	{
	    $result = $this->common->deleteData('abountimg',array('id'=>$gid));
        if($result)
        {
          $a = $this->flashMsg('success','Image Deleted successfully');
          redirect('admin/aboutList');
        }

	}
	
		public function delethomeimg($gid)
	{
	    $result = $this->common->deleteData('homeimg',array('id'=>$gid));
        if($result)
        {
          $a = $this->flashMsg('success','Image Deleted successfully');
          redirect('admin/homeimglist');
        }

	}


		public function deleteads($gid)
	{
	    $result = $this->common->deleteData('ads',array('id'=>$gid));
        if($result)
        {
          $a = $this->flashMsg('success','ads Deleted successfully');
          redirect('admin/adslist');
        }

	}
		public function deletelive()
	{
	    $id = $this->input->post('id');
		 
		 	$data['cat'] = $this->common->deleteData('livestreaming',array('live_id'=>$id));
		 	if($data){
				echo '1';
			}else{
				echo '0';
			}
	}

	public function deletemember($bid)
	{
	    $result = $this->common->deleteData('Board_member',array('member_id'=>$bid));
        if($result)
        {
          $a = $this->flashMsg('success','Member Deleted successfully');
          redirect('admin/bmemberlist');
        }

	}
	public function deleteevent($eid)
	{
		 $result = $this->common->deleteData('event',array('event_id'=>$eid));
        if($result)
        {
          $a = $this->flashMsg('success','Event Deleted successfully');
          redirect('admin/eventList');
        }

	}

	public function deletefaq($fid)
	{
	    $result = $this->common->deleteData('FAQ',array('faq_id'=>$fid));
        if($result)
        {
          $a = $this->flashMsg('success','Deleted successfully');
          redirect('admin/faqList');
        }

	}    

	public function contributorDetail($cid)
	{
		$data['contributor'] = $this->common->getData('contributor',array('contributor_id' =>$cid), array('single'));
		$this->adminHtml('contributor Detail','contributor/contributor-detail',$data);
	}

	public function faqDetail($fid)
	{
		$data['faq'] = $this->common->getData('FAQ',array('faq_id' =>$fid), array('single'));
		$this->adminHtml('FAQ Detail','FAQ/faq-detail',$data);
	}

	public function userDetail($id)
	{

		$data['user'] = $this->common->getData('register',array('id' => $id), array('single'));
	
		$this->adminHtml('User Detail','user/user-detail',$data);
	}

	public function videoDetail($id)
	{
		$data['user'] = $this->common->getData('welcome_videos',array('id' => $id), array('single'));
	
		$this->adminHtml('video Detail','video/video-detail',$data);

	}


	public function ClassifiedDetail($job_id)
	{

		$data['classfied'] = $this->common->getData('classfied',array('classified_id' => $job_id), array('single'));
	
		$this->adminHtml('classfied Detail','classfied/classfied-detail',$data);
	}

	public function deleteuser($user_id){  // Tanuja created

        $result = $this->common->deleteData('register',array('id'=>$user_id));
        if($result)
        {
          $a = $this->flashMsg('success','User Deleted successfully');
          redirect('admin/UserList');
        }
	}

	public function deleteclassfied($job_id){  // Tanuja created

        $result = $this->common->deleteData('classfied',array('classified_id'=>$job_id));
        if($result)
        {
          $a = $this->flashMsg('success','classified Deleted successfully');
          redirect('admin/ClassifiedList');
        }
	}

	public function deletecontributor($c_id){  // Tanuja created

        $result = $this->common->deleteData('contributor',array('contributor_id'=>$c_id));
        if($result)
        {
          $a = $this->flashMsg('success','Contributor Deleted successfully');
          redirect('admin/conteributionList');
        }
	}
		
	
	public function eventDetail($eid)
	{
		$data['event'] = $this->common->getData('event',array('event_id' =>$eid), array('single'));
		$this->adminHtml('Event Detail','event/event-detail',$data);
	}
		
		

	public function conteributionList()
	{
		$data['contributor'] = $this->common->getData('contributor',array());
		$data['link'] = 'admin/contributorDetail/';
		$this->adminHtml('contributor List','contributor/contributor-list',$data);
	}
	public function eventList()
	{
		$data['event'] = $this->common->getData('event',array());
		$data['link'] = 'admin/eventDetail/';
		$this->adminHtml('event List','event/event-list',$data);
	}
	public function faqList()
	{
		$data['faq'] = $this->common->getData('FAQ',array());
		$data['link'] = 'admin/faqDetail/';
		$this->adminHtml('FAQ List','FAQ/faq-list',$data);
	}
    
    public function addaboutimg() 
	{
	
		if(isset($_FILES['image']))
		{

			$image = $this->common->do_upload('image','./assets/userfile/gallery/');
			if (isset($image['upload_data'])) {
				$image = $image['upload_data']['file_name'];
				$_POST['image']=$image;
			}
			unset($_POST["submit"]);
			$result = $this->common->insertData('abountimg',$_POST);

			if($result)
			{			
                $this->flashMsg('success','image added successfully');
				redirect(base_url('admin/aboutList'));

			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addaboutimg'));
			}
			
		}else
		{	
			$this->adminHtml('Add Aboutus image','add-about');
			
		}
	}
	
	public function addhomeimg() 
	{
	
		if(isset($_FILES['image']))
		{

			$image = $this->common->do_upload('image','./assets/userfile/gallery/');
			if (isset($image['upload_data'])) {
				$image = $image['upload_data']['file_name'];
				$_POST['image']=$image;
			}
			unset($_POST["submit"]);
			$result = $this->common->insertData('homeimg',$_POST);

			if($result)
			{			
                $this->flashMsg('success','image added successfully');
				redirect(base_url('admin/homeimglist'));

			}else{
				$this->flashMsg('danger','Some error occured. Please try again');
				redirect(base_url('admin/addhomeimg'));
			}
			
		}else
		{	
			$this->adminHtml('Add Banner image','add-homeimg');
			
		}
	}
	public function UserList()
	{
		
		$data['user'] = $this->common->getData('register','',array('sort_by'=>'id','sort_direction' => 'desc'));
		$data['link'] = 'admin/userDetail/';
		$this->adminHtml('Members List','user/user-list',$data);
	}

	public function videoList()
	{
		
		$data['user'] = $this->common->getData('welcome_videos',array('status'=>1),array('sort_by'=>'id','sort_direction' => 'desc'));
		$data['link'] = 'admin/videodetail/';
		$this->adminHtml('video List','video/video-list',$data);
	}

	public function Trendingvideo()
	{
		
		$data['user'] = $this->common->getData('welcome_videos',array('status'=>2),array('sort_by'=>'id','sort_direction' => 'desc'));
		$data['link'] = 'admin/videodetail/';
		$this->adminHtml('video List','video/video-list',$data);
	}
	public function aboutList()
	{
		
		$data['about'] = $this->common->getData('abountimg','',array('sort_by'=>'id','sort_direction' => 'desc'));
		$this->adminHtml('About us Image List','about-list',$data);
	}
	public function homeimglist()
	{
		
		$data['about'] = $this->common->getData('homeimg','',array('sort_by'=>'id','sort_direction' => 'desc'));
		$this->adminHtml('Banner Image','homeimg-list',$data);
	}
	
	public function addobi()
	{
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_rules('death_dt','date and time','required');
		if($this->form_validation->run() == false)
		{						
			$this->adminHtml('Add obituries','add-obitutries');
		}else{

			 if(isset($_FILES['image']))
            {
              $image = $this->common->do_upload('image','./assets/userfile/obituries/');
			   if(isset($image['upload_data']))
                {
                    $_POST['image'] = $image['upload_data']['file_name'];
                }
            }
			$post = $this->common->getField('obituries',$_POST);
			
			$result = $this->common->insertData('obituries',$post);
			
			if($result){
				$this->flashMsg('success','Data added successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/obList'),'refresh');
		}
	}
	
	public function obituriesDetail($id)
	{

		$data['obs'] = $this->common->getData('obituries',array('obitury_id' => $id), array('single'));
	
		$this->adminHtml('obituries Detail','obituries/obituries-detail',$data);
	}
	public function deleteobi($ob_id){  // Tanuja created

        $result = $this->common->deleteData('obituries',array('obitury_id'=>$ob_id));
        if($result)
        {
          $a = $this->flashMsg('success',' Deleted successfully');
          redirect('admin/obList');
        }
	}
	 public function editobi()
	{

		$ob_id = $this->uri->segment(3);
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_rules('death_dt','date and time','required');
		if($this->form_validation->run() == false){			
			$data['obs'] = $this->common->getData('obituries',array('obitury_id' =>$ob_id), array('single'));
			$this->adminHtml('Update obituries','add-obitutries',$data);
		}else{

			 if(!empty($_FILES['image']['name']))

              {

			
			  $image = $this->common->do_upload('image','./assets/userfile/obituries');
			
				if (isset($image['upload_data'])) {
					$image = $image['upload_data']['file_name'];
					$_POST['image']=$image;
					unset($_POST["submit"]);
				}

			}		
			
			unset($_POST["submit"]);
			$id = $this->input->post('obitury_id');
		    unset($_POST["obitury_id"]);
			$result = $this->common->updateData('obituries',$_POST,array('obitury_id'=>$id));		
			if($result){
				$a = $this->flashMsg('success','Data update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/obList'),'refresh');
		}
	}
	
	public function obList()
	{
		
		$data['obs'] = $this->common->getData('obituries','',array('sort_by'=>'obitury_id','sort_direction' => 'desc'));
		$data['link'] = 'admin/obituriesDetail/';
		$this->adminHtml('obituries List','obituries/obituries-list',$data);
	}

	public function ClassifiedList()
	{
		
		$data['classfied'] = $this->common->getData('classfied','',array('sort_by'=>'classified_id','sort_direction' => 'desc'));
		$data['link'] = 'admin/ClassifiedDetail/';
		$this->adminHtml('classfied List','classfied/classfied-list',$data);
	}

	public function addevent()
	{
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('event_desc','Description','required');
		$this->form_validation->set_rules('location','location','required');
		$this->form_validation->set_rules('edate_time','date and time','required');
		if($this->form_validation->run() == false)
		{						
			$this->adminHtml('Add Event','add-event');
		}else{

			 if(isset($_FILES['image']))
            {
              $image = $this->common->do_upload('image','./assets/userfile/event/');
			   if(isset($image['upload_data']))
                {
                    $_POST['image'] = $image['upload_data']['file_name'];
                }
            }
			$post = $this->common->getField('event',$_POST);
			
			$result = $this->common->insertData('event',$post);
			
			if($result){
				$this->flashMsg('success','Data added successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/eventList'),'refresh');
		}
	}

	public function aboutUs()
	{
		$this->form_validation->set_rules('page_desc','page desc','required');
		if($this->form_validation->run() == false){		
		     
		     $data['page'] = $this->common->getData('page',array('page_id'=>'1'),array('single'));
			$this->adminHtml('About Us','add-aboutus',$data);
		}else{
			
			
			$result = $this->common->updateData('page',array('page_desc'=>$_POST['page_desc']),array('page_id'=>'1'));
			
			if($result){
				$a = $this->flashMsg('success','Data Update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/aboutUs'),'refresh');
		}
	}
	
		public function privacypolicy()
	{
		$this->form_validation->set_rules('page_desc','page desc','required');
		if($this->form_validation->run() == false){		
		     
		     $data['page'] = $this->common->getData('page',array('page_id'=>'7'),array('single'));
			$this->adminHtml('Privacy Policy','add-privacy',$data);
		}else{
			
			$result = $this->common->updateData('page',array('page_desc'=>$_POST['page_desc']),array('page_id'=>'7'));
			
			if($result){
				$a = $this->flashMsg('success','Data Update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/privacypolicy'),'refresh');
		}
	}
	
	
	public function editfooter()
	
	  {
	      
		$this->form_validation->set_rules('page_desc','page desc','required');
		if($this->form_validation->run() == false){		
		     
		     $data['page'] = $this->common->getData('page',array('page_id'=>'3'),array('single'));
			$this->adminHtml('Footer Section','add-footersection',$data);
		}else{
			
			$result = $this->common->updateData('page',array('page_desc'=>$_POST['page_desc']),array('page_id'=>'3'));
			
			if($result){
				$a = $this->flashMsg('success','Data Update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/editfooter'),'refresh');
		}
	}
	
	
		public function editnewsletter()
	
	  {
	      
		$this->form_validation->set_rules('page_desc','page desc','required');
		if($this->form_validation->run() == false){		
		     
		     $data['page'] = $this->common->getData('page',array('page_id'=>'4'),array('single'));
			$this->adminHtml('Newsletter Section','add-newsletter',$data);
		}else{
			
			$result = $this->common->updateData('page',array('page_desc'=>$_POST['page_desc']),array('page_id'=>'4'));
			
			if($result){
				$a = $this->flashMsg('success','Data Update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/editnewsletter'),'refresh');
		}
	}
	
		public function add_livestream()
	
	  {
	      
		$this->form_validation->set_rules('page_id','page','required');
		if($this->form_validation->run() == false){		
		     
		     $data['page'] = $this->common->getData('page',array('page_id'=>'9'),array('single'));
			$this->adminHtml('Change Live stream url','add-liveurl',$data);
		}
	 }
	 
	 public function editlivestream()
	 {
	   
	     
	      if(!empty($_FILES['page_desc2']))
		    {
		        $video = $this->common->do_uploadvideo('page_desc2','./assets/userfile/classfied/');
		        
    			if (isset($video['upload_data'])) {
    				$video = $video['upload_data']['file_name'];
    				$_POST['page_desc2']=$video;  
    			} 
		    }
			unset($_POST['submit']);
			$result = $this->common->updateData('page',$_POST,array('page_id'=>'9'));
			
			if($result){
				$a = $this->flashMsg('success','Data Update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/add_livestream'),'refresh');
		}
	
		    
		    
	
		
     	public function editeventtext()
	
	  {
	      
		$this->form_validation->set_rules('page_desc','page desc','required');
		if($this->form_validation->run() == false){		
		     
		     $data['page'] = $this->common->getData('page',array('page_id'=>'5'),array('single'));
			$this->adminHtml('Event Text','editeventtext',$data);
		}else{
			
			$result = $this->common->updateData('page',array('page_desc'=>$_POST['page_desc']),array('page_id'=>'5'));
			
			if($result){
				$a = $this->flashMsg('success','Data Update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/editeventtext'),'refresh');
		}
	}
	
	
		public function editvolunteer()
	
	  {
	      
		$this->form_validation->set_rules('page_desc','page desc','required');
		if($this->form_validation->run() == false){		
		     
		     $data['page'] = $this->common->getData('page',array('page_id'=>'6'),array('single'));
			$this->adminHtml('Volunteer Text','add-volunter',$data);
		}else
		{
		    $result = $this->common->updateData('page',array('page_desc'=>$_POST['page_desc']),array('page_id'=>'6'));
			
			if($result){
				$a = $this->flashMsg('success','Data Update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/editvolunteer'),'refresh');
		}
	}
	
		public function editurl()
	
	  {
	      
		$this->form_validation->set_rules('tv1','Tv url','required');
		$this->form_validation->set_rules('tv2','Tv url','required');
		$this->form_validation->set_rules('tv3','Tv url','required');
		$this->form_validation->set_rules('tv4','Tv url','required');
		$this->form_validation->set_rules('tv5','Tv url','required');
		$this->form_validation->set_rules('radio1','radio1 url','required');
		$this->form_validation->set_rules('radio2','radio2 url','required');
		$this->form_validation->set_rules('radio3','radio3 url','required');
		$this->form_validation->set_rules('radio4','radio4 url','required');
		$this->form_validation->set_rules('radio5','radio5 url','required');
		if($this->form_validation->run() == false){		
		     
		     $data['page'] = $this->common->getData('news',array('id'=>'1'),array('single'));
			$this->adminHtml('Change url','add-url',$data);
		}else
		{
		    $result = $this->common->updateData('news',$_POST,array('id'=>'1'));
			
			if($result){
				$a = $this->flashMsg('success','Data Update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/editurl'),'refresh');
		}
	}


	public function aboutdownload()
	{
		$this->form_validation->set_rules('page_desc','page desc','required');
		if($this->form_validation->run() == false){		
		     
		     $data['page'] = $this->common->getData('page',array('page_id'=>'2'),array('single'));
			$this->adminHtml(' Our Constitution ','add-aboutdownload',$data);
		}else{
			
			
			$result = $this->common->updateData('page',array('page_desc'=>$_POST['page_desc']),array('page_id'=>'2'));
			
			if($result){
				$a = $this->flashMsg('success','Data Update successfully');
			}else{
				$this->flashMsg('danger','Some Error occured.');
			} 			
			redirect(base_url('admin/aboutdownload'),'refresh');
		}
	}

}

