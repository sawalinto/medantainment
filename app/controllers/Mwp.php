<?php 
	
 /**
  * 
  */
 class Mwp extends Controller
 {
 	
 	public function index()
 	{
		 $data['title']= 'Mwp';
 		$data['active']=$this->model('User_model')->getUser();
 		$this->view('template/header', $data);
 		$this->view('mwp/index');
 		$this->view('template/footer');
 	}
 }