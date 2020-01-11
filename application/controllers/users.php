<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Users extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Users_model');
	}
 
	public function index(){
		$this->load->view('header');
		$data['users'] = $this->Users_model->getAllUsers();
		$this->load->view('user_list', $data);
	}
 
	public function addnew(){
		$this->load->view('header');
		$this->load->view('addform');
		$this->load->view('footer');
	}
 
	public function insert(){
		$user['name'] = $this->input->post('name');
		$user['contact_number'] = $this->input->post('contact_number');
		$user['email'] = $this->input->post('email');
		$user['address'] = $this->input->post('address');
 
		$query = $this->Users_model->insertuser($user);
 
		if($query){
			header('location:'.base_url().$this->index());
		}
 
	}
 
	public function edit($ID){
		$data['user'] = $this->Users_model->getUser($ID);
		$this->load->view('header');
		$this->load->view('editform', $data);
		$this->load->view('footer');
	}
 
	public function update($ID){
		$user['name'] = $this->input->post('name');
		$user['contact_number'] = $this->input->post('contact_number');
		$user['email'] = $this->input->post('email');
		$user['address'] = $this->input->post('address');
 
		$query = $this->Users_model->updateuser($user, $ID);
 
		if($query){
			header('location:'.base_url().$this->index());
		}
	}
 
	public function delete($ID){
		$query = $this->Users_model->deleteuser($ID);
 
		if($query){
			header('location:'.base_url().$this->index());
		}
	}
}
 
 
?>