<?php
class Dokter_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_dokter()
    {
        $query = $this->db->get('dokter');
        return $query->result_array();
    }

    public function get_dokter_by_id($id)
    {
        $query = $this->db->get_where('dokter', array('id_dokter' => $id));
        return $query->row_array();
    }

    public function create_dokter($data)
    {
        $this->db->insert('dokter', $data);
        return $this->db->insert_id();
    }

    public function update_dokter($id, $data)
    {
        $this->db->where('id_dokter', $id);
        $this->db->update('dokter', $data);
        return $this->db->affected_rows();
    }

    public function delete_dokter($id)
    {
        $this->db->where('id_dokter', $id);
        $this->db->delete('dokter');
        return $this->db->affected_rows();
    }
}
