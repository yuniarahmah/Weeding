<?php

class M_model extends CI_Model
{
    function get_data($table)
    {
        return $this->db->get($table);
    }
    //untuk menghubungkan data ke sql
    function getwhere($table, $data)
    {
        return $this->db->get_where($table, $data);
    }
    //untuk menghubungkan register ke sql
    function register($data)
    {
        return $this->db->insert("user", $data);
    }
    //untuk menghapus data di dalam from juga sql
    public function delete($table, $field, $id)
    {
        $data = $this->db->delete($table, array($field => $id));
        return $data;
    }
    //untuk menambahkan data di dalam from dan sql
    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id($table);
    }

    public function ubah_data($tabel, $data, $where)
    {
        $data = $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }

    public function get_by_id($tabel, $id_column, $id)
    {
        $data = $this->db->where($id_column, $id)->get($tabel);
        return $data;
    }

    public function get_foto_by_id($id)
    {
        $this->db->select('image');
        $this->db->from('admin');
        $this->db->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->image;
        } else {
            return false;
        }
    }

    public function getSiswaById($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa); // Gantilah 'id_siswa' sesuai dengan nama kolom ID yang digunakan
        $query = $this->db->get('user'); // Gantilah 'user' sesuai dengan nama tabel yang digunakan
        return $query->row_array();
    }


    public function checkEmailExists($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('admin'); // Gantilah 'nama_tabel' dengan nama tabel yang sesuai

        return $query->row_array();
    }

    public function getNamaPelanggan() {
        // Your logic to retrieve nama_pelanggan goes here
        // For example:
        $query = $this->db->get('data_pelanggan');
        return $query->row()->nama_pelanggan;
    }

    public function getTanggalData() {
        // Your logic to retrieve tanggal data goes here
        // For example:
        $this->db->select('tanggal_p'); // Replace with your actual column name
        $query = $this->db->get('data_pelanggan');

        if ($query->num_rows() > 0) {
            return $query->result(); // Assuming multiple rows are returned
        } else {
            return false;
        }
    }
}
