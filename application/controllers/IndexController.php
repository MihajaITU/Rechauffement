<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {

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
	public function index(){
		$this->load->model('Dao');
		$this->load->model('fonction');
		$stat=$this->Dao->find('*','stat','');
		$cause=$this->Dao->find('*','type_cause','');
		
		$donnee=array();
		$annee=array();
		
		$nom_cause=array();
		$stat_cause=array();

		for($i=0;$i<count($cause);$i++){
			$nom_cause[]=$cause[$i]['designation'];
			$stat_cause[]=intval($cause[$i]['stat_cause']);
		}
		
		$colors=$this->fonction->getTabColors(count($cause));

		$dognhuts=array();
		for($i=0;$i<count($colors);$i++){
			$dognhuts[$i]['value']=$stat_cause[$i];
			$dognhuts[$i]['color']=$colors[$i];
		}

		$data['cause']=json_encode($dognhuts);
		$data['legendcause']=$dognhuts;
		$data['nom_cause']=$nom_cause;
	
		

		for($i=0;$i<count($stat);$i++){
			$donnee[]=$stat[$i]['donnee_stat'];
			$annee[]=$stat[$i]['annnee'];
		}
		$json['donnee']=$donnee;
		$json['annee']=$annee;
		$a=$this->fonction->randomColor();
		// $result=json_encode($result);

		
		$data['json']=json_encode($json);
		// var_dump($data);

		$this->load->view('index',$data);
	}
	public function about(){
		$this->load->view('about');
	}
	public function blog(){
		$this->load->view('blog');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function marketing(){
		$this->load->view('marketing');
	}
	public function admin(){
		$this->load->view('admin');
	}
}
