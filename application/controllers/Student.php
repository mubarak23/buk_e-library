<?php

// codes created by : Mubbarak Aminu 
// date : 14 November 2017

defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {


  // default index page for the student controller
	public function index()
	{

			//check if user is login else show login page ti this restricted area
			if(!$this->session->userdata('Logged_in')){
				redirect('Student/stud_login');
			}
		$data['title'] = "BUK Online E-library Page";
		$data['book_list']	= $this->Student_model->book_list();
		$data['main_content'] = 'student/student';

		$this->load->view('student/layout/main', $data);
	}


   
  //astudent login page

		public function stud_login(){

			if(isset($_POST['login'])){

				$this->form_validation->set_rules('stud_regno', 'Student Registration Number', 'required|min_length[3]|trim');
				$this->form_validation->set_rules('stud_password', 'Student Password', 'required|trim');

				if($this->form_validation->run() == True){

						$stud_regno	= $this->input->post('stud_regno');
						$hash_password  	= md5($this->input->post('stud_password'));
			
						$stud_password = $hash_password;
						// checking admin details and prevelliged

						$stud_id = $this->Student_model->login($stud_regno, $stud_password);




						if($stud_id){

							
							$data = array(

								'stud_id'			=> $stud_id,
								'Logged_in' 		=> true,
								'stud_regno'	=> $stud_regno
									);
							/*echo var_dump($data);
							die();*/

							$data['profile'] = $this->Student_model->profile($stud_regno);

							// echo var_dump($data['profile']);
							// die();
							
							// setting the globsl session data		
					$this->session->set_userdata($data);
					
					//welcome message for every logged in user
					$this->session->set_flashdata('Logged_in', 'You  are Logged in');

					$stud_id = $this->session->userdata('stud_id');

					if($stud_id){
						// a success message of login
						$this->session->set_flashdata('Success', 'You are logged in');

							$data['book_list']	= $this->Student_model->book_list();

							$data['profile'] = $this->Student_model->profile($stud_regno);

							/*echo var_dump($data['profile']);
							die();*/

							$data['main_content'] = 'Student/Student';

							$this->load->view('Student/layout/student_main', $data);			
						//redirect('student');

						}else{
							redirect('library');
						}
					}else{


				// a success message of login
				$this->session->set_flashdata('Failed', 'Wrong Username And Password');		
						
				$data['title'] = "Welcome to Admin Login Page";


				$this->load->view('Student/stud_login', $data);
					}
 
				}else{
					



				$data['title'] = "Welcome to Admin Login Page";


				$this->load->view('Student/stud_login', $data);

				}




			}else{

				$data['title'] = "Welcome to Admin Login Page";


				$this->load->view('Student/stud_login', $data);




			}

		}




		//logout method for student

	public function stud_logout(){
			// unsetting all user data
			$this->session->unset_userdata('$stud_id');
			$this->session->unset_userdata('$stud_regno');
			$this->session->unset_userdata('logged_in');
			
			//set a success message for logout
			$this->session->flashdata('Success', 'Youe are Logout');
			redirect('library');
			
			
			}



	public function list_borrow(){
		if(!$this->session->userdata('Logged_in')){
			redirect('student/stud_login');
		}
		//pull the list of book
		$data['title'] = 'List of availble book to borrow';
		//list of book that  their borrow_active column is 0
		$data['book_list']	= $this->Student_model->book_list();


		$data['main_content'] = 'Student/list_borrow';

		//load the view with  needed data
		$this->load->view('Student/layout/Student_main', $data);
	}
   		


	public function stud_borrow(){

		$id = $this->uri->segment('3');


		$data['profile'] = $this->Student_model->borrow_profile($id);

		$data['stud_borrow']	= $this->Student_model->stud_borrow($id);


		$data['main_content'] = 'Student/stud_borrow';

		//load the view with  needed data
		$this->load->view('Student/layout/Student_main', $data);



	}





	public function proc_return(){

		if(isset($_POST['borrow'])){

			//collect all the data
			$book_id = $this->input->post('book_id');
			$book_returndate = $this->input->post('return_date');
			$stud_id = $this->input->post('stud_id');
			$book_title = $this->input->post('book_title');

			$return_active = '0';

			

			
			$data = array(
				'book_id'	=> $book_id,
				'stud_id'	=> $stud_id,
				'book_title'	=> $book_title,
				'return_date'	=> $book_returndate,
				'return_active' => $return_active
					);

			$borrow = $this->Library_model->proc_return($data);

			if($borrow){

				$data['title'] = 'Thank You Page';
				$data['main_content'] = 'Library/return_done';

				$this->load->view('Library/layout/library_main', $data);

			}else{


				redirect('Library/list_borrow');
					
				echo 'Unable to process borrow request';
			}


		}else{
			redirect('Library');
		}


	}
/*
	public function stud_return(){

			$id = $this->uri->segment('3');

			$data['book_list']	= $this->Student_model->book_list();

			$data['profile'] = $this->Student_model->borrow_profile($id);

			$data['stud_return'] = $this->Student_model->stud_return($id);

			$data['main_content'] = 'Student/stud_return';

			$this->load->view('Student/layout/student_main', $data);

			

	}*/



	public function send_message(){


			if(isset($_POST['send'])){


				$this->form_validation->set_rules('subject', 'Subject', 'required|trim');
				$this->form_validation->set_rules('message', 'Message', 'required|trim|min_length[5]');

					if($this->form_validation->run() == true){
						
						$data = array(
								'stud_id'	=> $this->input->post('stud_id'),
								'subject'	=> $this->input->post('subject'),
								'message'	=> $this->input->post('message')

								);

							$message = $this->Student_model->message($data);

							if($message){

								$data['title'] = 'Thank you message page';

								$data['main_content']	= 'Library/thank';

								$this->load->view('Library/layout/library_main', $data);
								

							}else{


						$data['title'] = 'send a message to admin';

						$data['main_content'] = 'library/message_admin';

						$this->load->view('Library/layout/library_main', $data);


							}

					}else{

						$data['title'] = 'send a message to admin';

						$data['main_content'] = 'library/message_admin';

						$this->load->view('Library/layout/library_main', $data);


					}




			}else{



					
		$data['title'] = 'send a message to admin';

		$data['main_content'] = 'library/message_admin';

		$this->load->view('Library/layout/library_main', $data);
	}



		

	}

































	


}
