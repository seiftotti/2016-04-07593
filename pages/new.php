<!DOCTYPE html>
<html lang="en">
<head>
  <title>online Showroom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<table style="text-align: center" border="1" width="101%" bgcolor=" blue"  >
	<tr>
		<tr>
		<td style="border-style: none; border-width: medium" bgcolor="87ceeb"><div class="page-header">
  <h1>Online Car's Showroom <small>.com</small></h1>
</div> <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li role="presentation"></li>
        </td>
	</tr>
	</table>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">online car showroom</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="indexx.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="http://www.facebook.com"><span class="glyphicon glyphicon-facebook"></span>Link</a></p>
      <p><a href="http://www.instagram.com">Link</a></p>
      <p><a href="http://www.youtube.com/channel/UCxlEM_OFjVOx3uvzL0h5fqQ">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>This site is used to sell and buy Cars from different place all over the world especially in Tannzania. if you need to sell a car just go to home page on navigation bar in a sells button you will see the details. If you need to buy a car from our site go at home page you will see the button of "see more" and all procedure are more flexible. for more information just contact us via email: santiamor2@gmail.com or click on contact at the home page.  
      You can pay us Through TIGO PESA, M-PESA, MASTER CARD, VISA CARD and all means of payment through the bank. </p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Created by UDSM Student</p>
</footer>

</body>
</html>
