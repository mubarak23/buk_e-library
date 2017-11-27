<?php
// codes created by : Mubbarak Aminu 
// date : 12 Augest 2017

 Class Admin_model extends CI_model{

 	public function add_admin($data){

 		$insert = $this->db->insert('admin', $data);

 		if($insert){
 			return true;
 		}else{

 			return false;
 		}
 	}




    
	 public function admin_login($admin_username, $admin_password){
				$this->db->select('*');
				$this->db->from('admin');
				$this->db->where('admin_username', $admin_username);
				$this->db->where('admin_pass', $admin_password);
				$this->db->limit('1');
				
				$query = $this->db->get();
				
				if($query->num_rows() == 1){
					return $query->row()->admin_id;
					}else{
						return false;
						}
				
				}


		//method that stored the book details in the db
		public function add_book($data){

				$insert = $this->db->insert('books', $data);

				if($insert){
					return true;
				}else{
					return false;
				}
		}		
				

		Public function borrow_activities(){
			$this->db->select('*');
			$this->db->from('borrow_book');
			$this->db->where('borrow_active', '0');


		 	$query = $this->db->get();
			 return $query->result_array();

		}		

		//admin borrow request
		 public function approve_borrow($id, $data){
		 $this->db->where('borrow_id',  $id);
		 $this->db->update('borrow_book', $data);


		 
		 }


		  public function booK_list(){
		 	$this->db->select('*', 'faculty');
			$this->db->from('books');
			$this->db->join('faculty', 'books.faculty_id = faculty.faculty_id');
			$this->db->order_by('booK_title', 'ASC');
			$this->db->limit('5');
			
			$query = $this->db->get();
			
			return $query->result_array();
			
		 }

		
		Public function borrow_activity(){
			$this->db->select('*');
			$this->db->from('borrow_book');
			$this->db->where('borrow_active', '1');
			$this->db->limit('5');


		 	$query = $this->db->get();
			 return $query->result_array();

		}	


		public function users_list(){

			$this->db->select('*');
			$this->db->from('students');
			$this->db->limit(5);


		 	$query = $this->db->get();
			 return $query->result_array();
		}	


		public function active_users(){

			$this->db->select('*');
			$this->db->from('students');


		 	$query = $this->db->get();
			 return $query->result_array();


		}


		public function aprroved_borrow(){

			$this->db->select('*');
			$this->db->from('borrow_book');
			$this->db->where('borrow_active', '1');


		 	$query = $this->db->get();
			 return $query->result_array();
		}


			Public function return_activities(){
			$this->db->select('*');
			$this->db->from('return_book');
			$this->db->where('return_active', '0');


		 	$query = $this->db->get();
			 return $query->result_array();

		}		


		 public function approve_return($id, $data){
		 $this->db->where('return_id',  $id);
		 $this->db->update('return_book', $data);



		 
		 }


		 public function aprroved_return(){

			$this->db->select('*');
			$this->db->from('return_book');
			$this->db->where('return_active', '1');


		 	$query = $this->db->get();
			 return $query->result_array();
		}



		public function all_message(){

			$this->db->select('*');
			$this->db->from('admin_message');

			$query = $this->db->get();

			return $query->result_array();

		}
	

	public function message_one($id){

		$this->db->select('*');
		$this->db->from('admin_message');
		$this->db->where('message_id', $id);

		$query = $this->db->get();

		return $query->row();

	}

	public function reply($data){

			$insert = $this->db->insert('admin_reply', $data);

				if($insert){
					return true;
				}else{
					return false;
				}
	}


		  public function all_booK_list(){
		 	$this->db->select('*', 'faculty');
			$this->db->from('books');
			$this->db->join('faculty', 'books.faculty_id = faculty.faculty_id');
			$this->db->order_by('booK_title', 'ASC');
			
			
			$query = $this->db->get();
			
			return $query->result_array();
			
		 }



	public function record_studs(){
		return $this->db->count_all('students');
		}	
			 
	public function record_book(){
		return $this->db->count_all('books');
		}
			
	public function record_borrow(){
		return $this->db->count_all('borrow_book');
		}	

	public function record_return(){
		return $this->db->count_all('return_book');
		}			 



 }