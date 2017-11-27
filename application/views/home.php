<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Buk Online Library</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
      
      
      <!-- Font Awesome CSS -->
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
		
		

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BUK Online E-Library</a>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>

      
      
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-4">
                        
                        <div class="menu-item blue">
                            <a href="<?php echo base_url(); ?>Library/home" >
                                <i class="fa fa-magic"></i>
                                <p>Home</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="<?php echo base_url(); ?>Library/lib_search" data-toggle="modal">
                                <i class="fa fa-file-photo-o"></i>
                                <p>Search books</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="<?php echo base_url(); ?>Admin/admin_login" >
                                <i class="fa fa-user"></i>
                                <p>Admin</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-4">
                        
                    
                              <div class="menu-item blue">
                            <a href="<?php echo base_url(); ?>Student/stud_login" >
                                <i class="fa fa-magic"></i>
                                <p>Student Area</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="<?php echo base_url(); ?>Student/stud_login" data-toggle="modal">
                                <i class="fa fa-file-photo-o"></i>
                                <p>Borrow Book</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="<?php echo base_url(); ?>student/stud_login" data-toggle="modal">
                                <i class="fa fa-user"></i>
                                <p>Return Book</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-4">
                        
                        <div class="menu-item light-red">
                            <a href="<?php echo base_url(); ?>Library/stud_register" >
                                <i class="fa fa-envelope-o"></i>
                                <p>Register</p>
                            </a>
                        </div>
                        
                        <div class="menu-item color">
                            <a href="<?php echo base_url(); ?>student/send_message" data-toggle="modal">
                                <i class="fa fa-comment-o"></i>
                                <p>Message Admin</p>
                            </a>
                        </div>
                        
                        <div class="menu-item blue">
                            <a href="<?php echo base_url(); ?>Library/faculty_book/1">
                                <i class="fa fa-mortar-board"></i>
                                <p>Books Base On Faculties</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
      
      
      
           
      
      
      <div class="row footer">
        <div class="container">
            <p>Buk Online Library  &copy; 2017, All Right Reserved</p>
        </div>
      </div>

 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
