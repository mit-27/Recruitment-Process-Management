<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class R_dashboard extends CI_Controller
{
  public function __construct()
    {
        parent::__construct();
        $this->logged_in();
    }

    private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect(LOGIN_URL);
        }
    }

    public function index()
    {
      $data['uname'] = $this->session->userdata('username');
      $data['can_details']=$this->Candidate_model->get_selected_candidate($data);
      $data['last_can'] = $this->Candidate_model->last_candidate($data);
      $data['rtotal'] = $this->Calendar_model->count_all($data);
      $data['r1'] = $this->Calendar_model->count_can($data,0.25);
      $data['r2'] = $this->Calendar_model->count_can($data,0.5);
      $data['r3'] = $this->Calendar_model->count_can($data,0.75);
      $data['rc'] = $this->Calendar_model->count_can($data,1);
      $this->load->view('Recruiter_dashboard_view/Rdashboard',$data);
    }

    public function count_can()
    {
      $data['uname'] = $this->session->userdata('username');
      $data['rtotal'] = $this->Calendar_model->count_all($data);
      $data['r1'] = $this->Calendar_model->count_can($data,0.25);
      $data['r2'] = $this->Calendar_model->count_can($data,0.5);
      $data['r3'] = $this->Calendar_model->count_can($data,0.75);
      $data['rc'] = $this->Calendar_model->count_can($data,1);

    }

    public function Rcalendar_view()
    {
      $data['uname'] = $this->session->userdata('username');
      $this->load->view('Recruiter_dashboard_view/Rcalendar',$data);
    }

    public function Rcandidate_view()
    {
      $data['uname'] = $this->session->userdata('username');
      $this->load->view('Recruiter_dashboard_view/Rcandidate',$data);
    }

    public function Rstatus_view()
    {
      $data['uname'] = $this->session->userdata('username');
      $data['can_details']=$this->Candidate_model->get_candidate($data);
      $this->load->view('Recruiter_dashboard_view/Rstatus',$data);
    }

    public function Raccount_details_view()
    {
      $data['uname'] = $this->session->userdata('username');
      if($this->profile_record_model->check_rec_details($data))
      {
        $data['rec_details'] = $this->profile_record_model->check_rec_details($data);
      }
      $this->load->view('Recruiter_dashboard_view/RecruiterAccountDetails',$data);
    }

    public function Rscandidate_view()
    {
      $data['uname'] = $this->session->userdata('username');
      $data['can_details']=$this->Candidate_model->get_selected_candidate($data);

      $this->load->view('Recruiter_dashboard_view/Rscandidate',$data);
    }

    public function Rschedule_view()
    {
      $data['uname'] = $this->session->userdata('username');
      $this->load->view('Recruiter_dashboard_view/Rschedule',$data);
    }

    public function schedule_proc()
    {
      if($this->Candidate_model->check_status())
      {
        if($this->Calendar_model->add_event())
        {
          $this->Candidate_model->update_interview_status();
          redirect(R_CALENDAR_URL);
        }
        else {
          // not inserted in database
        }
      }
      else {
        $this->session->set_flashdata('msg','Entered Candidate is not interested for interview or Not Picking up Call');
        redirect(R_SCHEDULE_URL);
      }
    }

    public function get_events()
    {
    $data = array();
    $uname = $this->session->userdata('username');
    $result = $this->Calendar_model->get_event($uname);
    foreach($result->result_array() as $row)
    {


      $data[]=array(
        'id' => $row['ce_id'],
        'title' => $row['ce_can_name'],
        'Interviewer'=>$row['ce_interviewer'],
        'start' => $row['ce_start_date'],
        'end'=>$row['ce_end_date'],
        'interview_round' => $row['ce_interview_round']
      );
    }
    echo json_encode($data);
    }


    public function do_upload()
    {
      $rec_username = $this->session->userdata('username');
      if($this->Candidate_model->upload_can($rec_username))
      {
                if(($this->input->post('can_current_status')) == 'Interested')
                {
                  $data['can_name'] = $this->input->post('cname');
                  $data['uname'] = $this->session->userdata('username');
                  $data['can_id'] = $this->Candidate_model->get_id();
                  $this->load->view('Recruiter_dashboard_view/Rschedule',$data);
                }
                else {
                  $this->Rstatus_view();
                }

      }
      else if($this->input->post('rfile')) {

        $file = $_FILES['resume_file'];
        $fileName = $_FILES['resume_file']['name'];
        $fileTmpName = $_FILES['resume_file']['tmp_name'];
        $fileSize = $_FILES['resume_file']['size'];
        $fileError = $_FILES['resume_file']['error'];
        $fileType = $_FILES['resume_file']['type'];
        $file_ext = explode('.',$fileName);
        $fileActualExt = strtolower(end($file_ext));

        $allowedformat = array( 'pdf', 'doc', 'docx');

        if (in_array($fileActualExt, $allowedformat)) {
            if ($fileError == 0) {
                if($fileSize < 1000000){
                    $fileNewName = ($this->input->post('cname')).".".$fileActualExt;
                    $fileDestination = dirname(__FILE__).'/../../uploads/'.$fileNewName;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    //header("Location: index.php?uploadsuccess");
                }
                else{
                    echo "Your file is too big!";
                }

            } else {
                echo "There was an error uploading your file!";
            }

        }
        else{
            echo "You cannot upload files of this type!";
        }

      }

    }




    public function logout()
    {
        $this->session->sess_destroy();
        redirect(LOGIN_URL);
    }

    public function rec_profile_upload()
    {
      $rec_username = $this->session->userdata('username');
      if($this->profile_record_model->rec_exists($rec_username))
      {
        redirect(R_DASHBOARD_URL);
      }
      else
      {
        $this->profile_record_model->rec_profile();
        redirect(R_DASHBOARD_URL);
      }
    }




    public function calender_update()
    {
      $id = $this->input->post('can_id');
      $delete = intval($this->input->post("delete"));
      if($delete)
      {
        $this->Calendar_model->delete_event($id);
      }
      else {
        $data = array(
          'ce_can_name' => $this->input->post('can_name'),
          'ce_interviewer' => $this->input->post('Interviewer'),
          'ce_start_date' => $this->input->post('start_date'),
          'ce_end_date' => $this->input->post('end_date'),
          'ce_interview_round' => $this->input->post('interview_round')
        );
        $this->Calendar_model->update_event($id,$data);
      }
      redirect(R_CALENDAR_URL);
    }

    public function find_can_details()
    {
      $can_id = $this->input->post('can_id');
      $data = $this->Candidate_model->get_can_by_id($can_id);
      echo json_encode($data[0]);
    }

    public function update_candidate()
    {
      $this->Candidate_model->update_can();
      redirect(R_STATUS_URL);
    }

    public function schedule_btn_action()
    {
      $data['can_id'] = $this->uri->segment(3);
      $data['uname'] = $this->session->userdata('username');
      $data['can_name'] = $this->Candidate_model->get_cname($data);
      $this->load->view('Recruiter_dashboard_view/Rschedule',$data);
    }







}


 ?>
