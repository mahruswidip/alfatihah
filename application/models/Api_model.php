<?php
// extends class Model
class Api_model extends CI_Model
{
    // response jika field ada yang kosong
    public function empty_response()
    {
        $response['status'] = 502;
        $response['error'] = true;
        $response['message'] = 'Field tidak boleh kosong';
        return $response;
    }
    // function untuk insert data ke tabel tbl_users
    public function add_person($user_name, $user_email, $user_password)
    {
        if (empty($user_name) || empty($user_email) || empty($user_password)) {
            return $this->empty_response();
        } else {
            $data = array(
                "user_name" => $user_name,
                "user_email" => $user_email,
                "user_password" => $user_password
            );
            $insert = $this->db->insert("tbl_users", $data);
            if ($insert) {
                $response['status'] = 200;
                $response['error'] = false;
                $response['message'] = 'Data person ditambahkan.';
                return $response;
            } else {
                $response['status'] = 502;
                $response['error'] = true;
                $response['message'] = 'Data person gagal ditambahkan.';
                return $response;
            }
        }
    }
    // mengambil semua data person
    public function all_person()
    {
        $all = $this->db->get("tbl_users")->result();
        $response['status'] = 200;
        $response['error'] = false;
        $response['person'] = $all;
        return $response;
    }
    // hapus data person
    public function delete_person($id)
    {
        if ($id == '') {
            return $this->empty_response();
        } else {
            $where = array(
                "id" => $id
            );
            $this->db->where($where);
            $delete = $this->db->delete("tbl_users");
            if ($delete) {
                $response['status'] = 200;
                $response['error'] = false;
                $response['message'] = 'Data person dihapus.';
                return $response;
            } else {
                $response['status'] = 502;
                $response['error'] = true;
                $response['message'] = 'Data person gagal dihapus.';
                return $response;
            }
        }
    }
    // update person
    public function update_person($user_email, $user_password, $pass)
    {
        if ($user_email == '' || empty($user_password) || empty($pass)) {
            return $this->empty_response();
        } else {
            $where = array(
                "user_email" => $user_email,
            );
            $set = array(
                "user_email" => $user_email,
                "user_password" => $user_password,
                "pass" => $pass
            );
            $this->db->where($where);
            $update = $this->db->update("tbl_users", $set);
            if ($update) {
                $response['status'] = 200;
                $response['error'] = false;
                $response['message'] = 'Data person diubah.';
                return $response;
            } else {
                $response['status'] = 502;
                $response['error'] = true;
                $response['message'] = 'Data person gagal diubah.';
                return $response;
            }
        }
    }
}
