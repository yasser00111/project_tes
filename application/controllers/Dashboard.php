<?php 
class Dashboard extends CI_Controller{
    public function index()
    {
        $data['banner'] = $this->Model_banner->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('templates',$data);
        $this->load->view('template/footer');
    }
}