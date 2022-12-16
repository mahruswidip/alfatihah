<?php

require(APPPATH . '/config/REST_Controller.php');

class Api extends REST_Controller
{

  /**
   * Get All Data from this method.
   *
   * @return Response
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  /**
   * Get All Data from this method.
   *
   * @return Response
   */
  public function get_jamaah($user_email = 0)
  {
    if (!empty($user_email)) {
      $data = $this->db->get_where("tbl_users", ['user_email' => $user_email])->row_array();
    } else {
      $data = $this->db->get("tbl_users")->result();
    }

    $this->response($data, REST_Controller::HTTP_OK);
  }

  /**
   * Get All Data from this method.
   *
   * @return Response
   */
  // public function index_post()
  // {
  //   $input = $this->input->post();
  //   $this->db->insert('items', $input);

  //   $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
  // }

  /**
   * Get All Data from this method.
   *
   * @return Response
   */
  public function index_put($user_email)
  {
    $input = $this->put();
    $this->db->update('tbl_users', $input, array('user_email' => $user_email));

    $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
  }

  /**
   * Get All Data from this method.
   *
   * @return Response
   */
}
