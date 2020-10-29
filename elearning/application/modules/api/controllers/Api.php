<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends Base_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('common');
	}

  public function index()

  {

    echo "text";
  }


   public function triending()
   {

   		 $data = $this->common->getdata('');

   }

    
}