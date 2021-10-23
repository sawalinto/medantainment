<?php 

class Admin extends Controller
{
    
    public function index()
    {
        $data['title'] = 'Admin';
        $data['home']=$this->model('Admin_model')->getAllHome();

        $this->view('template/admin_header', $data);
        $this->view('admin/index', $data);
        $this->view('template/admin_footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Admin';
        $data['home']=$this->model('Admin_model')->getAllDetail($id);

        $this->view('template/admin_header', $data);
        $this->view('admin/detail', $data);
        $this->view('template/admin_footer');
    }
    


    public function slider()
    {
        $data['title'] = 'Slider';
        $data['slider']=$this->model('Admin_model')->getAllSlider();
        $this->view('template/admin_header', $data);
        $this->view('admin/slider', $data);
        $this->view('template/admin_footer');
    }
    public function iklan()
    {
        $data['video']=$this->model('Admin_model')->getAllIklan();
        $data['title'] = 'Iklan';
        $this->view('template/admin_header', $data);
        $this->view('admin/iklan', $data);
        $this->view('template/admin_footer');
    }
    public function klien()
    {
        $data['title'] = 'Photo';
        $this->view('template/admin_header', $data);
        $this->view('admin/klien');
        $this->view('template/admin_footer');
    }
    public function wedding()
    {
        $data['title'] = 'Wedding';
        $data['wedding']=$this->model('Admin_model')->getAllWedding();

        $this->view('template/admin_header', $data);
        $this->view('admin/wedding', $data);
        $this->view('template/admin_footer');
    }
    

    public function tambah()
    {
        // var_dump($_POST);
        if ($this->model('Admin_model')->tambahDataIklan($_POST)>0)
        {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header ('Location: ' .  BASEURL . '/admin/iklan');
            // header('Location: ' . BASEURL . '/iklan');
            exit;
        }
        else{
            Flasher::setFlash('berhasil', 'ditambahkan', 'danger');
            header ('Location: ' .  BASEURL . '/admin/iklan');
            // header('Location: ' . BASEURL . '/iklan');
            exit;
        }

        
    }

    
    public function tambahWedding()
    {
        if ($this->model('Admin_model')->tambahDataWedding($_POST)>0)
        {
            header ('Location: ' .  BASEURL . '/admin/wedding');
            exit;
        }
    }

    public function hapus($id)
    {
        // var_dump($_POST);
        if ($this->model('Admin_model')->hapusDataPesan($id)>0)
        {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header ('Location: ' .  BASEURL . '/admin');
            // header('Location: ' . BASEURL . '/iklan');
            exit;
        }
        else{
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header ('Location: ' .  BASEURL . '/admin');
            // header('Location: ' . BASEURL . '/iklan');
            exit;
        }

        
    }

    public function hapusIklan($id)
    {
        // var_dump($_POST);
        if ($this->model('Admin_model')->hapusDataIklan($id)>0)
        {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header ('Location: ' .  BASEURL . '/admin/iklan');
            // header('Location: ' . BASEURL . '/iklan');
            exit;
        }
        else{
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header ('Location: ' .  BASEURL . '/admin/iklan');
            // header('Location: ' . BASEURL . '/iklan');
            exit;
        }

        
    }

    public function hapusWedding($id)
    {
        // var_dump($_POST);
        if ($this->model('Admin_model')->hapusDataWedding($id)>0)
        {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header ('Location: ' .  BASEURL . '/admin/wedding');
            // header('Location: ' . BASEURL . '/wedding');
            exit;
        }
        else{
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header ('Location: ' .  BASEURL . '/admin/wedding');
            // header('Location: ' . BASEURL . '/iklan');
            exit;
        }

        
    }



    

    
}