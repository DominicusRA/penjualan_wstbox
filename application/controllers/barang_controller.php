<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barang_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model', 'barang_m');
    }
    public function index()
    {
        $data['barang'] = $this->barang_m->get();
        $this->load->view('master/barang_view', $data);
    }
    public function add()
    {
        $data = [];

        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'ukuran' => $this->input->post('ukuran'),
            'keterangan' => $this->input->post('keterangan'),
            'tanggal' => date('Y/m/d')
        );

        $status = $this->barang_m->post($data);

        if ($status) {
            redirect('barang_controller');
        } else {
            echo '<script>alert("Penambahan Bahan Gagal !!!")</script>';
            redirect('barang_controller');
        }
    }
}
