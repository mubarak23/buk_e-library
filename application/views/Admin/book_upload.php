    <div class="col-md-8">
                <div class="row">
                
                             <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">Admin Only Area : Book Cover Upload </h3>
                        <?php if($this->session->flashdata('Success')): ?>
                       <?php echo '<div class="alert alert-success">' .$this->session->flashdata('Success'). '</div>'?>
                        <?php endif; ?>
                        </div>
                        <div class="panel-body">
                            
                                <form class="form-group" method="post" action="<?php echo base_url(); ?>Admin/upload" >
                                  <div class="col-md-5">
                                      <div class="form-group">
                                 <select class="form-control" name="book_faculty">

                                    <option value="">Select a Book </option>
                                <?php foreach($book_list as $book):?>
                                    <option value="<?php echo $book['book_id']; ?>"><?php echo $book['book_title']; ?> </option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                                  </div>
                             <div class="col-md-5">
                               <input type="file" name="book_cover" class="form-control">
                             </div>
                             <div class="col-md-2">
                               <button type="submit"  name="upload" class="btn btn-primary">Upload </button>
                             </div>

                           </form> 
                                  
                            
                            
                            
                        </div>
                                   
                    </div>
       
                </div>
                 

      
                    
                   
                </div>
            
         </div>
        </div> 





























































































