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
                    <th>Borrow Date</th>
                    <th>Approve Borrow</th>  
                 </tr>
                 <?php foreach($list_borrow as $borrow):?>
                     <tr>
                        
		
		          <td><?php echo $borrow['borrow_id']; ?></td>
		          <td><?php echo $borrow['book_id']?></td>
		          <td><?php echo $borrow['stud_id']; ?></td>
                 <td><?php echo $borrow['book_title']; ?></td>
                <td><?php echo $borrow['borrow_date']; ?></td>
                <td><a href="<?php echo base_url(); ?>admin/approve_borrow/<?php echo $borrow['borrow_id']; ?>"><button class="btn btn-primary">Approve Borrow</button></a></td>   

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