<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_model extends CI_Model {

  public function username()
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

  public function password()
  {
    $this->db->where('u_username',$this->input->post('username'));
    $this->db->where('u_password',md5($this->input->post('userpass')));
    $result = $this->db->get(TBL_USERS);
    if($result->num_rows() == 0)
    {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  public function check_rec_status()
  {
    $this->db->where('u_username',$this->input->post('username'));
    $this->db->where('u_password',md5($this->input->post('userpass')));
    $this->db->where('u_role','Recruiter');
    $this->db->where('u_status',1);
    $result = $this->db->get(TBL_USERS);
    if($result->num_rows() == 0)
    {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }


  public function check_admin_status()
  {
    $this->db->where('u_username',$this->input->post('username'));
    $this->db->where('u_password',md5($this->input->post('userpass')));
    $this->db->where('u_role','Admin');
    $this->db->where('u_status',1);
    $result = $this->db->get(TBL_USERS);
    if($result->num_rows() == 0)
    {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  public function email_exists()
  {

    $this->db->where('u_email',$this->input->post('femail'));
    $result = $this->db->get(TBL_USERS);
    if($result->num_rows() == 0)
    {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }



  public function get_data($username, $password)
    {
        $this->db->where('u_username', $username);
        $this->db->where('u_password', md5($password));
        $query = $this->db->get(TBL_USERS);

        if($query->num_rows() == 1) {
            return $query->row();
        }

        return false;
    }

}
 ?>
