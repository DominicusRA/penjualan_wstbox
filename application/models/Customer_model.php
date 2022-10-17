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
}
