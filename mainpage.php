<?php

	session_start();
	
	include("connection.php");
	
	$query = "SELECT `diary` FROM `users` WHERE id='".$_SESSION['id']."' LIMIT 1";

	$result = mysqli_query($link, $query);
	
	$row = mysqli_fetch_array($result);
	
	$diary = $row['diary'];
	
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
    <link href="css/custom2.css" rel="stylesheet">
	
	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:600,700' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		
  </head>

  <body>
  
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header pull-left">
          
          <a class="navbar-brand" href="#">Diary App</a>
        </div>
        <div id="navbar" <!--class="navbar-collapse collapse"-->
          <ul class="nav navbar-nav navbar-right pull-right">
            <li><a href="index.php?logout=1">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>

    
    <div class="container">

      <div class="row center">
	  
		<div class="col-md-6 col-md-offset-3">
			
			<textarea class="form-control"><?php echo $diary; ?></textarea>

		</div>

		
     </div><!-- /row -->
	
   </div><!-- /.container -->
    
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
	<script>
	
		$(".container").css("min-height",$(window).height());
	
		$("textarea").css("height", $(window).height()-180);
		
		$("textarea").keyup(function() {
		
			$.post("updatediary.php", {diary:$("textarea").val()} );
		
		});
				
	</script>
    
</body>