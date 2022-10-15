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
}
