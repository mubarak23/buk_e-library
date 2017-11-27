    <div class="col-md-8">
                <div class="row">
                
                             <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">Add Book</h3>
                        </div>
                        <div class="panel-body">
                           
                            
                            <form role="form"  method="POST" action="<?php echo base_url(); ?>Admin/add_book">
                            <div class="form-group">
                                <label>Book Title*</label>
                                <input type="text" name="book_title" class="form-control" placeholder="Enter Book Title"/>
                            </div>
                            <div class="form-group">
                                <label>Book Author*</label>
                                <input type="text" name="book_author" class="form-control" placeholder="Enter Book Author"/>
                            </div>
                            <div class="form-group">
                                <label>Book ISBN*</label>
                                <input type="text" name="book_isbn" class="form-control" placeholder="Enter Book ISBN Number"/>
                            </div>
                            <div class="form-group">
                                <label>Book Summary*</label>
                                <textarea id="body" class="form-control" name="book_summary" ></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Catergory</label>
                                     <select class="form-control" name="book_faculty">
                                    <option value="">Select Faculty </option>
                                    <option value="1">ComputerScience And IT</option>
                                    <option value="2">Engineering</option>
                                    <option Value="3">Education</option>
                                    <option Value="4" >Social And Mangement Science</option>
                                    <option Value="5" >Communication</option>
                                    <option value="6">Art And Islamic Studies</option>
                                    <option value="7">Science</option>
                                    <option value="8">Health Science</option>
                                    <option value="9">Earth And Enviromental Science</option>
                                    <option value="10">Agriculture Science</option>
                                    <option value="11">Clinical Science</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Book Type</label>
                                    <select class="form-control" name="book_type">
                                        <option>Select Book Type</option>
                                        <option value="1">Hardcopy</option>
                                        <option value="2">Softcopy</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                        <label>Book Copy*</label>
                                        <input type="file" name="book_img" class="form-control" />
                                        <p class="help-block"></p>
                                 </div>
                                  
                                 <div class="form-group">
                                    <label>Book Stored Date</label>
                                    <input type="date" name="book_stored_date" class="form-control">
                                 </div>
                            
                              <input type="submit" name="Add_book" class="btn btn-primary" value="Add Book"/>
                                
                            </form>                
                            
                            
                            
                        </div>
                                   
                    </div>
       
                </div>
                 

      
                    
                   
                </div>
            
         </div>
        </div>