    <div class="col-md-8">
                <div class="row">
                
                             <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">Admin Only Area </h3>
                        <?php if($this->session->flashdata('Success')): ?>
                       <?php echo '<div class="alert alert-success">' .$this->session->flashdata('Success'). '</div>'?>
                        <?php endif; ?>
                        </div>
                        <div class="panel-body">
                           
                             <section>
                            <h2>Book Activities</h2>
                 <table class="table">
                  <tr>
                    
                      <th>Book Id</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Stored Date</th>  
                 </tr>
                 
                        <?php foreach($book_list as $book) :?>
                     <tr>
		
		          <td><?php echo $book['book_id']?></td>
		          <td><?php echo $book['book_title']; ?></td>
		          <td> <?php echo $book['book_author']; ?> </td>
                <td><?php echo $book['book_stored_date']; ?></td>         
            
		</tr>
        <?php endforeach; ?>
             </table>
                
                            </section>
                            
                            
                         <section>
                            <h2>Borrowed Approved</h2>
                 <table class="table">
                  <tr>
                    
                      <th>Borrow ID</th>
                    <th>Student ID</th>
                    <th>Book Title</th>
                    <th>Borrow Date</th>
                     
                    <th>Return Date</th>  
                 </tr>
                 <?php foreach($book_borrow as $borrow) : ?>
                 
                     <tr>
		
		          <td><?php echo $borrow['borrow_id']; ?></td>
		          <td><?php echo $borrow['stud_id']; ?></td>
		          <td><?php echo $borrow['book_title']; ?></td>
                <td><?php echo $borrow['borrow_date']; ?></td>
                <td><?php echo $borrow['return_date']; ?></td>         
		</tr>

            <?php endforeach; ?>

             </table>
                
                            </section>
                        
                   
                         <section>
                            <h2>Active Student</h2>
                 <table class="table">
                  <tr>
                    
                      <th>Student Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                     
                    <th>E-mail</th>
                    <th>Reg Number</th>  
                 </tr>
                 
                 <?php foreach($student_list as $student) :?>
                     <tr>
		
		          <td><?php echo $student['stud_id']; ?></td>
		          <td><?php echo $student['first_name']; ?></td>
                 <td><?php echo $student['last_name']; ?></td>
                 <td><?php echo $student['email']; ?></td>
                 <td><?php echo $student['Reg_no']; ?></td>        
		</tr>

    <?php endforeach; ?>
             </table>
                
                            </section>            
                            
                            
                            
                        </div>
                                   
                    </div>
       
                </div>
                 

      
                    
                   
                </div>
            
         </div>
        </div>