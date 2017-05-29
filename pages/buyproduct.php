
<!DOCTYPE html>
<html>

 <head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online showroom</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-theme.css" rel="stylesheet">
<link href="../css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 42%;
      rate : 10sec;
      margin: auto;
  }
  </style>
  <style>
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: 100%;
    left: 50%;
    margin-left: -60px;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>
  </head>

<body style="text-align: center; background-color:#D5D5D5">
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

<div align="center" data-role="main" class="ui-content">
	&nbsp;<table   border="1" width="1093" bordercolor="#D5D5D5" height="682">
		<tr>
			<td  style="border-left-style:solid; border-left-width:1px; border-right-style:solid; border-right-width:1px; border-top-style:solid; border-top-width:1px; border-bottom-style:none; border-bottom-width:medium" width="1091" height="54" bgcolor="#EEEEEE">
			 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a target ="_self" href="../index.php" class="navbar-brand"  href="#FFFFFF">Online showroom</a>
    </div>
    <div style="background-color: #FFFFF">
    <ul class="nav navbar-nav">
      <li ><a target ="_self" href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      </li>
       
      <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
    </ul>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="indexx.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav></td>
		</tr>
		<tr>
			<td style="border-left-style:solid; border-left-width:1px; border-right-style:solid; border-right-width:1px; border-top-style:none; border-top-width:medium; border-bottom-style:solid; border-bottom-width:1px" width="1091" bgcolor="#EEEEEE">
 <div align="center"  data-role="page" id="pageone">

<table border="0" cellpadding="0" cellspacing="0" width="497" bordercolorlight="#008080" bordercolordark="#C0C0C0">
	<tr>
		<td>

&nbsp;


<table class="table table-bordered" width="30%">
        <thead>
        <tr colspan="8">
        <td colspan="2">
		<p align="center"><font color="#45A6DA">Please Buy Product</font></p>
		<p>
		&nbsp;</td>

              </thead>
 
         
        <tbody style="background-color: #FFFFFF">
        <tr>

 <table class="bg-default table-responsive table table-bordered table table-hover" width="494">
<form name="" action="" method="post">
					<tr>
				<td>Type of color&nbsp;&nbsp;&nbsp;&nbsp; <select name="color">
  <option value="Blue">Blue
  <option value="Green">Green
  <option value="Pink">Pink
  <option value="Red">Red
   <option value="Black">Black
</select>
  
 </td>
<td>Country<select name="ramsize">
  <option value="germany">Germany
  <option value="china">China
  <option value="london">london
   <option value="usa">USA
    <option value="Italy">Italy
     <option value="Dubai">Dubai
  </select>
 </td>
			</tr>
			<tr><td>Macchine <select name="processor">
  <option value="4">4
  <option value="6">6
</select>
  
 </td>
<td>Name<select name="hdsize">
  <option value="harrier">Harrier</option>
  <option value="bmw">BMW</option>
  <option value="prado">Prado</option>
</select>
 </td></tr>
  <tr>
             <td width="229" colspan="2">   
									
	<center><input type ="submit" name ="doSubmit" value="Check Availability" class ="btn btn-success btn-lg btn-block" style="width: 170px; height: 42px">
													</center>
									
									</td>           
             </tr>
 </form>
 <tr>

</tr>
<tr>

			<form name="" method="post" action="">
             <td>
				<input type="hidden" name="id" value="">
			 <input type="hidden" name="total_quantity" value="">
			 <input type="hidden" name="price" value="">
			 <input type="hidden" name="hdsize" value="">
			 <input type="hidden" name="processor" value="">
			 <input type="hidden" name="ramsize" value="">
			 <input type="hidden" name="color" value="">

				<input class="form-control" type ="number" name ="buy" placeholder="Enter Quantity of Product .." min="1" required size="46"></td>
             <td width="229">   
									
	<center><button type ="submit" name ="submit" class ="btn btn-success btn-lg btn-block" style="width: 147px; height: 42px">
													<span class="glyphicon glyphicon-"></span>  Buy
													</button></center>
									
									</td>  </form>         
             </tr>
         
              </table>
                    </tbody>
    </table>
<table  width="100%">
	
	
	</table>



		</td>
	</tr>
</table>
	</div>
</td>
		</tr>
	</table></div>

</body>

</html>