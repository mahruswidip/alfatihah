<?php

class Pesanan_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * Get pesanan by id_pesanan
     */
    public function get_pesanan($id_pesanan)
    {
        return $this->db->get_where('pesanan', array('id_pesanan' => $id_pesanan))->row_array();
    }


    /*
     * Get all pesanan count
     */
    public function get_all_pesanan_count()
    {
        $this->db->from('pesanan');
        return $this->db->count_all_results();
    }
    /*
     * Get all pesanan
     */
    public function get_all_pesanan($params = array())
    {
        $this->db->order_by('pesanan.id_pesanan', 'desc');
        // $this->db->join('tbl_users', 'tbl_users.id_pesanan=pesanan.id_pesanan', 'left');
        if (isset($params) && !empty($params)) {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('pesanan')->result_array();
    }

    public function get_users_by_created_by($user_id)
    {
        $this->db->join('pesanan', 'pesanan.id_pesanan=tbl_users.id_pesanan', 'left');
        return $this->db->get_where('tbl_users', array('created_by' => $user_id))->result_array();
    }

    /*
     * function to add new pesanan
     */
    public function add_pesanan($params)
    {
        $this->db->insert('pesanan', $params);
        return $this->db->insert_id();
    }

    public function add_barang_di_pesanan($params)
    {
        $this->db->insert('barang_pesanan', $params);
        return $this->db->insert_id();
    }

    public function add_pengiriman($params)
    {
        $this->db->trans_start();

        // Insert pengiriman record
        $this->db->insert('pengiriman', $params);

        // Update jumlah_pesanan on barang_pesanan table
        $id_pesanan = $params['fk_id_pesanan'];
        $id_barang = $params['fk_id_barang'];
        $jumlah = $params['jumlah_kirim'];
        $this->db->set('jumlah_pesanan', 'GREATEST(jumlah_pesanan - ' . $jumlah . ', 0)', FALSE);
        $this->db->where('fk_id_pesanan', $id_pesanan);
        $this->db->where('fk_id_barang', $id_barang);
        $this->db->update('barang_pesanan');

        // Update jumlah on barang table
        $barang = $this->db->get_where('barang', array('id_barang' => $id_barang))->row();
        $this->db->set('jumlah', $barang->jumlah - $jumlah);
        $this->db->where('id_barang', $id_barang);
        $this->db->update('barang');

        $this->db->trans_complete();

        return $this->db->trans_status() !== FALSE;
    }


    /*
     * function get data barang yang dipesan di pesanan
     */

    public function get_barang_pesanan($id_pesanan)
    {
        $this->db->join('barang', 'barang_pesanan.fk_id_barang = barang.id_barang', 'left');
        return $this->db->get_where('barang_pesanan', array('fk_id_pesanan' => $id_pesanan))->result_array();
    }

    /*
     * function get data barang yang akan dikirim (pengiriman) 
     */

    public function get_barang_pengiriman($id_pesanan)
    {
        $this->db->join('barang', 'barang.id_barang = pengiriman.fk_id_barang', 'left');
        $this->db->join('barang_pesanan', 'barang_pesanan.fk_id_barang = pengiriman.fk_id_barang AND barang_pesanan.fk_id_pesanan = pengiriman.fk_id_pesanan', 'left');
        return $this->db->get_where('pengiriman', array('pengiriman.fk_id_pesanan' => $id_pesanan))->result_array();
    }

    /*
     * function get data buat di halaman detail pengiriman buat cetak
     */

    public function get_barang_pengiriman_grouped($id_pesanan)
{
    $this->db->select('pengiriman.fk_id_barang, pengiriman.tanggal_kirim, barang.nama_barang, SUM(pengiriman.jumlah_kirim) as jumlah_kirim');
    $this->db->from('pengiriman');
    $this->db->join('barang', 'barang.id_barang = pengiriman.fk_id_barang', 'left');
    $this->db->where('pengiriman.fk_id_pesanan', $id_pesanan);
    $this->db->group_by('pengiriman.fk_id_barang, pengiriman.tanggal_kirim');

    return $this->db->get()->result_array();
}


    /*
     * function get data barang pesanan
     */
    public function get_barang_pesanan_only($id_barang_pesanan)
    {
        return $this->db->get_where('barang_pesanan', array('id_barang_pesanan' => $id_barang_pesanan))->row_array();
    }

    public function get_or_add_pesanan($nama_pesanan)
    {
        $pesanan = $this->db->get_where('pesanan', array('id_pesanan' => $nama_pesanan))->row_array();

        if (!$pesanan) {
            // var_dump('Model When NOOTT Exist');
            // print_r($pesanan);
            // exit();
            // pesanan doesn't exist, so insert it into the database
            $this->db->insert('pesanan', array('nama_pesanan' => $nama_pesanan));
            $pesanan_id = $this->db->insert_id();
        } else {
            // pesanan already exists, so use its ID
            $pesanan_id = $pesanan['id_pesanan'];
            // var_dump('Model When EXISTT');
            // print_r($pesanan);
            // exit();
        }

        return $pesanan_id;
    }

    /*
     * function to update pesanan
     */
    public function update_pesanan($id_pesanan, $params)
    {
        $this->db->where('id_pesanan', $id_pesanan);
        return $this->db->update('pesanan', $params);
    }

    /*
     * function to delete pesanan
     */
    public function delete_pesanan($id_pesanan)
    {
        return $this->db->delete('pesanan', array('id_pesanan' => $id_pesanan));
    }

    /*
     * function to delete barang di pesanan
     */
    public function delete_barang_pesanan($id_barang_pesanan)
    {
        return $this->db->delete('barang_pesanan', array('id_barang_pesanan' => $id_barang_pesanan));
    }
}