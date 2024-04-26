<?php
class Pasien_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_pasien()
    {
        $query = $this->db->get('pasien');
        return $query->result_array();
    }

    public function get_pasien_by_id($id)
    {
        $query = $this->db->get_where('pasien', array('id_pasien' => $id));
        return $query->row_array();
    }

    public function create_pasien($data)
    {
        $this->db->insert('pasien', $data);
        return $this->db->insert_id();
    }

    public function update_pasien($id, $data)
    {
        $this->db->where('id_pasien', $id);
        $this->db->update('pasien', $data);
        return $this->db->affected_rows();
    }

    public function delete_pasien($id)
    {
        $this->db->where('id_pasien', $id);
        $this->db->delete('pasien');
        return $this->db->affected_rows();
    }
}
