<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penjualan_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('customer_model', 'customer_m');
        $this->load->model('barang_model', 'barang_m');
        $this->load->model('penjualan_model', 'penjualan_m');
    }
    public function index()
    {

        if ($this->session->userdata('nama') != null) {
            $data['barang'] = $this->barang_m->get();
            $data['penjualan'] = $this->penjualan_m->get();
            $data['customer'] = $this->customer_m->get();
            $this->load->view('transaksi/penjualan_view', $data);
        } else {
            redirect('login_controller');
        };
    }
    public function add()
    {
        $data = [];

        $data = array(
            'no_transaksi' => $this->input->post('no_transaksi'),
            'id_customer' => $this->input->post('id_customer'),
            'id_barang' => $this->input->post('id_barang'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah'),
            'tanggal' => date('Y/m/d')
        );

        $status = $this->penjualan_m->post($data);

        if ($status) {
            redirect('penjualan_controller');
        } else {
            echo '<script>alert("Penambahan Bahan Gagal !!!")</script>';
            redirect('penjualan_controller');
        }
    }
}
