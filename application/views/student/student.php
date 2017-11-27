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
                          <p><?php echo $profile->Reg_no; ?></p>
                          
                          </div>
                          <div class="activities">
                            
                            <a href="<?php echo base_url(); ?>Student/stud_borrow/<?php echo $profile->stud_id; ?>"><button class='btn btn-primary' >Borrowed Books</button></a><br><br>
                          </div>
                           <div class="activities">
                            
                            <a href="<?php echo base_url(); ?>library/message/<?php echo $profile->stud_id; ?>"><button class='btn btn-primary'>Message and Reply </button></a><br><br>
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
                      <h3 class="panel-title">General Books</h3>
                  </div>
                  <div class="panel-body">
                      <div class="row">
                          
                      <?php foreach($book_list as $book ):?>
                           
                         <div class="col-md-4">
                        <a href="product.html">
                            <img src="<?php echo base_url(); ?>assets/images/cover1.jpg"/>
                        </a>
                        <div class="game-title">
                            <?php echo $book['book_title']; ?>
                        </div>
                        <div class="game-add">
                            <a href="<?php echo base_url(); ?>library/book_detail/<?php echo $book['book_id']; ?>"><button class="btn btn-primary" type="submit">View Full Details</button></a>
                        </div>
                    </div>

                <?php endforeach; ?>
                   
                    </div>
            </div>
          </div>
  
    </div>    
          