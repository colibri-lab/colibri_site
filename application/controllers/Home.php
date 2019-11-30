<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(FCPATH.'vendor/autoload.php');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Home_model');


		$data['values'] = [
		    'home_texts'  =>  $this->config->item('home_texts'),
		    'about'       =>  $this->config->item('about'),
				'services'    =>  $this->config->item('services'),
				'projects'    =>  $this->config->item('projects'),
				'teamMembers' =>  $this->config->item('team_members'),
		];
		$this->load->view('index', $data);
	}

	public function send_mail(){
		$mTo = "info@colibrilab.net";
		$mUser = $this->input->post("mail");
		$mSubject = $this->input->post("subject");
		$mName = $this->input->post("name");
		$mContent = $this->input->post("message");

		$mFrom = "shahe.shahinyan@gmail.com";
		$apiKey = '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';

		$email = new \SendGrid\Mail\Mail();
		$email->setFrom($mFrom);
		$email->setSubject($mSubject);
		$email->addTo($mTo);
		$email->addContent("text/plain", "From: <$mUser>"."\n\r".$mContent);
		$sendgrid = new \SendGrid($apiKey);
		try {
		    $response = $sendgrid->send($email);
		} catch (Exception $e) {
		    echo 'Caught exception: '. $e->getMessage() ."\n";
		}
	}
}
