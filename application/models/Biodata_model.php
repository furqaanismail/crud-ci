<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata_model extends CI_Model {

    public function getData(){
        return $this->db->get('biodata')->result_array();
    }

    public function tambahData()
    {
        $data = [
            "stb" => $this->input->post('stb', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true)
        ];
        $this->db->insert('biodata',$data);
    }

    public function hapusData($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('biodata');
    }

    public function getDataById($id)
    {
        return $this->db->get_where('biodata', ['id' => $id]) -> row_array();
    }

    public function ubahData()
    {
        $data = [
            "stb" => $this->input->post('stb', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('biodata',$data);
    }

    public function cariData()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('stb',$keyword);
        return $this->db->get('biodata')->result_array();
    }


}

