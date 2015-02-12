<?php 

	include("login.php");
	
?>	

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Diary App</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	
	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:600,700' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

<body>
 <!--Navbar-->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--a class="navbar-brand" href="#">Diary App</a-->
		 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" method="post">
            <div class="form-group">
              <input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
            </div>
            <div class="form-group">
              <input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Log In" />
          </form>
        </div><!--/.navbar-collapse -->
     </div>
    </nav>
	
	
	<div class="container mainContainer">

      <!--div class="row" row was causing horizontal scrollbar?-->
	  
		<div class="col-md-4 col-md-offset-4" id="alphaDiv">
			  
			<h1>Diary App</h1>
			<p class="lead" id="description">A simple online diary app</p>
			<p>Automagically saves your content!</p>
			
			<?php
			
				if ($error) {
				
					echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
					
				} 
				
				if ($message) {
				
					echo '<div class="alert alert-info">'.addslashes($message).'</div>';
					
				} 
			?>
									
				<form method="post" id="registrationForm">

					<input type="email" name="email" id="email" placeholder="Your email" class="form-control" value="<?php echo addslashes($_POST['email']); ?>" />
					<input type="password" name="password" id="password"  placeholder="Your password" class="form-control" value="<?php echo addslashes($_POST['password']); ?>" />
					<input type="submit" name="submit" class="btn btn-danger btn-lg" id="biggerButton" value="Sign Up" />

				</form>		
						
		</div>

		
     </div><!-- /row -->
	
   </div><!-- /.container -->
	  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	
	<script>
	
	$(".mainContainer").css("min-height",$(window).height());
	
	</script>
	
  </body>
</html>

