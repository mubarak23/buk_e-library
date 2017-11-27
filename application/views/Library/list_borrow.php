     <div class="col-md-8">
                <div class="row">
                
                    
                  
                    
                    <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">List Of Available Books For Borrow</h3>
                  </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php foreach($book_list as $book ):?>
                           
                         <div class="col-md-4">
                        <a href="product.html">
                            <img src="<?php echo base_url(); ?>assets/images/cover.jpg"/>
                        </a>
                        <div class="game-title">
                            <?php echo $book['book_title']; ?>
                        </div>
                        <div class="game-add">
                            <form method="post" action="<?php echo base_url(); ?>library/proc_borrow">
                                <input type="hidden" name="book_id" value="<?php echo $book['book_id']?> ">
                                  <?php if($user_id):?>
                                    <input type="hidden" name="stud_id" value="<?php echo $user_id; ?> ">
                                <?php endif; ?> 
                                <input type="hidden" name="book_title" value="<?php echo $book['book_title']; ?> ">
                                <input type="submit" name="borrow" class="btn btn-primary" value="Borrow Now">
                            </form>
                             
                        </div>
                    </div>

                <?php endforeach; ?>
                    
                        
                    
                    
                         
              </div>
                </div>
                                   
        </div>
                    
                </div>
                 

      
                    
                   
                </div>
            