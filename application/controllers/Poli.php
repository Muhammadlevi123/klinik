<?php

class Poli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Poli_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Poli';
        $data['poli'] = $this->Poli_model->get_all_poli();
        $this->load->view('templates/header', $data);
        $this->load->view('poli/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id)
    {
        $data['poli'] = $this->Poli_model->get_poli_by_id($id);
        $this->load->view('poli/view', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a new Poli';

        $this->form_validation->set_rules('nama_poli', 'Nama', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('poli/create');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_pasien' => $this->input->post('nama_poli')
            ];

            $this->Poli_model->create_poli($data);
            redirect('poli');
        }
    }

    public function update($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Update Poli';
        $data['pasien'] = $this->Poli_model->get_poli_by_id($id);

        $this->form_validation->set_rules('nama_poli', 'Nama', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('poli/update', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'nama_poli' => $this->input->post('nama_poli')
            );

            $this->Poli_model->update_poli($id, $data);
            redirect('poli');
        }
    }

    public function delete($id)
    {
        $this->Poli_model->delete_poli($id);
        redirect('Poli');
    }
}


