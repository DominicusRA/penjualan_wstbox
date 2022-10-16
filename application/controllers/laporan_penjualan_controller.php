<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan_penjualan_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('laporan_penjualan_model', 'laporan_penjualan_m');
        $this->load->model('customer_model', 'customer_m');
        $this->load->model('barang_model', 'barang_m');
        $this->load->model('user_model', 'user_m');
    }
    public function index()
    {
        $data_filter = [];
        $data_date = [];
        $data = [];
        if ($this->input->post('id_barang') != null) {
            $data_filter += array('barang.id_barang' => $this->input->post('id_barang'));
        }
        if ($this->input->post('id_user') != null) {
            $data_filter += array('user.id_user' => $this->input->post('id_user'));
        }
        if ($this->input->post('id_customer') != null) {
            $data_filter += array('customer.id_customer' => $this->input->post('id_customer'));
        }
        // dipikirkan lagi
        if ($this->input->post('tanggal_awal') != null && $this->input->post('tanggal_akhir') != null) {
            $data_date += array('tanggal_awal' => $this->input->post('tanggal_awal'));
            $data_date += array('tanggal_akhir' => $this->input->post('tanggal_akhir'));
        }

        $data['barang'] = $this->barang_m->get();
        $data['user'] = $this->user_m->get();
        $data['customer'] = $this->customer_m->get();
        $data['penjualan'] = $this->laporan_penjualan_m->get($data_filter, $data_date);
        // echo (json_encode($data['penjualan']->result()));
        $this->load->view('laporan/penjualan_view', $data);
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
    public function get()
    {
    }
}
