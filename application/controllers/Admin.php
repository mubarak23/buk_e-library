<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{

		if(!$this->session->userdata('Logged_in')){
				redirect('admin/admin_login');
			}
		$data['title'] = "BUK Online E-library Page";

		$data['book_list'] = $this->Admin_model->book_list();
		$data['book_borrow'] = $this->Admin_model->borrow_activity();
		$data['student_list']  = $this->Admin_model->users_list();

		$data['main_content'] = 'Admin/admin_home';

		//load the view 
		$this->load->view('Admin/layout/admin_main', $data);


	}


	// add Admin method
	public function add_admin(){
		if(isset($_POST['register'])){

			    $this->form_validation->set_rules('full_name', 'Full Name', 'required|trim|min_length[3]');
				$this->form_validation->set_rules('admin_email', 'Admin Email Address', 'rquired|valid_email|trim');
				$this->form_validation->set_rules('admin_username', ' Admin Username', 'required|min_length[3]|trim');
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|max_length[50]');
				$this->form_validation->set_rules('password1', 'Confirm Password', 'required|matches[password]|trim');
		
			if($this->form_validation->run() == true){

					

					$data['title']	= 'Student registrstion';
					$data['main_content']	= "Admin/add_admin";
					
					
					$this->load->view('admin/layout/admin_main', $data);
								
					
			}else{

				//collect data from the reg form snd set them into a variable
				$data = array(
					'admin_fullname'	=> $this->input->post('full_name'),
					'admin_email'		=> $this->input->post('admin_email'),
					'admin_username'	=> $this->input->post('admin_username'),
					'admin_pass'	    => md5($this->input->post('admin_password')),
					'admin_previllege' 	=> 1
						);
				
				//process the data in the db
				$register = $this->Admin_model->add_admin($data);

				if($register){
					redirect('admin');
				}else{

					$data['title']	= 'Student registrstion';
					$data['main_content']	= "Admin/add_admin";
					
					
					$this->load->view('admin/layout/admin_main', $data);

				}


			}

		}else{


			$data['title'] = 'Add Admin Page';

			$data['main_content']	= 'admin/add_admin';

			//loading the view page
			$this->load->view('admin/layout/admin_main', $data);
		}


	}






		public function admin_login(){

			if(isset($_POST['login'])){

				$this->form_validation->set_rules('admin_username', 'Admin Username', 'required|min_length[3]|trim');
				$this->form_validation->set_rules('admin_password', 'Admin Password', 'required|trim');

				if($this->form_validation->run() == True){

						$admin_username 	= $this->input->post('admin_username');
						$admin_password  	= md5($this->input->post('admin_password'));
						


						

						// checking admin details and prevelliged

						$admin_id = $this->Admin_model->admin_login($admin_username, $admin_password);




						if($admin_id){

							
							$data = array(

								'admin_id'			=> $admin_id,
								'Logged_in' 		=> true,
								'admin_username'	=> $admin_username
									);
							
							// setting the globsl session data		
					$this->session->set_userdata($data);
					
					//welcome message for every logged in user
					$this->session->set_flashdata('Success', 'You  are Logged in');

					$admin_id = $this->session->userdata('Logged_in');

					if($admin_id){

						redirect('admin');

						}else{
							redirect('student');
						}
					}else{

						
					
					//welcome message for every logged in user
					$this->session->set_flashdata('Failed', 'Wrong Username And Password');

				$data['title'] = "Welcome to Admin Login Page";


				$this->load->view('admin/admin_login', $data);

 
				}




			}else{

				$data['title'] = "Welcome to Admin Login Page";


				$this->load->view('admin/admin_login', $data);




			}

		}else{

				$data['title'] = "Welcome to Admin Login Page";


				$this->load->view('admin/admin_login', $data);




			}

		}	



		//logout method if the e-library admin 

	public function admin_logout(){
			// unsetting all user data
			$this->session->unset_userdata('$admin_id');
			$this->session->unset_userdata('$admin_username');
			$this->session->unset_userdata('logged_in');
			
			//set a success message for logout
			$this->session->flashdata('Success', 'Youe are Logout');
			redirect('library');
			
			
			}
			


	//add book method that stored book to the system
	public function add_book(){


			//loading the file uplad config setting
		$config['upload_path'] = APPPATH . 'upload';
		$config['allowed_types'] = 'jpeg|jpg|gif|png';
		$config['max_size'] = '1024';
		
		//loading the puload library
		$this->load->library('upload');
		$this->upload->initialize($config);


			if(isset($_POST['Add_book'])){

				$this->form_validation->set_rules('book_title', 'Book Title', 'rquired|min_length[5]|trim');
				$this->form_validation->set_rules('book_author', 'Book Author', 'required|min_length[5]|trim');
				$this->form_validation->set_rules('book_isbn', 'Book ISBN','required|trim');
				$this->form_validation->set_rules('book_summary', 'Book Summary', 'required|trim');
				$this->form_validation->set_rules('book_faculty', 'Book Faculty', 'required|trim');
				$this->form_validation->set_rules('book_type',  'Book Type', 'trim|required');
				$this->form_validation->set_rules('book_stored_date', 'Date Stored', 'required');


				if($this->form_validation->run() == false){

					$book_title = $this->input->post('book_title');
					$book_author = $this->input->post('book_author');
					$book_isbn = $this->input->post('book_isbn');
					$book_summary = $this->input->post('book_summary');

				    $book_faculty = $this->input->post('book_faculty');
					$book_type = $this->input->post('book_type');
					$book_stored_date	= $this->input->post('book_stored_date');




					if(! $this->upload->do_upload('book_img')){
						$data['error'] = $this->upload->display_errors();
						$data['main_content'] = 'admin/add_book';
						
						$this->load->view('admin/layout/admin_main', $data);
						
						}else{
							
				$upload = $this->input->post('book_img');			
				$data = array('upload_data' => $this->upload->data());

					echo $data;
					die();
				
							}

							$data = array(
									'book_title'	=> $book_title,
									'book_author'	=> $book_author,
									'book_isbn'		=> $book_isbn,
									'book_summary'	=> $book_summary,
									'faculty_id'	=> $book_faculty,
									'book_type'		=> $book_type,
									'book_img'		=> $this->upload->data('file_name'),
									'book_stored_date'	=>$book_stored_date
										);

							/*var_dump($data);
							die();*/

							$add_book = $this->Admin_model->add_book($data);
							
							if($add_book){
								redirect('admin');
							}else{
								redirect('Admin/add_book');
							}		



				}else{


					
				$data['title'] = "Add book to the library system";
				$data['main_content'] = 'admin/add_book';

				//loading the view page
				$this->load->view('admin/layout/admin_main', $data);

				}




			}else{

				$data['title'] = "Add book to the library system";
				$data['main_content'] = 'admin/add_book';

				//loading the view page
				$this->load->view('admin/layout/admin_main', $data);


			}
	}		



	//pull borrow activities and link to approval function
	public function list_borrow(){

		$data['title'] = 'List of all borrow book for approval bt admin';

		$data['list_borrow'] = $this->Admin_model->borrow_activities();

		$data['main_content'] = 'Admin/borrow_activities';

		$this->load->view('admin/layout/admin_main', $data);


	}



	public function approve_borrow(){

		$id = $this->uri->segment('3');

			/*echo $id;
			die();
*/
		$data['title'] = 'approve request';

		$data = array(
				'borrow_active'	=> '1'
				);

	$approve = $this->Admin_model->approve_borrow($id, $data);
	if($approve){
		
		redirect('Admin/approve_borrow');

	}else{

		redirect('Admin');		

	}	



}


	public function aprroved_borrow(){

			if(!$this->session->userdata('Logged_in')){

				redirect('admin/admin_login');
			}

		$data['title'] = 'approve borrow page';

		$data['main_content'] = 'admin/approve_borrow';

		$data['aprroved_borrow'] = $this->Admin_model->aprroved_borrow();

		//loading th view
		$this->load->view('admin/layout/admin_main', $data);
 	}


 	public function list_return(){

			if(!$this->session->userdata('Logged_in')){

				redirect('admin/admin_login');
			}

		$data['title'] = 'List of all return  book for approval bt admin';

		$data['list_return'] = $this->Admin_model->return_activities();

		$data['main_content'] = 'Admin/return_activities';

		$this->load->view('admin/layout/admin_main', $data);



 	}







 	public function approve_return(){

		$id = $this->uri->segment('3');

			/*echo $id;
			die();
*/
		$data['title'] = 'approve request';

		$data = array(
				'return_active'	=> '1'
				);

	$approve = $this->Admin_model->approve_return($id, $data);
	if($approve){
		
		redirect('Admin/approve_return');

	}else{

		redirect('Admin');		

	}	



}



		public function approved_return(){

			if(!$this->session->userdata('Logged_in')){

				redirect('admin/admin_login');
			}

		$data['title'] = 'approve borrow page';

		$data['main_content'] = 'admin/approve_return';

		$data['aprroved_return'] = $this->Admin_model->aprroved_return();

		//loading th view
		$this->load->view('admin/layout/admin_main', $data);
 	}

	 	
		

   
   		public function active_users(){

   			$data['title'] = 'All Users in the platform';

   			$data['all_active_users'] = $this->Admin_model->active_users();

   			$data['main_content'] = 'admin/active_users';

   			$this->load->view('admin/layout/admin_main', $data);

   		}


   		public function message(){

   			$data['title'] = 'view all message send to admin';

   			$data['main_content'] = 'admin/all_message';

   			$data['all_message'] = $this->Admin_model->all_message();

   			$this->load->view('admin/layout/admin_main', $data); 

   		}

   		public function reply_message(){


   				if(isset($_POST['reply'])){

   					$this->form_validation->set_rules('stud_id', 'student ID', 'required|trim');
   					$this->form_validation->set_rules('message_id', 'message ID', 'required|trim');
   					$this->form_validation->set_rules('reply', 'reply', 'required|trim|min_length[5]');

   						if($this->form_validation->run() == true){
   							/*echo 'GOOD HERE';
   							die()*/;


   							$stud_id = $this->input->post('stud_id');
   							$message_id = $this->input->post('message_id');
							$reply      = $this->input->post('reply');

   							

   							$data = array(

   									'stud_id'		=> $stud_id,
   									'message_id'	=> $message_id,
   									'reply'			=> $reply
   								);

   							$reply = $this->Admin_model->reply($data);

   								if($reply){

   									redirect('admin');
   								}else{

   									redirect('admin/message');
   								}


   						}else{

   							redirect('admin/message');



   						}


   				}else{

   					$id = $this->uri->segment(3);

   					$data['title'] = 'this is the reply box area';

   					$data['main_content'] = 'admin/message_reply';

   					$data['message']= $this->Admin_model->message_one($id);

   					$this->load->view('admin/layout/admin_main', $data);
   					

   				}


   		}


   		public function upload(){

   				if(isset($_POST['upload'])){


				   						//loading the file uplad config setting
						$config['upload_path'] = APPPATH . 'upload';
						$config['allowed_types'] = 'jpeg|jpg|gif|png';
						$config['max_size'] = '1024';
						
						//loading the puload library
						$this->load->library('upload');
						$this->upload->initialize($config);



					if( $this->upload->do_upload('book_cover')){
						$data['error'] = $this->upload->display_errors();
						//$data['main_content'] = 'admin/add_book';

						echo "GOOD HERE";
						die(); 
						
						//$this->load->view('admin/layout/admin_main', $data);
						
						}else{
							
				$upload = $this->input->post('book_cover');			
				$data = array('upload_data' => $this->upload->data());

					echo $data;
					die();
				
							}




   				}else{


   					$data['title'] = 'try book cover upload';
   					$data['book_list'] = $this->Admin_model->all_book_list();
   					$data['main_content'] = 'admin/book_upload';

   					$this->load->view('admin/layout/admin_main', $data);


   				}
   			}


   	public function all_book(){

   		$data['title'] = 'aLL Book in the library';
   		$data['all_books'] = $this->Admin_model->all_book_list();

   		$data['main_content'] = 'admin/all_book';


   		$this->load->view('admin/layout/admin_main', $data); 


   	   	}	


   	 public function admin_report(){

   	 	$data['title'] = 'view Summary of activities in the forum';

   	 	//$data['admin_report']	= $this->Admin_model->admin_report();


		$data['num_book']  = $this->Admin_model->record_book();
		$data['num_stud'] = $this->Admin_model->record_studs();
		$data['num_borrow']  = $this->Admin_model->record_borrow();
		$data['num_return']  = $this->Admin_model->record_return();



   	 	$data['main_content'] 	= 'admin/admin_report';

   	 	$this->load->view('admin/layout/admin_main', $data);

   	 }  		


   		





}