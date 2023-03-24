<?php

class Kategori_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * Get kategori by id_kategori
     */
    public function get_kategori($id_kategori)
    {
        return $this->db->get_where('kategori', array('id_kategori' => $id_kategori))->row_array();
    }

    /*
     * Get all kategori count
     */
    public function get_all_kategori_count()
    {
        $this->db->from('kategori');
        return $this->db->count_all_results();
    }

    /*
     * Get all kategori
     */
    public function get_all_kategori($params = array())
    {
        $this->db->order_by('kategori.id_kategori', 'desc');
        // $this->db->join('tbl_users', 'tbl_users.id_kategori=kategori.id_kategori', 'left');
        if (isset($params) && !empty($params)) {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('kategori')->result_array();

    }

    public function get_users_by_created_by($user_id)
    {
        $this->db->join('kategori', 'kategori.id_kategori=tbl_users.id_kategori', 'left');
        return $this->db->get_where('tbl_users', array('created_by' => $user_id))->result_array();
    }

    /*
     * function to add new kategori
     */
    public function add_kategori($params)
    {
        $this->db->insert('kategori', $params);
        return $this->db->insert_id();
    }

    public function get_or_add_kategori($nama_kategori)
    {
        $kategori = $this->db->get_where('kategori', array('id_kategori' => $nama_kategori))->row_array();

        if (!$kategori) {
            // var_dump('Model When NOOTT Exist');
            // print_r($kategori);
            // exit();
            // Kategori doesn't exist, so insert it into the database
            $this->db->insert('kategori', array('nama_kategori' => $nama_kategori));
            $kategori_id = $this->db->insert_id();

        } else {
            // Kategori already exists, so use its ID
            $kategori_id = $kategori['id_kategori'];
            // var_dump('Model When EXISTT');
            // print_r($kategori);
            // exit();
        }

        return $kategori_id;
    }

    /*
     * function to update kategori
     */
    public function update_kategori($id_kategori, $params)
    {
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->update('kategori', $params);
    }

    /*
     * function to delete kategori
     */
    public function delete_kategori($id_kategori)
    {
        return $this->db->delete('kategori', array('id_kategori' => $id_kategori));
    }
}