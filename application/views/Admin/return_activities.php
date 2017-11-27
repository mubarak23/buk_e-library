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
                                
                            <h2>Return Activities</h2>
                 <table class="table">
                  <tr>
                    
                      <th>Return ID</th>
                    <th>Book ID</th>
                    <th>Student ID</th>
                     
                    <th>Book Title</th>
                    <th>Borrow Date</th>
                    <th>Approve Borrow</th>  
                 </tr>
                 <?php foreach($list_return as $return):?>
                     <tr>
                        
		
		          <td><?php echo $return['return_id']; ?></td>
		          <td><?php echo $return['book_id']?></td>
		          <td><?php echo $return['stud_id']; ?></td>
                 <td><?php echo $return['book_title']; ?></td>
                <td><?php echo $return['return_date']; ?></td>
                <td><a href="<?php echo base_url(); ?>admin/approve_return/<?php echo $return['return_id']; ?>"><button class="btn btn-primary">Approve return</button></a></td>   

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