<?php
class Kunjungan_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_kunjungan()
    {
        $query = $this->db->get('kunjungan');
        return $query->result_array();
    }

    public function get_kunjungan_by_id($id)
    {
        $query = $this->db->get_where('kunjungan', array('id_kunjungan' => $id));
        return $query->row_array();
    }

    // Kunjungan_model.php
    // public function get_kunjungan_with_details($id)
    // {
    //     $this->db->select('kunjungan.*, pasien.nama as nama_pasien, dokter.nama as nama_dokter, poli.nama_poli');
    //     $this->db->from('kunjungan');
    //     $this->db->join('pasien', 'kunjungan.id_pasien = pasien.id_pasien');
    //     $this->db->join('dokter', 'kunjungan.id_dokter = dokter.id_dokter');
    //     $this->db->join('poli', 'kunjungan.id_poli = poli.id_poli');
    //     $this->db->where('kunjungan.id_kunjungan', $id);
    //     $query = $this->db->get();

    //     return $query->row_array();
    // }

    public function create_kunjungan($data)
    {
        $this->db->insert('kunjungan', $data);
        return $this->db->insert_id();
    }

    public function update_kunjungan($id, $data)
    {
        $this->db->where('id_kunjungan', $id);
        $this->db->update('kunjungan', $data);
        return $this->db->affected_rows();
    }

    public function delete_kunjungan($id)
    {
        $this->db->where('id_kunjungan', $id);
        $this->db->delete('kunjungan');
        return $this->db->affected_rows();
    }
}
