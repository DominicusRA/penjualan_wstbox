<?php
class Login_model extends CI_MODEL
{
    function cek_login($username, $password)
    {

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($username);
        $this->db->where($password);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}
