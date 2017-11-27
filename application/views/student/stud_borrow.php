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
                          <p><?php echo $profile->first_name?> <?php echo $profile->last_name; ?></p>
                          <label>Registration Number:</label>
                          <p><?php echo $this->session->userdata('stud_regno'); ?></p>
                          
                          </div>
                          <div class="activities">
                            
                            <a href="<?php echo base_url(); ?>student/stud_borrow/<?php echo $profile->stud_id; ?>"><button class='btn btn-primary' >Borrowed Books</button></a><br><br>
                          </div>
                          
                          <div class="game-add">
                           <a href="<?php echo base_url(); ?>student/stud_logout"><button class="btn btn-primary" type="submit">Logout</button></a> 
                        </div>
                          
                        <?php endif; ?>  
                          
                    </div>
            </div>
          </div>
          
      </div>



    <div class="col-md-8">
                     <?php if($this->session->flashdata('Success')): ?>
                        <?php echo '<div class="alert alert-success">' .$this->session->flashdata('Success'). '</div>'?>
                    <?php endif; ?>
                <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">Borrow Book </h3>
                  </div>
                  <div class="panel-body">
                      <div class="row">
                          
                      <?php foreach($stud_borrow as $borrow ): ?>
                           
                         <div class="col-md-4">
                        <a href="product.html">
                            <img src="<?php echo base_url(); ?>assets/images/<?php echo $borrow['book_img']; ?>"/>
                        </a>
                        <div class="game-title">
                            <?php echo $borrow['book_title']; ?>
                        </div>
                        <div class="game-add">
                            <form method="post" action="<?php echo base_url(); ?>Student/proc_return">
                                <input type="hidden" name="book_id" value="<?php echo $borrow['book_id']?> ">
                                <input type="hidden" name="return_date" value="<?php echo $borrow['return_date']; ?>">
                                  <?php if($profile):?>
                                    <input type="hidden" name="stud_id" value="<?php echo $profile->stud_id; ?> ">
                                <?php endif; ?> 
                                <input type="hidden" name="book_title" value="<?php echo $borrow['book_title']; ?> ">
                                <input type="submit" name="borrow" class="btn btn-primary" value="Return Book">
                            </form>
                              
                        </div>
                    </div>

                <?php endforeach; ?>
                    
                    
                     
                    </div>
            </div>
          </div>
  
    </div>    
          