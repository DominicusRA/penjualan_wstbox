<?php
class Laporan_grafik_model extends CI_MODEL
{
    function get($data_filter = null, $data_date = null)
    {
        // print_r($data_filter);
        // print_r($data_date);
        if ($data_filter == null && $data_date == null) {
            $this->db->select('barang.id_barang, user.id_user,user.nama,barang.nama as barang,EXTRACT(MONTH FROM penjualan.tanggal) AS bulan, penjualan.tanggal');
            $this->db->select_sum('penjualan.jumlah');
            $this->db->from('penjualan');
            $this->db->join('barang', 'barang.id_barang=penjualan.id_barang');
            $this->db->join('customer', 'customer.id_customer=penjualan.id_customer');
            $this->db->join('user', 'user.id_user=penjualan.id_user');
            $this->db->group_by('user.id_user,barang.id_barang');
            $this->db->order_by('customer.id_customer', 'DESC');
        } else {
            $this->db->select('barang.id_barang, user.id_user,user.nama,barang.nama as barang,EXTRACT(MONTH FROM penjualan.tanggal) AS bulan, penjualan.tanggal');
            $this->db->from('penjualan');
            $this->db->join('barang', 'barang.id_barang=penjualan.id_barang');
            $this->db->join('customer', 'customer.id_customer=penjualan.id_customer');
            $this->db->join('user', 'user.id_user=penjualan.id_user');
            $this->db->where($data_filter);
            if ($data_date != null) {
                // $this->db->where($data_filter);
                $this->db->where('penjualan.tanggal >=', $data_date['tanggal_awal']);
                $this->db->where('penjualan.tanggal <=', $data_date['tanggal_akhir']);
            }
        }
        $data = $this->db->get();
        return $data;
    }
    function post($data)
    {
        // echo "masuk model";
        if ($this->db->insert('penjualan', $data)) {
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
