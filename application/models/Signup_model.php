<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_model extends CI_Model {

  public function Check_username()
  {
    $this->db->where('u_username',$this->input->post('username'));
    $result = $this->db->get(TBL_USERS);
    if($result->num_rows() == 0)
    {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  public function Check_rec_username()
  {
    $this->db->where('u_username',$this->input->post('rec_username'));
    $result = $this->db->get(TBL_USERS);
    if($result->num_rows() == 0)
    {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }


  public function Check_email()
  {
    $this->db->where('u_email',$this->input->post('useremail'));
    $result = $this->db->get(TBL_USERS);
    if($result->num_rows() == 0)
    {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }


  public function Check_both()
  {
    $this->db->where('u_email',$this->input->post('useremail'));
    $this->db->where('u_username',$this->input->post('username'));
    $result = $this->db->get(TBL_USERS);
    if($result->num_rows() == 0)
    {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  public function Create_rec()
  {

    $new_member_insert_data = array(
      'u_username' => $this->input->post('username'),
      'u_email'    => $this->input->post('useremail'),
      'u_password' => md5($this->input->post('userpass'))
    );

    $insert = $this->db->insert(TBL_USERS,$new_member_insert_data);
    return $insert;

  }

  public function add_rec()
  {

    $new_rec = array(
      'u_username' => $this->input->post('rec_username'),
      'u_email'    => $this->input->post('rec_email'),
      'u_password' => md5($this->input->post('rec_password')),
      'u_status' => 1
    );

    $insert = $this->db->insert(TBL_USERS,$new_rec);
  }




}
