<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index()
    {
        $this->load->view('login_view');
    }
    public function cek_login()
    {
        // $password = md5($this->input->post("password", TRUE));
        // $username = md5($this->input->post("username", TRUE));
        $password = $this->input->post("password", TRUE);
        $username = $this->input->post("username", TRUE);
        $status = $this->login_model->cek_login(array('username' => $username), array('password' => $password));

        if ($status) {
            // echo "ada ada";
            foreach ($status as $apps) {
                $session_data = array(
                    'id_user' => $apps->nama,
                    'nama' => $apps->akses
                );
                $this->session->set_userdata($session_data);
            }
            redirect('dashboard_controller');
        } else {
            // echo "tidak ada data";
            $this->index();
        }
    }
}
