<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate_model extends CI_Model
{
  public function upload_can($rec_username)
  {
    $can_data = array(
      'cd_rec_username' => $rec_username,
      'cd_name' => $this->input->post('cname'),
      'cd_email' => $this->input->post('cemail'),
      'cd_phone' => $this->input->post('cphone'),
      'cd_gender' => $this->input->post('gender'),
      'cd_job_title' => $this->input->post('jobtitle'),
      'cd_source' => $this->input->post('csource'),
      'cd_description' => $this->input->post('can_status'),
      'cd_resume_link' => $this->input->post('resume_link'),
      'cd_status' => $this->input->post('can_current_status')
    );
    $insert = $this->db->insert(TBL_CANDIDATE_DETAILS,$can_data);
    return $insert;

  }

  public function last_candidate($data)
  {
   // $query = $this->db->query("select cd_name from ".TBL_CANDIDATE_DETAILS." where cd_rec_username =".$data['uname']." order by cd_id DESC limit 5");
    $this->db->select('cd_name');
    $this->db->where('cd_rec_username',$data['uname']);
    $this->db->order_by('cd_id','DESC');
    $this->db->limit(5);
    $query = $this->db->get(TBL_CANDIDATE_DETAILS);
   return $query->result_array();
  }

  public function get_id()
  {
    $this->db->select('cd_id');
    $this->db->where('cd_name',$this->input->post('cname'));
    $query = $this->db->get(TBL_CANDIDATE_DETAILS);
    $row = $query->row_array();
    return $row['cd_id'];
  }






  public function check_status()
  {
    $can_name = $this->input->post('can_name');
    $this->db->where('cd_name',$can_name);
    $this->db->where('cd_status','Interested');
    $this->db->where('cd_id',$this->input->post('can_id'));
    $result = $this->db->get(TBL_CANDIDATE_DETAILS);
    if($result->num_rows() == 0)
    {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  public function update_interview_status()
  {
    $can_name = $this->input->post('can_name');
    $this->db->where('cd_name',$can_name);
    $this->db->update(TBL_CANDIDATE_DETAILS,array('cd_interview_status'=> 1));
  }

  public function get_candidate($data)
 {
   $this->db->where('cd_rec_username',$data['uname']);
   $res = $this->db->get(TBL_CANDIDATE_DETAILS);
   return $res;
 }

  public function get_selected_candidate($data)
  {
    $sql = "select * from ".TBL_CANDIDATE_DETAILS.",".TBL_CALENDAR." where cd_rec_username = ? and cd_status = ? and cd_interview_status = ? and ce_id=cd_id";
    $res = $this->db->query($sql,array($data['uname'],'Interested',1));
    return $res;
  }

  public function get_selected_all_candidate($data)
  {
    $sql = "select * from ".TBL_CANDIDATE_DETAILS.",".TBL_CALENDAR." where  cd_status = ? and cd_interview_status = ? and ce_id=cd_id";
    $res = $this->db->query($sql,array('Interested',1));
    return $res;
  }

  public function get_can_by_id($can_id)
  {
    $this->db->where('cd_id',$can_id);
    $res = $this->db->get(TBL_CANDIDATE_DETAILS);
    return $res->result_array();
  }

  public function update_can()
  {
    $this->db->where('cd_id',$this->input->post('cid'));
    $data = array(
      'cd_name' => $this->input->post('cname'),
      'cd_email' => $this->input->post('cemail'),
      'cd_phone' => $this->input->post('cphone'),
      'cd_job_title' => $this->input->post('cjobtitle'),
      'cd_status' => $this->input->post('cstatus')
    );
    $this->db->update(TBL_CANDIDATE_DETAILS,$data);
  }

  public function get_cname($data)
  {
    $this->db->select('cd_name');
    $this->db->where('cd_id',$data['can_id']);
    $res=$this->db->get(TBL_CANDIDATE_DETAILS);
    $ans = $res->result_array();
    return $ans[0]['cd_name'];
  }

  public function only_interested_can(){
    $this->db->where('cd_status','Interested');
    $this->db->where('cd_interview_status',0);
    return $this->db->count_all_results(TBL_CANDIDATE_DETAILS);
  }


 

}

 ?>
