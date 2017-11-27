<?php
// codes created by : Mubbarak Aminu 
// date : 12 Augest 2017

 Class Library_model extends CI_model{

 	public function stud_register($data){

 		$insert = $this->db->insert('students', $data);

 		if($insert){
 			return true;
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


		 public function book_detail($id){

		 		$this->db->select('*', 'faculty');
		 		$this->db->from('books');
		 		$this->db->join('faculty', 'books.faculty_id = faculty.faculty_id');
		 		$this->db->where('book_id', $id);

		 	
		 	$query = $this->db->get();
			 return $query->row();

		 }




		 public function search($search_term){
		 	$this->db->select('*');
		 	$this->db->from('books');
		 	//$this->db->like('book_summary', $search_term);
		 	$this->db->like('book_title', $search_term);


		 	$query = $this->db->get();
			 return $query->result_array();


		 }




		 public function proc_borrow($data){

 		$borrow = $this->db->insert('borrow_book', $data);

 		if($borrow){
 			return true;
 		}else{

 			return false;
 		}
 	}



 	 public function proc_return($data){

 		$borrow = $this->db->insert('return_book', $data);

 		if($borrow){
 			return true;
 		}else{

 			return false;
 		}
 	}


 	public function faculty_book($id){

 		$this->db->select('*');
 		$this->db->from('books');
 		$this->db->where('faculty_id', $id);

 		$query = $this->db->get();
 		return $query->result_array();


 	}


 	public function faculty($id){

 		$this->db->select('*');
 		$this->db->from('faculty');
 		$this->db->where('faculty_id', $id);

 		$query = $this->db->get();

 		return $query->row();

 	}


 	public function message($id){

 		$this->db->select('*');
 		$this->db->from('admin_message');
 		$this->db->where('stud_id', $id);

 		$query = $this->db->get();

 		return $query->row();
 	}


 	 	public function reply($id){

 		$this->db->select('*');
 		$this->db->from('admin_reply');
 		$this->db->where('stud_id', $id);

 		$query = $this->db->get();

 		return $query->row();
	 	}




 }