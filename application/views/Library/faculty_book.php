     <div class="col-md-8">
                <div class="row">
                
                    
                  
                    
                    <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                     <?php if($faculty): ?>
                     <h3 class="panel-title">Book From :<?php echo $faculty->faculty_name; ?> 
                          
                          <?php endif; ?>
                      </h3>
                  </div>
                        <div class="panel-body">
                            <div class="row">
                           
                           <?php if($faculty_book) :?>

                            <?php foreach($faculty_book as $book): ?>
                         <div class="col-md-4">
                        <a href="product.html">
                            <img src="<?php echo base_url(); ?>assets/images/cover1.jpg"/>
                        </a>
                        <div class="game-title">
                            <?php echo $book['book_title']; ?>
                        </div>
                        <div class="game-add">
                          <a href="<?php echo base_url(); ?>Library/book_detail/<?php echo $book['book_id']; ?>">  <button class="btn btn-primary" type="submit">View Full Details</button></a>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php else: ?>

                    <p>There Are Book in this Faculty At this Time, You Can Check Again Later</p>

                <?php endif;?>
                   
                    
                    
                         
              </div>
                </div>
                                   
        </div>
                    
                </div>
                 

      
                    
                   
                </div>
            