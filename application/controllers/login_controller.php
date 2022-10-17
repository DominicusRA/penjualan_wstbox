<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index()
    {
        if ($this->session->userdata('nama') != null) {
            redirect('user_controller');
        } else {
            $this->load->view('login_view');
        };
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
                    'nama' => $apps->nama
                );
                $this->session->set_userdata($session_data);
            }
            redirect('user_controller');
        } else {
            // echo "tidak ada data";
            $this->index();
        }
    }
    public function log_out()
    {
        $this->session->sess_destroy();
        redirect("login_controller");
    }
}
