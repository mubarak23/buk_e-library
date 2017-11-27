    <div class="col-md-8">
                <div class="row">
                
                             <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">Admin Only Area </h3>
                        <?php if($this->session->flashdata('Success')): ?>
                       <?php echo '<div class="alert alert-success">' .$this->session->flashdata('Success'). '</div>'?>
                        <?php endif; ?>
                        </div>
                        <div class="panel-body">
                            
       
                         <section>
                            <h2>Active Student</h2>
                 <table class="table">
                  <tr>
                    
                      <th>Book Id</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                     
                    <th>Book ISBN</th>
                    <th>Stored Date</th>  
                 </tr>
                 
                 <?php foreach($all_books as $book) :?>
                     <tr>
		
		          <td><?php echo $book['book_id']; ?></td>
		          <td><?php echo $book['book_title']; ?></td>
                 <td><?php echo $book['book_author']; ?></td>
                 <td><?php echo $book['book_isbn']; ?></td>
                 <td><?php echo $book['book_stored_date']; ?></td>        
		</tr>

    <?php endforeach; ?>
             </table>
                
                            </section>            
                            
                            
                            
                        </div>
                                   
                    </div>
       
                </div>
                 

      
                    
                   
                </div>
            
         </div>
        </div>