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
                                
                            <h2>Borrow Activities</h2>
                 <table class="table">
                  <tr>
                    
                      <th>Borrow ID</th>
                    <th>Book ID</th>
                    <th>Student ID</th>
                     
                    <th>Book Title</th>
                    <th>Return Date</th>  
                 </tr>
                 <?php foreach($aprroved_borrow as $approved): ?>
                     <tr>
                        
		
		          <td><?php echo $approved['borrow_id']; ?></td>
		          <td><?php echo $approved['book_id']?></td>
		          <td><?php echo $approved['stud_id']; ?></td>
                 <td><?php echo $approved['book_title']; ?></td>
                <td><?php echo $approved['return_date']; ?></td>
                   

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