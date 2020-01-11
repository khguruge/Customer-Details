<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function getAllUsers(){
			$query = $this->db->get('customers');
			return $query->result(); 
		}
 
		public function insertuser($user){
			return $this->db->insert('customers', $user);
		}
 
		public function getUser($ID){
			$query = $this->db->get_where('customers',array('ID'=>$ID));
			return $query->row_array();
		}
 
		public function updateuser($user, $ID){
			$this->db->where('customers.ID', $ID);
			return $this->db->update('customers', $user);
		}
 
		public function deleteuser($ID){
			$this->db->where('customers.ID', $ID);
			return $this->db->delete('customers');
		}
 
	}
?>
