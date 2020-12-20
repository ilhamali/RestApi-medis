<?php

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Dokter';
        $data['dokter'] = $this->Dokter_model->getAllDokter();
        $this->load->view('templates/header', $data);
        $this->load->view('dokter/dokter', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Dokter';

        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('nama', 'NAMA', 'required');
        $this->form_validation->set_rules('spesialis', 'SPESIALIS', 'required');
        $this->form_validation->set_rules('umur', 'UMUR', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('dokter/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Dokter_model->tambahDataDokter();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('dokter');
        }
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Edit Data Dokter';
        $data['dokter'] = $this->Dokter_model->getDokterById($id);
        
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('nama', 'NAMA', 'required');
        $this->form_validation->set_rules('spesialis', 'SPESIALIS', 'required');
        $this->form_validation->set_rules('umur', 'UMUR', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('dokter/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dokter_model->ubahDataDokter();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('dokter');
        }
    }

    public function hapus($id)
    {
        $this->Dokter_model->hapusDataDokter($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('dokter');
    }


}
