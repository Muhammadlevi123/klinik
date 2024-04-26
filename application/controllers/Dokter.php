<?php

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Dokter';
        $data['dokter'] = $this->Dokter_model->get_all_dokter();
        $this->load->view('templates/header', $data);
        $this->load->view('dokter/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id)
    {
        $data['dokter'] = $this->Dokter_model->get_dokter_by_id($id);
        $this->load->view('dokter/view', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a new product';

        $this->form_validation->set_rules('id_dokter', 'id_dokter', 'required|numeric');
        $this->form_validation->set_rules('nama', 'nama', 'required'
        );
        $this->form_validation->set_rules('spesialisasi','Spesialisasi','required'
        );

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('dokter/create');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_dokter' => $this->input->post('id_dokter'),
                'nama' => $this->input->post('nama'),
                'spesialisasi' => $this->input->post('spesialisasi')
            ];

            $this->Dokter_model->create_dokter($data);
            redirect('dokter');
        }
    }

    public function update($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Update Dokter';
        $data['dokter'] = $this->Dokter_model->get_dokter_by_id($id);

        $this->form_validation->set_rules('id_dokter', 'id_dokter', 'required|numeric');
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required'
        );
        $this->form_validation->set_rules(
            'spesialisasi',
            'Spesialisasi',
            'required'
        );

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('dokter/update', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'id_dokter' => $this->input->post('id_dokter'),
                'nama' => $this->input->post('nama'),
                'spesialisasi' => $this->input->post('spesialisasi')
            );

            $this->Dokter_model->update_dokter($id, $data);
            redirect('dokter');
        }
    }

    public function delete($id)
    {
        $this->Dokter_model->delete_dokter($id);
        redirect('dokter');
    }
}
