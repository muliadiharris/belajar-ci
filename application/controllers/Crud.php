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
        $this->load->model('Crud_m');
        // print_r($this->input->post());
        $data = [
            'email' => $this->input->post('email'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tanggal_lahir' => $this->input->post('tgl_lahir'),
            'no_telepon' => $this->input->post('no_tlp'),
            'password' => $this->input->post('password')
        ];
        $this->Crud_m->insert_data($data);
        // $this->db->insert('siswa', $data);
        $model_crud = $this->Crud_m;
        if ($model_crud > 0) {
            echo "Data Berhasil Di Simpan";
        } else {
            echo "Data Gagal Di Simpan";
        }
    }
    public function ambil_data()
    {
        $this->load->model('Crud_m');
        $data = [
            'data' => $this->Crud_m->ambil_data()
        ];
        // print_r($data);
        // die;
        $this->load->view('home', $data);
    }
    public function api()
    {
        $this->load->view('v_api');
    }
}
