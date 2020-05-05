<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
	}

	public function signup()
	{
		$this->load->view('signup');
	}

	public function signupproc()
	{
		if($this->Signup_model->Check_both()) {
		 $this->session->set_flashdata('emailusername','Following Username and Email both are already existed');
		 redirect(SIGNUP_URL);
	 }

		else if($this->Signup_model->Check_username())
		{
			$this->session->set_flashdata('useralready','Following Username already existed');
			redirect(SIGNUP_URL);
		}

		else if ($this->Signup_model->Check_email()) {
			$this->session->set_flashdata('emailalready','Following Email already existed');
			redirect(SIGNUP_URL);
		}

	else{
			if($this->Signup_model->Create_rec())
			{
				$senddata['Rusername'] = $this->input->post('username');
				$senddata['Remail'] = $this->input->post('useremail');
				if($this->sendmail())
				{
					$this->session->set_flashdata('success_msg','Your Account has been Created and Activation mail sent to Admin<br/> You may now Login');
					redirect(SIGNUP_URL);
				}
				else {
					$this->session->set_flashdata('mail_failed_msg','Your Account has been Created but Activation mail is not sent to Admin due to error<br/> You may now Login');
					redirect(SIGNUP_URL);

				}
			}
			else {
				$this->session->set_flashdata('rec_failed_msg','Recruiter is not created.<br/> You may now Login');
				redirect(SIGNUP_URL);
			}

			}
  }

	public function loginproc()
	{
		if($this->Login_model->username())
		{
			if($this->Login_model->password())
			{
				if($this->Login_model->check_rec_status())
				{
					$username = $this->input->post('username');
            $password =$this->input->post('userpass');

            $user = $this->Login_model->get_data($username, $password);

            if($user){
                $userdata = array(
                    'id' => $user->u_id,
                    'username' => $user->u_username,
                    'email' => $user->u_email,
										'Role' => $user->u_role,
                    'authenticated' => TRUE
                );

          			$this->session->set_userdata($userdata);
								redirect(R_DASHBOARD_URL);
										}
						else {
							echo "data fatch error";
						}
				}
				else if($this->Login_model->check_admin_status())
				{
					$username = $this->input->post('username');
            $password =$this->input->post('userpass');

            $user = $this->Login_model->get_data($username, $password);

            if($user){
                $userdata = array(
                    'id' => $user->u_id,
                    'username' => $user->u_username,
                    'email' => $user->u_email,
										'Role' => $user->u_role,
                    'authenticated' => TRUE
                );

          			$this->session->set_userdata($userdata);
								redirect(A_DASHBOARD_URL);
										}
						else {
							echo "data fatch error";
						}
				}
				else {
					// Account is not activated
					$this->session->set_flashdata('msgad','Account is not activated');
					redirect(LOGIN_URL);
				}

			}
			else {
				// Pass wrong
				$this->session->set_flashdata('msgpw','Wrong Password. Try again or click Forgot password to reset it');
				redirect(LOGIN_URL);

			}

		}
		else {
			$this->session->set_flashdata('msgupw','Invalid Username and Password');
			redirect(LOGIN_URL);

		}
	}


	public function sendmail()
	{
		$rec_username = $this->input->post('username');
		$rec_email   = $this->input->post('useremail');


    $subject = "Activation of Recruiter Account ";
    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.gmail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '60';
    $config['smtp_user']    =  SENDER_EMAIL;  //Important
    $config['smtp_pass']    =  SENDER_PASSWORD;  //Important
    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not

		$this->load->library('email', $config);
    $this->email->initialize($config);

      $this->email->set_newline("\r\n");
      $this->email->from(SENDER_EMAIL);
      $this->email->to(SENDER_EMAIL);
      $this->email->subject($subject);
      $message = 	"
            <html>
            <head>
              <title>Activate Recruiter</title>
            </head>
            <body>
							 <h3>Recruiter Username : ".$rec_username ."<br/>
												Recruiter Email : ".$rec_email."</h3>
              <h4><a href='http://localhost:8080/Main_project/index.php/Login/activate_rec/".$rec_username."'>Activate Recruiter Account</a></h4>
            </body>
            </html>
            ";
         $this->email->message($message);
         if($this->email->send())
				 {
					 return TRUE;
				 }
				 else {
				 	return FALSE;
				 }
	}


	public function activate_rec()
	{
		$uname = $this->uri->segment(3);
		$this->db->where('u_username',$uname);
		$this->db->update(TBL_USERS,array('u_status'=> 1));
		redirect(LOGIN_URL);
	}

	public function forgotpassword()
	{
		$this->load->view('forgotpassword');
	}

	public function forgot_pass_process()
	{
		if($this->Login_model->email_exists())
		{
	    $subject = "Forgot Password ";
	    $config['protocol']    = 'smtp';
	    $config['smtp_host']    = 'ssl://smtp.gmail.com';
	    $config['smtp_port']    = '465';
	    $config['smtp_timeout'] = '60';
	    $config['smtp_user']    = SENDER_EMAIL;    //Important
	    $config['smtp_pass']    = SENDER_PASSWORD;  //Important
	    $config['charset']    = 'utf-8';
	    $config['newline']    = "\r\n";
	    $config['mailtype'] = 'html'; // or html
	    $config['validation'] = TRUE; // bool whether to validate email or not

			$this->load->library('email', $config);
	    $this->email->initialize($config);

	      $this->email->set_newline("\r\n");
	      $this->email->from(SENDER_EMAIL);
				$rec_email = $this->input->post('femail');
	      $this->email->to($rec_email);
	      $this->email->subject($subject);
	      $message = 	"
	            <html>
	            <head>
	            </head>
	            <body>
								 <h3>Click the below link for set new Password</h3>
	              <h4><a href='http://localhost:8080/Main_project/index.php/Login/reset_password/".$rec_email."'>Reset Password</a></h4>
	            </body>
	            </html>
	            ";
	         $this->email->message($message);
	         if($this->email->send()){
						 $data['smsg'] = "Your reset Password Link has been sent on your Email.";
						 $this->load->view('forgotpass',$data);
					 }
					 else {
						 $data['fmsg'] = "Mail is not sent , Please try again.";
						 $this->load->view('forgotpass',$data);
					 }


		}
		else {
			$data['efailed'] = "There is no Account exists which connected to entered Email.";
			$this->load->view('forgotpass',$data);
		}
	}



	public function reset_password()
	{
		$data['semail'] = $this->uri->segment(3);
		$this->load->view('resetpassword',$data);
	}

	public function reset_password_process()
	{
		$email = $this->input->post('semail');
		$pass = md5($this->input->post('newpassword'));
		$this->db->where('u_email',$email);
		$result = $this->db->update(TBL_USERS,array('u_password'=> $pass ));
		if($result)
		{
			$this->session->set_flashdata('msgup','Your Password is Changed');
			redirect(LOGIN_URL);
		}
		else {
			echo "Password is not changed";
		}
	}



}
