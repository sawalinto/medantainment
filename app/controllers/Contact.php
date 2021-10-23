<?php

class Contact extends Controller
{
    public function index($nama = 'Sawal', $pekerjaan = 'desainer', $umur = 23,)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['title']= 'Contact';
        // $data['umur'] =$umur;
        // $data['judul']='Contact';
        // $data['active']=$this->model('User_model')->getUser();

        $this->view('template/header', $data);
        $this->view('contact/index', $data);
        $this->view('template/footer');
    }


    // public function page()
    // {
    //     $data['judul']='page';
    //     $this->view('template/header', $data);
    //     $this->view('about/page', $data);
    //     $this->view('tempalte/footer');
    // }
    public function tambahPesan()
    {
        // var_dump($_POST);
        if ($this->model('Contact_model')->tambahDataPesan($_POST)>0)
        {
            header ('Location: ' .  BASEURL . '/contact');
            exit;
        }
    }

   
    

    
}
