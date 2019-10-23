<?php

class Peoples extends CI_Controller {

    public function index(){
        $this->load->model('Mahasiswa_model');
        $data["judul"] = 'List Of Peoples';
        
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }


}

?>