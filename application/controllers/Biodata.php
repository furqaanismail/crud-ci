<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Biodata_model');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data['judul'] = 'Data Anggota';
        $data['biodata'] = $this->Biodata_model->getData();
        if($this->input->post('keyword')){
            $data['biodata'] = $this->Biodata_model->cariData();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('biodata/index', $data);
        $this->load->view('templates/footer');
        
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah data';
        $this->form_validation->set_rules('stb','Stambuk', 'required|numeric');
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('alamat','Alamat', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('biodata/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Biodata_model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('biodata');
        }
    }

    public function hapus($id)
    {
        $this->Biodata_model->hapusData($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('biodata');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Anggota';
        $data['biodata'] = $this->Biodata_model->getDataById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('biodata/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah data';
        $data['biodata'] = $this->Biodata_model->getDataById($id);
        $this->form_validation->set_rules('stb','Stambuk', 'required|numeric');
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('alamat','Alamat', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('biodata/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Biodata_model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('biodata');
        }
    }


}

/* End of file Biodata.php */
