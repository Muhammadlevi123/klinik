<?php

class kunjungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kunjungan_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar kunjungan';
        $data['kunjungan'] = $this->Kunjungan_model->get_all_kunjungan();
        $this->load->view('templates/header', $data);
        $this->load->view('kunjungan/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id)
    {
        $data['kunjungan'] = $this->Kunjungan_model->get_kunjungan_by_id($id);
        $this->load->view('kunjungan/view', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a new product';

        $this->form_validation->set_rules('tanggal_kunjungan', 'Tanggal Kunjungan', 'required');
        $this->form_validation->set_rules('nomor_rm_pasien', 'Nomor Rekam Medis', 'required');
        $this->form_validation->set_rules('keluhan','Keluhan','required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kunjungan/create');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
                'nomor_rm_pasien' => $this->input->post('nomor_rm_pasien'),
                'keluhan' => $this->input->post('keluhan')
            ];

            $this->Kunjungan_model->create_kunjungan($data);
            redirect('kunjungan');
        }
    }

    public function update($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Update kunjungan';
        $data['kunjungan'] = $this->Kunjungan_model->get_kunjungan_by_id($id);

        $this->form_validation->set_rules('tanggal_kunjungan', 'Tanggal Kunjungan', 'required');
        $this->form_validation->set_rules('nomor_rm_pasien','Nomor Rekam Medis','required');
        $this->form_validation->set_rules('keluhan','Keluhan','required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kunjungan/update', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
                'nomor_rm_pasien' => $this->input->post('nomor_rm_pasien'),
                'keluhan' => $this->input->post('keluhan')
            );

            $this->Kunjungan_model->update_kunjungan($id, $data);
            redirect('kunjungan');
        }
    }

    public function delete($id)
    {
        $this->Kunjungan_model->delete_kunjungan($id);
        redirect('kunjungan');
    }
}
