<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">

    <title>Buk E-library</title>
    
 
    

<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"> Student's login Page</h3>
			    	<?php if(!$this->session->flashdata('Success')): ?>
					<?php echo '<div class="alert alert-success">' .$this->session->flashdata('Failed'). '</div>'?>
					<?php endif; ?>
			 	</div>
			  	<div class="panel-body">
                	<form accept-charset="UTF-8" role="form" method="Post" acttion="<?php echo base_url()?>student/stud_login">
                    <fieldset>
			    	  	<div class="form-group">
			    	  		<label>Enter Your Registration Number</label>
			    		    <input class="form-control" placeholder="Registration Number" name="stud_regno" type="text">
			    		</div>
			    		<div class="form-group">
			    			<label>Enter Your Password</label>
			    			<input class="form-control" placeholder="Password" name="stud_password" type="password" value="">
			    		</div>
			    		
			    		<input class="btn btn-lg btn-success btn-block"  name="login" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>