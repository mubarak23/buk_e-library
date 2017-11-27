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
                            <h2>All Message</h2>
                 <table class="table">
                  <tr>
                    
                      <th>Message Id</th>
                    <th>Student ID</th>
                    <th>Subject</th>
                     
                    <th>Message</th>
                    <th>Send Reply</th>
                     
                 </tr>
                 
                 <?php foreach($all_message as $message) :?>
                     <tr>
		
		          <td><?php echo $message['message_id']; ?></td>
		          <td><?php echo $message['stud_id']; ?></td>
                 <td><?php echo $message['subject']; ?></td>
                 <td><?php echo $message['message']; ?></td>  
                 <td><a href="<?php echo base_url(); ?>Admin/reply_message/<?php echo $message['message_id']?>"><button class="btn btn btn-primary">Send Reply</button></a></td>   
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