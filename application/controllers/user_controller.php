<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user_m');
    }
    public function index()
    {

        if ($this->session->userdata('nama') != null) {
            $data['user'] = $this->user_m->get();
            $this->load->view('master/user_view', $data);
        } else {
            redirect('login_controller');
        };
    }
    public function add()
    {
        // echo date('Y/m/d');
        $data = [];

        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'tanggal' => date('Y/m/d')
        );

        $status = $this->user_m->post($data);

        if ($status) {
            redirect('user_controller');
        } else {
            echo '<script>alert("Penambahan Bahan Gagal !!!")</script>';
            redirect('user_controller');
        }
    }
}
