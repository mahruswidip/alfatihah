<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Artikel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
    }

    /*
     * Listing of artikel
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('artikel/index?');
        $config['total_rows'] = $this->Artikel_model->get_all_artikel_count();
        $this->pagination->initialize($config);

        $user_level = $this->session->userdata('user_level');
        $user_id = $this->session->userdata('user_id');

        $data['artikel'] = '';
        if ($user_level == '2') {
            $data['artikel'] = $this->Artikel_model->get_users_by_created_by($user_id);
        } elseif ($user_level == '1') {
            $data['artikel'] = $this->Artikel_model->get_all_artikel($params);
        }


        // echo '<pre>';
        // print_r($data['artikel']);
        // exit();

        $data['_view'] = 'artikel/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new artikel
     */
    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'tanggal_artikel' => $this->input->post('tanggal_artikel'),
                'is_aktif' => $this->input->post('is_aktif'),
                'tanggal_manasik' => $this->input->post('tanggal_manasik'),
            );

            $artikel_id = $this->Artikel_model->add_artikel($params);
            redirect('artikel/index');
        } else {
            $data['_view'] = 'artikel/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a artikel
     */


    function edit($id_artikel)
    {
        // check if the artikel exists before trying to edit it
        $data['artikel'] = $this->Artikel_model->get_artikel($id_artikel);

        if (isset($data['artikel']['id_artikel'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'tanggal_artikel' => $this->input->post('tanggal_artikel'),
                    'is_aktif' => $this->input->post('is_aktif'),
                    'tanggal_manasik' => $this->input->post('tanggal_manasik'),
                );

                $this->Artikel_model->update_artikel($id_artikel, $params);
                redirect('artikel/index');
            } else {
                $data['_view'] = 'artikel/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The artikel you are trying to edit does not exist.');
    }


    /*
     * Nonaktifkan artikel
     */
    function deactivate($id_artikel)
    {
        $this->Artikel_model->update_artikel($id_artikel, array('is_aktif' => '0'));
        redirect('artikel/index');
    }

    /*
     * Deleting artikel
     */
    function remove($id_artikel)
    {
        $artikel = $this->Artikel_model->get_artikel($id_artikel);

        // check if the artikel exists before trying to delete it
        if (isset($artikel['id_artikel'])) {
            $this->Artikel_model->delete_artikel($id_artikel);
            redirect('artikel/index');
        } else
            show_error('The artikel you are trying to delete does not exist.');
    }
}