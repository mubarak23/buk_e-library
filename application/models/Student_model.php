<?php
// codes created by : Mubbarak Aminu 
// date : 16  November 2017

 Class Student_model extends CI_model{

 	
 	public function login($stud_regno, $stud_password){
 			$this->db->select('*');
 			$this->db->from('students');
 			$this->db->where('reg_no', $stud_regno );
 			$this->db->where('password', $stud_password);
 			$this->db->limit('1');


 			$query = $this->db->get();
				
				if($query->num_rows() == 1){
					return $query->row()->stud_id;
					}else{
						return false;
						}


 	}



 		 public function booK_list(){
		 	$this->db->select('*', 'faculty');
			$this->db->from('books');
			$this->db->join('faculty', 'books.faculty_id = faculty.faculty_id');
			$this->db->order_by('booK_title', 'ASC');
			
			$query = $this->db->get();
			
			return $query->result_array();
			
		 }


		 public function profile($stud_regno){
		 	$this->db->select('*');
		 	$this->db->from('students');
		 	$this->db->where('reg_no', $stud_regno);

		 	$query = $this->db->get();
			
			return $query->row();



		 }


		 public function borrow_profile($id){
		 	$this->db->select('*');
		 	$this->db->from('students');
		 	$this->db->where('stud_id', $id);

		 	$query = $this->db->get();
			
			return $query->row();



		 }






		 public function stud_borrow($id){

		 	$this->db->select('*');
		 	$this->db->from('borrow_book');
		 	$this->db->where('stud_id', $id);
		 	$this->db->where('borrow_active', '1');

		 	$query = $this->db->get();

		 	return $query->result_array();
		 }



		 public function message($data){

		 		$insert = $this->db->insert('admin_message', $data);

		 		if($insert){
					return true;
				}else{
					return false;
				}
		 }



 	






 }