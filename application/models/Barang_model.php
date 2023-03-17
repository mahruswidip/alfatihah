<?php

class Barang_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * Get barang by id_barang
     */
    public function get_barang($id_barang)
    {
        return $this->db->get_where('barang', array('id_barang' => $id_barang))->row_array();
    }

    /*
     * Get all barang count
     */
    public function get_all_barang_count()
    {
        $this->db->from('barang');
        return $this->db->count_all_results();
    }

    /*
     * Get all barang
     */
    public function get_all_barang($params = array())
    {
        $this->db->order_by('barang.id_barang', 'desc');
        $this->db->select('barang.*, kategori.nama_kategori');
        $this->db->join('kategori', 'kategori.id_kategori = barang.fk_id_kategori', 'left');
        // $this->db->join('tbl_users', 'tbl_users.id_barang=barang.id_barang', 'left');
        if (isset($params) && !empty($params)) {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('barang')->result_array();

    }

    public function get_users_by_created_by($user_id)
    {
        $this->db->join('barang', 'barang.id_barang=tbl_users.id_barang', 'left');
        return $this->db->get_where('tbl_users', array('created_by' => $user_id))->result_array();
    }

    /*
     * function to add new barang
     */
    public function add_barang($params)
    {
        $this->db->insert('barang', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update barang
     */
    public function update_barang($id_barang, $params)
    {
        $this->db->where('id_barang', $id_barang);
        return $this->db->update('barang', $params);
    }

    /*
     * function to delete barang
     */
    public function delete_barang($id_barang)
    {
        return $this->db->delete('barang', array('id_barang' => $id_barang));
    }

    // KATEGORI
    public function get_all_kategori($params = array())
    {
        $this->db->order_by('kategori.id_kategori', 'asc');
        // $this->db->join('tbl_users', 'tbl_users.id_kategori=kategori.id_kategori', 'left');
        if (isset($params) && !empty($params)) {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('kategori')->result_array();

    }

}
