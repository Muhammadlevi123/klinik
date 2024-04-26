<?php
class Users_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_users()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function get_users_by_id($id)
    {
        $query = $this->db->get_where('users', array('id_users' => $id));
        return $query->row_array();
    }

    public function create_users($data)
    {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function update_users($id, $data)
    {
        $this->db->where('id_users', $id);
        $this->db->update('users', $data);
        return $this->db->affected_rows();
    }

    public function delete_users($id)
    {
        $this->db->where('id_users', $id);
        $this->db->delete('users');
        return $this->db->affected_rows();
    }
}
