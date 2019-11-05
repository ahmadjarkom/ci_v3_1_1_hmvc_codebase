<?php  

/**
 * 
 */
class Login extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if (!$this->session->userdata('user_detail'))
		{
			$this->load->view('V_login');
		}
		else
		{
			redirect('/dashboard','refresh');
		}
	}

	function login_submit()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run())
		{
			$result = json_decode(api::login($this->input->post()));
			// $result = (object)array('rc'=>"00",'user_id' => "1", 'leveluser' => "master");
			// echo "<pre>";
			// print_r($result);
			// echo "</pre>";

			if ($result->rc == "00")
			{
				$this->session->set_userdata('user_detail', $result);
				
				redirect('/dashboard','refresh');
			}
			else
			{
				$this->session->set_flashdata("wrong",$result->desc);
				redirect('/login');
			}  
		}
	}

	function logout()
	{
		$this->session->unset_userdata('user_detail');
		redirect('/login');
	}
}

?>