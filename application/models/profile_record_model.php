<?php

class profile_record_model extends CI_Model
{
    public function rec_profile()
    {
        $can_data = array(
      'pi_username' => $this->session->userdata('username'),
      'pi_name' => $this->input->post('fullname'),
      'pi_email' => $this->input->post('email'),
      'pi_phone' => $this->input->post('phone'),
      'pi_gender' => $this->input->post('gender'),
      'pi_jobtitle' => $this->input->post('jobtitle'),
      'pi_role' => 'Recruiter'
        );
        $insert = $this->db->insert(TBL_PROFILE,$can_data);
        return $insert;
    }

    public function add_rec_profile()
    {
        $can_data = array(
      'pi_username' => $this->input->post('rec_username'),
      'pi_name' => $this->input->post('rec_name'),
      'pi_email' => $this->input->post('rec_email'),
      'pi_phone' => $this->input->post('rec_phone'),
      'pi_gender' => $this->input->post('rec_gender'),
      'pi_jobtitle' => $this->input->post('rec_jobtitle'),
      'pi_role' => 'Recruiter'
        );
        $insert = $this->db->insert(TBL_PROFILE,$can_data);
    }




    public function check_rec_details($data)
    {
      $this->db->where('pi_username',$data['uname']);
      $res = $this->db->get(TBL_PROFILE);
      return $res->result_array();

    }

    public function check_admin_details($data)
    {
      $this->db->where('pi_username',$data['uname']);
      $res = $this->db->get(TBL_PROFILE);
      return $res->result_array();

    }

    public function admin_profile()
    {
          $can_data = array(
        'pi_username' => $this->session->userdata('username'),
        'pi_name' => $this->input->post('fullname'),
        'pi_email' => $this->input->post('email'),
        'pi_phone' => $this->input->post('phone'),
        'pi_gender' => $this->input->post('gender'),
        'pi_jobtitle' => 'Admin',
        'pi_role' => 'Admin'
            );
        $insert = $this->db->insert(TBL_PROFILE,$can_data);
        return $insert;

    }

    public function rec_exists($username)
    {
      $this->db->where('pi_username',$username);
      $data = array(
        'pi_name' => $this->input->post('fullname'),
        'pi_email' => $this->input->post('email'),
        'pi_phone' => $this->input->post('phone'),
        'pi_gender' => $this->input->post('gender'),
        'pi_jobtitle' => $this->input->post('jobtitle'),
        'pi_role' => 'Recruiter'
      );
      return $this->db->update(TBL_PROFILE,$data);

    }


    public function admin_exists($username)
    {
      $this->db->where('pi_username',$username);
      $data = array(
        'pi_name' => $this->input->post('fullname'),
        'pi_email' => $this->input->post('email'),
        'pi_phone' => $this->input->post('phone'),
        'pi_gender' => $this->input->post('gender'),
        'pi_jobtitle' => 'Admin',
        'pi_role' => 'Admin'
      );
      echo $this->db->update(TBL_PROFILE,$data);

    }


}



 ?>
