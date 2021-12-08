<?php 

    class Data_perkenalan extends CI_Controller
    {
        public function index()
        {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/perkenalan',$data);
        $this->load->view('templates_admin/footer');
        }

    }

?>