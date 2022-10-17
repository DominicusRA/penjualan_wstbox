<?php
class Penjualan_model extends CI_MODEL
{
    function get()
    {
        $this->db->select('penjualan.no_transaksi,penjualan.tanggal,customer.nama,barang.kode,barang.nama as nama_barang,penjualan.jumlah,penjualan.harga');
        $this->db->from('penjualan');
        $this->db->join('barang', 'barang.id_barang=penjualan.id_barang');
        $this->db->join('customer', 'customer.id_customer=penjualan.id_customer');
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
    function get_code()
    {
        // return $this->db->query("SELECT kode_bahan FROM bahan ORDER BY kode_bahan DESC LIMIT 1");

        $this->db->select('no_transaksi');
        $this->db->from('penjualan');
        $this->db->order_by('id_penjualan', 'DESC');
        $this->db->limit(1);
        $data = $this->db->get();
        return $data;
    }
}
