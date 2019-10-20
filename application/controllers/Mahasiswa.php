<?php

class Mahasiswa extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->model('Mahasiswa_model');
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data["judul"] = 'Mahasiswa';
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $this->load->model('Mahasiswa_model');
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');

        if($this->form_validation->run() === false){
            $this->load->view('mahasiswa/tambah');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa/index');
        }
    }

    public function hapus($id){
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }

    public function detail(){
        $data['judul'] = 'Detail Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail');
        $this->load->view('templates/footer');
    }
}

?>