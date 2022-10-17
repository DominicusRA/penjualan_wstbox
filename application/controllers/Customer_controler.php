<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('customer_model', 'customer_m');
    }
    public function index()
    {
        if ($this->session->userdata('nama') != null) {
            $data['customer'] = $this->customer_m->get();
            $this->load->view('master/customer_view', $data);
        } else {
            redirect('login_controller');
        };
    }
    public function add()
    {
        // echo date('Y/m/d');
        $data = [];

        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tanggal' => date('Y/m/d')
        );

        $status = $this->customer_m->post($data);

        if ($status) {
            redirect('customer_controller');
        } else {
            echo '<script>alert("Penambahan Bahan Gagal !!!")</script>';
            redirect('customer_controller');
        }
    }
}
