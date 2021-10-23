<?php
    class Home extends Controller
    {
          
        public function index()
        {
            $data['title']='Medantainment';
            $data['active']="class=('active')";
            // $data['active']= $this->model('User_model')->getUser();
            $data['link']=$this->model('Home_model')->getAllHome();



            $this->view('template/header', $data);
            $this->view('home/index', $data);
            $this->view('template/footer');
        }
    }
