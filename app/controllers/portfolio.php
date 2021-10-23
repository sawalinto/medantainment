<?php
    class Portfolio extends Controller{
        public function index()
        {
            $data['title'] = 'Portfolio';
            $data['active']=$this->model('User_model')->getUser();
            // $data['mhs'] = $this->model('Portfolio_model')->getAllMahasiswa();
            $data['link']=$this->model('Home_model')->getAllHome();

            $this->view('template/header', $data);
            $this->view('portfolio/index', $data);
            $this->view('template/footer');

        }
    }
?>