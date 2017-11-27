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
                     
                 </tr>
                 
                 <?php if($message) :?>
                     <tr>
        
                  <td><?php echo $message->message_id; ?></td>
                  <td><?php echo $message->stud_id; ?></td>
                 <td><?php echo $message->subject; ?></td>
                 <td><?php echo $message->message; ?></td>   
        </tr>

             </table>
                
                            </section>

                            <section>
                                <h2>Reply This Message</h2>
                                <form method="post" action="<?php echo base_url(); ?>Admin/reply_message" class="form-group" >
                                    
                                    <input type="hidden" name="stud_id" value="<?php echo $message->stud_id;  ?>">

                                    <input type="hidden" name="message_id" value="<?php echo $message->message_id;  ?> ">
                                    <textarea name="reply" class="form-control" ></textarea>
                                    <br>

                                  <button type="submit"  name="send" class="btn btn-primary">Send Reply</button>

                                </form>
                            </section>            
                            
                <?php endif; ?>                            
                            
                        </div>
                                   
                    </div>
       
                </div>
                 

      
                    
                   
                </div>
            
         </div>
        </div>