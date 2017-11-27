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
                            <h2>Active Student</h2>
                 <table class="table">
                  <tr>
                    
                      <th>Student Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                     
                    <th>E-mail</th>
                    <th>Reg Number</th>  
                 </tr>
                 
                 <?php foreach($all_active_users as $student) :?>
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