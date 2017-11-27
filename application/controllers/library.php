<?php

// codes created by : Mubbarak Aminu 
// date : 14 November 2017 
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {


	public function index(){
		$data['title'] = "Defaul Home Page for the E-library Management";

		$this->load->view('home', $data);

	}



	public function home()
	{
		$data['title'] = "BUK Online E-library Page";

		$data['main_content'] = 'Library/lib_home';

		$data['book_list'] = $this->Library_model->book_list();



		//load the view 
		$this->load->view('Library/layout/library_main', $data);
	}


	// Student registration method
 public function Stud_register(){
		
			if(isset($_POST['stud_register'])){
				// valated User data for registration
				$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|min_length[3]');
				$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|min_length[3]');
				$this->form_validation->set_rules('email', 'Email Address', 'rquired|valid_email|trim');
				$this->form_validation->set_rules('reg_no', 'Registration Number', 'required|min_length[3]|trim');
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|max_length[50]');
				$this->form_validation->set_rules('password2', 'Confirm Password', 'required|matches[password]|trim');
		
				
				if($this->form_validation->run()== true){
					//collect all user input and send them to model fgor futher processing
					/*var_dump($data);
					die;*/
						

					$data['title']	= 'Student registrstion';
					$data['main_content']	= "Library/Stud_register";
					
					
					$this->load->view('Library/layout/library_main', $data);
								
					
					
					}else{

						$data = array(
					    'first_name'  => $this->input->post('first_name'),
					    'last_name'  => $this->input->post('last_name'),
					    'active'	 => 1,
						'email' => $this->input->post('email'),
						'reg_no' => $this->input->post('reg_no'),
						'password'  => md5($this->input->post('password')),
						'user_previllege' => 2
						  
							 );
						

						$insert = $this->Library_model->stud_register($data);

						if($insert){
							redirect('Library/index');

						}else{

					$data['title']	= 'Student registrstion';
					$data['main_content']	= "Library/Stud_register";
					
					
					$this->load->view('Library/layout/library_main', $data);
						}
						

									
						}
				
				
				
				}else{
					$data['title']	= 'Student registrstion';
					$data['main_content']	= "Library/Stud_register";
					
					
					$this->load->view('Library/layout/library_main', $data);
					
					
					
					
					}


		}
		


	public function book_detail(){

		$id = $this->uri->segment('3');

		
		$data['main_content'] = "Library/detail";

		$data['book'] = $this->Library_model->book_detail($id);

		/*echo var_dump($data['book']);
		die();*/

		$this->load->view('Library/layout/library_main', $data);
	}	




	public function lib_search(){

		if(isset($_POST['search_term'])){

			$this->form_validation->set_rules('search', 'Search', 'min_length[3]|required');



			//run the query
			if($this->form_validation->run()== false){


				$search_term = $this->input->post('search_term');


				$data['search_result'] = $this->Library_model->Search($search_term);

				
				$data['title'] = 'search result page';
				$data['main_content'] = 'Library/lib_result';

				$this->load->view('Library/layout/library_main', $data);


			}else{


			$data['title']  = "Search Term";
			$data['main_content'] = 'Library/lib_search';

			$this->load->view('Library/layout/library_main', $data);


			}

		}else{

			$data['title']  = "Search Term";
			$data['main_content'] = 'Library/lib_search';

			$this->load->view('Library/layout/library_main', $data);


		}

	}





	
	public function list_borrow(){
		if(!$this->session->userdata('Logged_in')){
			redirect('student/stud_login');
		}
		//pull the list of book
		$data['title'] = 'List of availble book to borrow';
		//list of book that  their borrow_active column is 0
		$data['book_list']	= $this->Library_model->book_list();

		$data['user_id'] = $this->session->userdata('stud_id');

		//set session data

					$this->session->set_flashdata('Failed', 'Sorry We Are Unable to Process Your Borrow Request');

		$data['main_content'] = 'Library/list_borrow';

		//load the view with  needed data
		$this->load->view('Library/layout/Library_main', $data);
	}



	public function proc_borrow(){

		if(isset($_POST['borrow'])){

			//collect all the data
			$stud_id = $this->input->post('stud_id');
			$book_id = $this->input->post('book_id');
			$book_title = $this->input->post('book_title');

			$format = 'DATE_RSS';
			$time = time();
			$borrow_date = '21-11-2017';
			$borrow_active = 0;
			$return_date =  '27-11-2017';

			
			$data = array(
				'book_id'	=> $book_id,
				'stud_id'	=> $stud_id,
				'borrow_active' => $borrow_active,
				'book_title'	=> $book_title,
				'borrow_date'		=> $borrow_date,
				'return_date'	=> $return_date
					);

			$borrow = $this->Library_model->proc_borrow($data);

			if($borrow){

				$data['title'] = 'Thank You Page';
				$data['main_content'] = 'Library/borrow_done';

				$this->load->view('Library/layout/library_main', $data);

			}else{


				redirect('Library/list_borrow');
					
				echo 'Unable to process borrow request';
			}


		}else{
			redirect('Library');
		}


	}
   


   public function faculty_book(){
   		$id = $this->uri->segment(3);

   		$data['title'] = 'Boks base on faculty';
   		$data['main_content'] = 'Library/faculty_book';

   		$data['faculty'] = $this->Library_model->faculty($id);

   		$data['faculty_book'] = $this->Library_model->faculty_book($id);

   		/*echo var_dump($data['faculty_book']);
   		die();*/

   		$this->load->view('Library/layout/library_main', $data);


   }

   public function message(){

   			$id = $this->uri->segment(3);

   			$data['title'] = 'fetch message and reply';
   			$data['main_content'] = 'Library/message_reply';

   			$data['messages'] = $this->Library_model->message($id);
   			$data['replies']    = $this->Library_model->reply($id);

   			$this->load->view('Library/layout/Library_main', $data);

   		}

   		


   



}
