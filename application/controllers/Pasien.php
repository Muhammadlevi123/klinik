<?php

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pasien';
        $data['pasien'] = $this->Pasien_model->get_all_pasien();
        $this->load->view('templates/header', $data);
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id)
    {
        $data['pasien'] = $this->Pasien_model->get_pasien_by_id($id);
        $this->load->view('pasien/view', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a new product';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required'
        );
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required'
        );

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pasien/create');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir')
            ];

            $this->Pasien_model->create_pasien($data);
            redirect('pasien');
        }
    }

    public function update($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Update pasien';
        $data['pasien'] = $this->Pasien_model->get_pasien_by_id($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required'
        );
        $this->form_validation->set_rules(
            'tanggal_lahir',
            'Tanggal Lahir',
            'required'
        );

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pasien/update', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir')
            );

            $this->Pasien_model->update_pasien($id, $data);
            redirect('pasien');
        }
    }

    public function delete($id)
    {
        $this->Pasien_model->delete_pasien($id);
        redirect('pasien');
    }
}
