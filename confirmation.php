<?php

	if (isset($_POST["email"])) 
		$email = $_POST["email"];
	if (isset($_POST["name"])) 
		$name = $_POST["name"];
	$r_id = rand(4000,5000);
	$message = "Hello $name,
Congratulations!!

We are pleased to inform you that your payment of Rs.1,000 has been successfully received.Your receipt id is $r_id

Regards
Rishabh Verma
(91+)7668812758";
	$message = wordwrap($message,70);	// use wordwrap() if lines are longer than 70 characters.

	$headers = "From: rrishabh8december@gmail.com";
	if (isset($_POST["email"])) 
	mail($email,"Payment Confirmation",$message,$headers);
	
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>E-Commerce Website</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
	<!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center" background="http://cdn.wonderfulengineering.com/wp-content/uploads/2014/09/Best-Wallpapers-18.jpg">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
    
      </header> 

      <main role="main" class="inner cover">
		
        <h1 class="cover-heading">Congratulations <?php echo $name;?></h1>
        <p class="lead">Payment recieved.Enjoy your course.Kindly check your email for invoice id related to payment confirmation.</p>
        <p class="lead">
          <a  class="btn btn-lg btn-secondary" href="courses.php">Home</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Website <a href=#>Developed</a>, by <a href="https://github.com/rishabh8cs">@rishabh</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
   <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
