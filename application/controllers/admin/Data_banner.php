<?php 

    class Data_banner extends CI_Controller{
        public function index()
        {
            $data['banner'] = $this->Model_banner->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_banner',$data);
        $this->load->view('templates_admin/footer');
        }
        public function edit($id){
            $where = array('id_banner'=>$id);
            $data['banner']= $this ->Model_banner->Edit_data($where,'tb_banner')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_banner',$data);
            $this->load->view('templates_admin/footer');
        }
    }

?>