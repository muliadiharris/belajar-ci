<<?php

    class crud_m extends CI_Model
    {

        public $title;
        public $content;
        public $date;


        public function insert_data($data)
        {

            $this->db->insert('siswa', $data);
            return $this->db->affected_rows();
        }
        public function ambil_data()
        {
            $this->db->select('*');
            $this->db->from('siswa');
            return $this->db->get()->result_array();
        }
    }
    ?>