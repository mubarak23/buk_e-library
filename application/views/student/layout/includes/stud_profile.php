    <div class="container">
        <div class="row">
            
                <!-- Student Profile-->
      <div class="col-md-2">
        <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">Student Profile and Activities</h3>
                  </div>
                  <div class="panel-body">
                      <div class="row">
                        <?php if($profile): ?>
                          <div class="center">
                            
                        <label>Full Name</label>:
                          <p><?php echo $profile->first_name; ?></p>
                          <label>Registration Number:</label>
                          <p><?php echo $this->session->userdata('stud_regno'); ?></p>
                          
                          </div>
                          <div class="activities">
                          <label>E-books Downloaded</label>
                              <p>12</p>
                        <label>Book Borrowed</label>:
                              <p>Data Structure</p>
                              <label>Return Date</label>:
                              <p>13 January, 2018</p>
                          </div>
                          <div class="game-add">
                           <a href="<?php echo base_url(); ?>student/stud_logout"><button class="btn btn-primary" type="submit">Logout</button></a> 
                        </div>
                          
                          <?php endif; ?>
                          
                    </div>
            </div>
          </div>
          
      </div>