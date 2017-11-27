
    <div class="col-md-8">
                <div class="row">
                
       
                	            <div class="panel panel-default ">
                  <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">Default Admin Registration </h3>
                        </div>
                        <div class="panel-body">
                            <form for="form" method="POST" action="<?php echo base_url(); ?>Admin/Add_admin">
                            <div class="form-group">
                                <label>Admin Fullname*</label>
                                <input type="text" name="full_name" class="form-control" placeholder="Enter Your First Name"/>
                            </div>
                           
                            <div class="form-group">
                                <label>Admin Email Address*</label>
                                <input type="email" name="admin_email" class="form-control" placeholder="Enter Your Email Address"/>
                            </div>
                             <div class="form-group">
                                <label>Admin Username*</label>
                                <input type="text" name="admin_username" class="form-control" placeholder="Enter Your Registration Number"/>
                             </div>
                            <div class="form-group">
                                <label>Admin Password*</label>
                                <input type="password" name="admin_password" class="form-control" placeholder="Enter A Password"/>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password*</label>
                                <input type="password" name="password1" class="form-control" placeholder="Enter Password Again"/>
                            </div>
                               <input type="submit" name="register" class="btn btn-primary" value="Register" >
                                
                            </form>            
                        </div>
                                   
        </div>


                </div>
                 

      
                    
                   
                </div>
            
         </div>
        </div>