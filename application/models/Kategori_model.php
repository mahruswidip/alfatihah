<?php

class Kategori_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get kategori by id_kategori
     */
    function get_kategori($id_kategori)
    {
        return $this->db->get_where('kategori',array('id_kategori'=>$id_kategori))->row_array();
    }
    
    /*
     * Get all kategori count
     */
    function get_all_kategori_count()
    {
        $this->db->from('kategori');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all kategori
     */
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

    function get_users_by_created_by($user_id)
    {
        $this->db->join('kategori', 'kategori.id_kategori=tbl_users.id_kategori', 'left');
        return $this->db->get_where('tbl_users',array('created_by'=>$user_id))->result_array();
    }
        
    /*
     * function to add new kategori
     */
    function add_kategori($params)
    {
        $this->db->insert('kategori',$params);
        return $this->db->insert_id();
    }
    function get_or_add_kategori($nama_kategori)
{
    $query = $this->db->get_where('kategori', array('nama_kategori' => $nama_kategori));
    if ($query->num_rows() == 0) {
        $params = array('nama_kategori' => $nama_kategori);
        $this->db->insert('kategori', $params);
        return $this->db->insert_id();
    } else {
        return $query->row()->id_kategori;
    }
}
    /*
     * function to update kategori
     */
    function update_kategori($id_kategori,$params)
    {
        $this->db->where('id_kategori',$id_kategori);
        return $this->db->update('kategori',$params);
    }
    
    /*
     * function to delete kategori
     */
    function delete_kategori($id_kategori)
    {
        return $this->db->delete('kategori',array('id_kategori'=>$id_kategori));
    }
}