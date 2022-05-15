<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

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
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->load->model('Dao');
		$response=$this->Dao->login($username,$password);
	
		if($response==true){
			$this->load->model('Dao');
			$stat=$this->Dao->find("*","stat","");
			$columns = array_keys($stat[0]);
			$data["columns"]=$columns;
			$data["stat"]=$stat;
			$sessionId=$this->session->token=sha1(strval(rand(0,10)).$password);
			$data['sessionID']=$sessionId;
			$this->load->view('backoffice',$data);
		}
		if($response==false){
			redirect(base_url('AdminController'));
		}
		
        // var_dump($response);
	}
	public function cause(){
		if(!defined($this->session->token)){
			redirect(base_url('AdminController'));
		}
		$this->load->model('Dao');
			$stat=$this->Dao->find("*","type_cause","");
			$columns = array_keys($stat[0]);
			$data["columns"]=$columns;
			$data["type_cause"]=$stat;
			$this->load->view('bcause',$data);
	}
	public function signup(){
		$this->load->model('Dao');
		$username=$this->input->post('username');
		$email=$this->input->post('email');
		$password=sha1($this->input->post('password'));
		$password2=$this->input->post('password2');

		if($password != $password2){
			redirect(base_url());
		}

		$values = "0,'$email','$username','$password',0";
		$this->Dao->insert("utilisateur",$values);
		
	}

}

