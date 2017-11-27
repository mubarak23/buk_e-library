     <div class="col-md-8">
                <div class="row">
                
                    
                  
                    
                    <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">General Books</h3>
                  </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php foreach($book_list as $book ):?>
                           
                         <div class="col-md-4">
                        <a href="product.html">
                            <img src="<?php echo base_url(); ?>assets/images/<?php echo $book['book_img']; ?>"/>
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
                    
                             <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">New Books</h3>
                  </div>
                        <div class="panel-body">
                            <div class="row">
                
                               <div class="col-md-4">
                        <a href="product.html">
                            <img src="<?php echo base_url(); ?>assets/images/cover1.jpg"/>
                        </a>
                        <div class="game-title">
                           Batman Arkham Night
                        </div>
                        <div class="game-add">
                            <button class="btn btn-primary" type="submit">View Full Details</button>
                        </div>
                    </div>
                                   <div class="col-md-4">
                        
                        <a href="product.html">
                            <img src="<?php echo base_url(); ?>assets/images/cover.jpg"/>
                        </a>
                        <div class="game-title">
                           Batman Arkham Night
                        </div>
                        <div class="game-add">
                            <button class="btn btn-primary" type="submit">View Full Details</button>
                        </div>
                    </div>
                                
                      <div class="col-md-4">
                        
                        <a href="product.html">
                            <img src="<?php echo base_url(); ?>assets/images/cover1.jpg"/>
                        </a>
                        <div class="game-title">
                            Snipper Elite 
                        </div>
                        <div class="game-add">
                            <button class="btn btn-primary" type="submit">View Full Details</button>
                        </div>
                    </div>
                      <div class="col-md-4">
                        
                        <a href="product.html">
                            <img src="<?php echo base_url(); ?>assets/images/cover.jpg"/>
                        </a>
                        <div class="game-title">
                           Batman Arkham Night
                        </div>
                        <div class="game-add">
                            <button class="btn btn-primary" type="submit">View Full Details</button>
                        </div>
                    </div>
                    
              </div>
                </div>
                                   
        </div>
                    
                </div>
                 

      
                    
                   
                </div>
            