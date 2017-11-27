<div class="col-md-8">
    
    <div class="row">
            <?php if($book): ?>

                                        <div class="col-md-6">
                         
                             <a href="product.html">
                            <img src="<?php echo base_url(); ?>assets/images/cover1.jpg"/>
                        </a>

                       
                        
                            
                            <div class="">
                           <label>Book Title</label>:<?php echo $book->book_title;?>
                        </div>
                        <div class="game"></div>
                        <label>Faculty</label>: <p><?php echo $book->faculty_name; ?></p>
                        <div>
                            <label>Author</label>:
                            <p><?php echo $book->book_author; ?></p>
                        </div>
                        <div class="game-summary">
                            <label>Book Smmary</label>:
                            <p><?php echo $book->book_summary; ?></p>

                        </div>
                      

 </div>

 <?php endif; ?>
       

    </div>


</div>