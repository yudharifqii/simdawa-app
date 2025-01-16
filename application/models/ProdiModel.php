<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProdiModel extends CI_Model
{
    private $tabel = "prodi"; // Nama tabel di database

    // Mengambil semua data prodi
    public function get_prodi()
    {
        return $this->db->get($this->tabel)->result(); // Mengambil semua data dari tabel prodi
    }

    // Menambahkan data prodi baru
    public function insert_prodi()
    {
        $data = [
            'nama_prodi' => $this->input->post('nama_prodi') // Menyimpan data nama_prodi
        ];
        $this->db->insert($this->tabel, $data); // Menyimpan data ke dalam tabel prodi
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data prodi berhasil ditambahkan!');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Data prodi gagal ditambahkan!');
            $this->session->set_flashdata('status', true);
        }
    }

    // Mengambil data prodi berdasarkan ID
    public function get_prodi_byid($id)
    {
        return $this->db->get_where($this->tabel, ['id' => $id])->row(); // Mengambil data berdasarkan id
    }

    // Memperbaharui data prodi
    public function update_prodi()
    {
        $data = [
            'nama_prodi' => $this->input->post('nama_prodi') // Memperbaharui nama prodi
        ];
        $this->db->where('id', $this->input->post('id')); // Menentukan ID yang akan diubah
        $this->db->update($this->tabel, $data); // Melakukan update data
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data prodi berhasil diubah!');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Data prodi gagal diubah!');
            $this->session->set_flashdata('status', true);
        }
    }

    // Menghapus data prodi
    public function delete_prodi($id)
    {
        $this->db->where('id', $id); // Menentukan ID yang akan dihapus
        $this->db->delete($this->tabel); // Menghapus data dari tabel prodi
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data prodi berhasil dihapus!');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Data prodi gagal dihapus!');
            $this->session->set_flashdata('status', true);
        }
    }
}
