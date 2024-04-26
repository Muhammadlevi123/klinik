<?php
class Poli_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_poli()
    {
        $query = $this->db->get('poli');
        return $query->result_array();
    }

    public function get_poli_by_id($id)
    {
        $query = $this->db->get_where('poli', array('id_poli' => $id));
        return $query->row_array();
    }

    public function create_poli($data)
    {
        $this->db->insert('poli', $data);
        return $this->db->insert_id();
    }

    public function update_poli($id, $data)
    {
        $this->db->where('id_poli', $id);
        $this->db->update('poli', $data);
        return $this->db->affected_rows();
    }

    public function delete_poli($id)
    {
        $this->db->where('id_poli', $id);
        $this->db->delete('poli');
        return $this->db->affected_rows();
    }
}
