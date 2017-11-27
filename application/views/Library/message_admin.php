     <div class="col-md-8">
                <div class="row">
                
                    
                  
                    
                    <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">Message</h3>
                  </div>
                        <div class="panel-body">
                            <div class="row">
                                <form method="post" action="<?php echo base_url(); ?>student/send_message" class="form-group">
                                  <label>Subject:</label><br>
                                  <input type="text" name="subject" class="form-control" placeholder="Enter the subject here"><br>
                                  <input type="hidden" name="stud_id" value="<?php echo $this->session->userdata['stud_id']?>">
                                  <label>Message:</label><br>
                                  <textarea class="form-control" name='message'></textarea>
                                  <br>
                                  <input type="submit" name="send" value="Send Message" class="btn btn-primary">

                                </form>
                     
              </div>
                </div>
                                   
        </div>
                    
                </div>
                 

      
                    
                   
                </div>
            