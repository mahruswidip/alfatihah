<?php

class Barang_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get barang by id_barang
     */
    function get_barang($id_barang)
    {
        return $this->db->get_where('barang',array('id_barang'=>$id_barang))->row_array();
    }
    
    /*
     * Get all barang count
     */
    function get_all_barang_count()
    {
        $this->db->from('barang');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all barang
     */
    function get_all_barang($params = array())
    {
        $this->db->order_by('barang.id_barang', 'asc');
        // $this->db->join('tbl_users', 'tbl_users.id_barang=barang.id_barang', 'left');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('barang')->result_array();
        
    }

    function get_users_by_created_by($user_id)
    {
        $this->db->join('barang', 'barang.id_barang=tbl_users.id_barang', 'left');
        return $this->db->get_where('tbl_users',array('created_by'=>$user_id))->result_array();
    }
        
    /*
     * function to add new barang
     */
    function add_barang($params)
    {
        $this->db->insert('barang',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update barang
     */
    function update_barang($id_barang,$params)
    {
        $this->db->where('id_barang',$id_barang);
        return $this->db->update('barang',$params);
    }
    
    /*
     * function to delete barang
     */
    function delete_barang($id_barang)
    {
        return $this->db->delete('barang',array('id_barang'=>$id_barang));
    }



    // KATEGORI
    function get_all_kategori($params = array())
    {
        $this->db->order_by('kategori.id_kategori', 'asc');
        // $this->db->join('tbl_users', 'tbl_users.id_kategori=kategori.id_kategori', 'left');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('kategori')->result_array();
        
    }
    
}