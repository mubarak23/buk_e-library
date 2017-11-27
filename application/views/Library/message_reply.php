   <div class="col-md-8">
                <div class="row">
                    
                  <section>
                    
                             <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">Message</h3>
                  </div>
                        <div class="panel-body">
                            <div class="row">
                              <?php if($messages): ?>

                               <label>Message ID</label>: <?php echo $messages->message_id;  ?><br>
                               <label>Subject</label>:<?php echo $messages->subject; ?> <br>

                               <label>Message Details</label>: <?php echo $messages->message; ?><br>

                             <?php endif; ?>  
                     
              </div>
                </div>
                                   
        </div>

                  </section>

                  <section>
                    
                         <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">Reply</h3>
                  </div>
                        <div class="panel-body">
                            <div class="row">
                              <?php if($replies) :?>
                           <label>Reply ID</label> :<?php echo $replies->reply_id; ?><br>
                           <label>Message ID</label> :<?php echo $replies->message_id; ?>
                           <label>Relpy Details</label> ; <?php echo $replies->reply; ?><br>
                          <?php endif; ?>
              </div>
                </div>
                                   
        </div>

                  </section>
                 
                    
                </div>
                 

      
                    
                   
                </div>
            