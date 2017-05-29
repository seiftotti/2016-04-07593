
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
<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/npm.js"></script>
	<script src="js/carousel.js"></script>

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
	&nbsp;<table   border="1" width="1279" bordercolor="#D5D5D5" height="670">
		<tr>
			<td  style="border-left-style:solid; border-left-width:1px; border-right-style:solid; border-right-width:1px; border-top-style:solid; border-top-width:1px; border-bottom-style:none; border-bottom-width:medium" width="1277" height="54" bgcolor="#EEEEEE">
			 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" class="active">
      <a target ="_self" href="#" class="navbar-brand"  href="#FFFFFF">Welcome :<font size="6"><font color="#00FF00"></font></font></a>
    </div>
    <div style="background-color: #FFFFFF">
    <ul class="nav navbar-nav">
      </li>
       
    </ul>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="newproduct.php"><span class="glyphicon glyphicon-plus"></span> New Product</a></li>
<li ><a href="admin.php"><span class="glyphicon glyphicon-comment"></span> View Comment</a></li>
    <li><a href="admincustomer.php"><span class="glyphicon glyphicon-user"></span> View Customer</a></li>
<li class="active"><a href="customer_order.php"><span class="glyphicon glyphicon-th-large"></span> View Order</a></li>
      <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
      <li ><a href="administration.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
    </ul>
  </div>
</nav></td>
		</tr>
		<tr>
			<td style="border-left-style:solid; border-left-width:1px; border-right-style:solid; border-right-width:1px; border-top-style:none; border-top-width:medium; border-bottom-style:solid; border-bottom-width:1px" width="1277" bgcolor="#EEEEEE">
 <div align="center"  data-role="page" id="pageone">
				
				<table border="0" cellpadding="0" cellspacing="0" width="418" bordercolorlight="#008080" bordercolordark="#C0C0C0">
					<tr>
						<td>
						<iframe frameborder ="no" scrolling ="yes" name="ok" width="1300" height ="650" src="ordered.php" ></iframe>
						</td>
					</tr>
	</table>
				
				</div>
</td>
		</tr>
	</table></div>

</body>

</html>