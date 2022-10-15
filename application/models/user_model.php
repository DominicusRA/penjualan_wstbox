<?php
class User_model extends CI_MODEL
{
    function get()
    {
        $this->db->select('*');
        $this->db->from('user');
        $data = $this->db->get();
        return $data;
    }
    function post($data)
    {
        // echo "masuk model";
        if ($this->db->insert('user', $data)) {
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
