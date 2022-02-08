<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{

    public function tambah_data()
    {
        $this->load->view('tambah_data');
    }
    public function insert_data()
    {
        // print_r($this->input->post());
        $data = [
            'email' => $this->input->post('email'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tanggal_lahir' => $this->input->post('tgl_lahir'),
            'no_telepon' => $this->input->post('no_tlp'),
            'password' => $this->input->post('password')
        ];
        $this->db->insert('siswa', $data);
    }
}
