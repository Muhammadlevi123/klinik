<?php

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Users';
        $data['users'] = $this->Users_model->get_all_users();
        $this->load->view('templates/header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id)
    {
        $data['users'] = $this->Users_model->get_users_by_id($id);
        $this->load->view('users/view', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a new product';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('users/create');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            ];

            $this->Users_model->create_users($data);
            redirect('users');
        }
    }

    public function update($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Update users';
        $data['users'] = $this->Users_model->get_users_by_id($id);

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('users/update', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );

            $this->Users_model->update_users($id, $data);
            redirect('users');
        }
    }

    public function delete($id)
    {
        $this->Users_model->delete_users($id);
        redirect('users');
    }
}
