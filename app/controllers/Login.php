<?php
class Login extends Controller
{
    public function index()
    {
        $data['title'] = 'Login Admin';
        // $data['wedding']=$this->model('Admin_model')->getAllWedding();

        $this->view('login/index', $data);
    }


    // public function proses()
    // {
    //     $reslt = $this->model('check_login')->getAllLogin();
    //     if($reslt == 'login')
    //     {
    //         include 'view/Admin';
    //     }
    //     else
    //     {
    //         include 'view/Login';
    //     }
    // }
}
