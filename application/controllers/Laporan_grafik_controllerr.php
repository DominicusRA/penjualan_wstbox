<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_grafik_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('laporan_penjualan_model', 'laporan_penjualan_m');
        $this->load->model('laporan_grafik_model', 'laporan_grafik_m');
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
        $data['penjualan'] = $this->laporan_grafik_m->get($data_filter, $data_date);
        $this->load->view('laporan/grafik_penjualan_view', $data);
        // $this->load->view('laporan/chart_view'); ///ini untuk test
        // echo (json_encode($sdata['penjualan']->result()));
        // echo "haloo";
    }
}
