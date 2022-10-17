<?php
class Customer_model extends CI_MODEL
{
    function get()
    {
        $this->db->select('*');
        $this->db->from('customer');
        $data = $this->db->get();
        return $data;
    }
    function post($data)
    {
        // echo "masuk model";
        if ($this->db->insert('customer', $data)) {
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
        $this->db->from('customer');
        $this->db->order_by('id_customer', 'DESC');
        $this->db->limit(1);
        $data = $this->db->get();
        return $data;
    }
}
