     <div class="col-md-8">
                <div class="row">
                
                    
                  
                    
                    <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                       <h3 class="panel-title">Search Result </h3>
                  </div>
                        <div class="panel-body">
                            <div class="row">
                           
                          

                            <?php foreach($search_result as $result): ?>
                         <div class="col-md-4">
                        <a href="product.html">
                            <img src="<?php echo base_url(); ?>assets/images/cover1.jpg"/>
                        </a>
                        <div class="game-title">
                            <?php echo $result['book_title']; ?>
                        </div>
                        <div class="game-add">
                          <a href="<?php echo base_url(); ?>Library/book_detail/<?php echo $result['book_id']; ?>">  <button class="btn btn-primary" type="submit">View Full Details</button></a>
                        </div>
                    </div>
                <?php endforeach; ?>
                   
                    
                    
                         
              </div>
                </div>
                                   
        </div>
                    
                </div>
                 

      
                    
                   
                </div>
            