<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Paket extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Paket_model');
    }

    /*
     * Listing of luasan
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('paket/index?');
        $config['total_rows'] = $this->Paket_model->get_all_paket_count();
        $this->pagination->initialize($config);

        $data['paket'] = $this->Paket_model->get_all_paket($params);

        $data['_view'] = 'paket/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new luasan
     */

    function bukatambah()
    {
        $data['_view'] = 'paket/add';
        $this->load->view('layouts/main', $data);
    }
    function add()
    {
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $user_id = $this->session->userdata('user_id');
        
        $this->upload->initialize($config);
        if (!empty($_FILES['paket_img']['name'])) {
            if ($this->upload->do_upload('paket_img')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = '20%';
                $config['max_size'] = '5000';
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];

                $params = array(
                    'nama_program' => $this->input->post('nama_program'),
                    'kategori' => $this->input->post('kategori'),
                    'paket' => $this->input->post('paket'),
                    'hotel_mekkah' => $this->input->post('hotel_mekkah'),
                    'hotel_madinah' => $this->input->post('hotel_madinah'),
                    'bintang_mekkah' => $this->input->post('bintang_mekkah'),
                    'bintang_madinah' => $this->input->post('bintang_madinah'),
                    'matauang' => $this->input->post('matauang'),
                    'uang_muka' => $this->input->post('uang_muka'),
                    'matauangall' => $this->input->post('matauangall'),
                    'harga_paket' => $this->input->post('harga_paket'),
                    'sudah_termasuk' => $this->input->post('sudah_termasuk'),
                    'belum_termasuk' => $this->input->post('belum_termasuk'),
                    'tampilan' => $this->input->post('tampilan'),
                    'created_by' => $user_id,
                );

                $this->Paket_model->add_paket($params, $gambar);
                redirect('paket/index');
            } else {
                echo "else";
                exit();
                redirect('paket/index');
            }
        } else {
            $this->session->set_flashdata('error','Ukuran Tidak boleh lebih dari 5 MB');
            redirect('paket/add');
        }

        // $user_id = $this->session->userdata('user_id');
        // if (isset($_POST) && count($_POST) > 0) {
        //     $params = array(
        //         'nama_program' => $this->input->post('nama_program'),
        //         'paket' => $this->input->post('paket'),
        //         'hotel_mekkah' => $this->input->post('hotel_mekkah'),
        //         'hotel_madinah' => $this->input->post('hotel_madinah'),
        //         'bintang_mekkah' => $this->input->post('bintang_mekkah'),
        //         'bintang_madinah' => $this->input->post('bintang_madinah'),
        //         'uang_muka' => $this->input->post('uang_muka'),
        //         'harga_paket' => $this->input->post('harga_paket'),
        //         'sudah_termasuk' => $this->input->post('sudah_termasuk'),
        //         'belum_termasuk' => $this->input->post('belum_termasuk'),
        //         'paket_img' => $this->input->post('paket_img'),
        //         'created_by' => $user_id,
        //     );
        //     $paket_id = $this->Paket_model->add_paket($params);
        //     redirect('paket/index');
        // } else {
        //     $data['_view'] = 'paket/add';
        //     $this->load->view('layouts/main', $data);
        // }
    }

    /*
     * Editing a luasan
     */
    function edit($id_paket)
    {
        // check if the luasan exists before trying to edit it
        $data['paket'] = $this->Paket_model->get_paket($id_paket);

        if (isset($data['paket']['id_paket'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'nama_program' => $this->input->post('nama_program'),
                    'kategori' => $this->input->post('kategori'),
                    'paket' => $this->input->post('paket'),
                    'hotel_mekkah' => $this->input->post('hotel_mekkah'),
                    'hotel_madinah' => $this->input->post('hotel_madinah'),
                    'bintang_mekkah' => $this->input->post('bintang_mekkah'),
                    'bintang_madinah' => $this->input->post('bintang_madinah'),
                    'matauang' => $this->input->post('matauang'),
                    'uang_muka' => $this->input->post('uang_muka'),
                    'matauangall' => $this->input->post('matauangall'),
                    'harga_paket' => $this->input->post('harga_paket'),
                    'sudah_termasuk' => $this->input->post('sudah_termasuk'),
                    'belum_termasuk' => $this->input->post('belum_termasuk'),
                    'tampilan' => $this->input->post('tampilan'),
                    'paket_img' => $this->input->post('paket_img'),
                );

                $this->Paket_model->update_paket($id_paket, $params);
                redirect('paket/index');
            } else {
                $data['_view'] = 'paket/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The paket you are trying to edit does not exist.');
    }

    /*
     * Deleting paket
     */
    function remove($id_paket)
    {
        $paket = $this->Paket_model->get_paket($id_paket);

        // check if the paket exists before trying to delete it
        if (isset($paket['id_paket'])) {
            $this->Paket_model->delete_paket($id_paket);
            redirect('paket/index');
        } else
            show_error('The paket you are trying to delete does not exist.');
    }
}
