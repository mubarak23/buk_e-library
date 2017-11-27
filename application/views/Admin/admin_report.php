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
                            <h2>Admin Report </h2>
                 <table class="table">
                  <tr>
                    
                      <th>Total Book</th>
                    <th>Total Number of Borrowed Book</th>
                    <th>Toatal Number of Returned Book </th>
                     
                    <th>Total Number of Students</th>
                     
                 </tr>
                 
                     <tr>
		
		          <td><?php echo $num_book; ?></td>
		          <td><?php echo $num_borrow; ?></td>
                 <td><?php echo $num_return; ?></td>
                 <td><?php echo $num_stud; ?></td>
                 <td></td>        
		</tr>

             </table>
                
                            </section>            
                            
                            
                            
                        </div>
                                   
                    </div>
       
                </div>
                 

      
                    
                   
                </div>
            
         </div>
        </div>