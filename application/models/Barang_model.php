<?php
class Barang_model extends CI_MODEL
{
    function get()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $data = $this->db->get();
        return $data;
    }
    function post($data)
    {
        // echo "masuk model";
        if ($this->db->insert('barang', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function put()
    {
        echo "function put";
    }
    function get_code()
    {
        // return $this->db->query("SELECT kode_bahan FROM bahan ORDER BY kode_bahan DESC LIMIT 1");

        $this->db->select('kode');
        $this->db->from('barang');
        $this->db->order_by('id_barang', 'DESC');
        $this->db->limit(1);
        $data = $this->db->get();
        return $data;
    }
}
