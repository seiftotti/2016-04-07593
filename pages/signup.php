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

<script type="text/javascript">
function val(){
 if(frm.phone.value=="")
 {
	alert("please enter the phone number");
	frm.phone.focus();
	return false;
 }
if(isNaN(frm.phone.value))
{ 
	alert("Invalide phone number");
	frm.phone.focus();
	return false;
}
if((frm.phone.value).length<10)
{
	alert("Phone number should be 10 digits");
	frm.phone.focus();
	return false;
}
if((frm.phone.value).length>10)
{
	alert("Phone number should be 10 digits");
	frm.phone.focus();
	return false;

}
	return true;
}
</script>

  </head>

<body style="text-align: center; background-color:#D5D5D5">
<table border="1" width="101%" bgcolor=" blue">
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
      <a target ="_self" href="../index.php" class="navbar-brand"  href="#FFFFFF">Car's Showroom</a>
    </div>
    <div style="background-color: #FFFFF">
    <ul class="nav navbar-nav">
      <li ><a target ="_self" href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      </li>
       
      <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
    </ul>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active" ><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav></td>
		</tr>
		<tr>
			<td style="border-left-style:solid; border-left-width:1px; border-right-style:solid; border-right-width:1px; border-top-style:none; border-top-width:medium; border-bottom-style:solid; border-bottom-width:1px" width="1091" bgcolor="#EEEEEE">
 <div align="center"  data-role="page" id="pageone">
 <form name="frm" method ="post" action ="">
				<table border="1" width="53%" style="border-width: 0px">
					<tr>
						<td style="border-style: none; border-width: medium">
						<div align="center">
							<table border="1" cellpadding="0" cellspacing="0" width="608" bordercolorlight="#008080" bordercolordark="#C0C0C0" style="border-width: 0px">
								<tr>
									<td style="border-style: none; border-width: medium">
									<div class="panel panel-info">
										<div class="panel-heading">
											<p align="center">
											<font size="6" color="#FF0000" face="Berlin Sans FB">
											Create Account</font></div>
										<div class="panel-body">
											<table border="1" cellpadding="0" cellspacing="0" width="740" bordercolorlight="#008080" bordercolordark="#C0C0C0" height="235" style="border-width: 0px">
												<tr>
													<td width="362" height="50" style="border-style: none; border-width: medium">
													<input class="form-control" type ="text" name ="user" placeholder="Enter User Name.." required size="46"></td>
													<td width="12" height="51" style="border-style: none; border-width: medium">&nbsp;</td>
													<td height="51" style="border-style: none; border-width: medium">
													<input class="form-control" type ="password" name ="pass" placeholder="Enter Password.." required></td>
												</tr>
												<tr>
													<td width="362" height="50" style="border-style: none; border-width: medium">
													<input class="form-control" type ="text" name ="fname" placeholder="First Name .." required></td>
													<td width="12" height="50" style="border-style: none; border-width: medium">&nbsp;</td>
													<td height="48" style="border-style: none; border-width: medium">
													<input class="form-control" type ="text" name ="mname" placeholder="Middle Name.." required></td>
												</tr>
												<tr>
													<td width="362" height="50" style="border-style: none; border-width: medium">
													<input class="form-control" type ="text" name ="lname" placeholder="Last Name.." required></td>
													<td width="12" height="46" style="border-style: none; border-width: medium">&nbsp;</td>
													<td height="46" style="border-style: none; border-width: medium">
													<input type="text" maxlength="10" class="form-control" placeholder="Enter Your Phone Number" required name="phone" size="20">
													</td>
												</tr>
												<tr>
													<td width="362" height="50" style="border-style: none; border-width: medium">
													<input class="form-control" type ="email" name ="email" placeholder="Your Email.." required></td>
													<td width="12" height="50" style="border-style: none; border-width: medium">&nbsp;</td>
													<td height="46" style="border-style: none; border-width: medium">
													<input class="form-control" type ="text" name ="address" placeholder="Enter Address.." required></td>
												</tr>
												<tr>
													<td width="362" style="border-style: none; border-width: medium">
													<select class="form-control" name="gender" required>
													<option value ="">Select Your Gender</option>
													<option value ="Male">Male</option>
													<option value ="Female">Female</option>

													</select>
													<td width="12" style="border-style: none; border-width: medium">&nbsp;</td>
													<td style="border-style: none; border-width: medium">
													<p align="center">
													<button type ="submit" name ="submit" class ="btn btn-primary btn-lg btn-block" style="width: 293px; height: 39px" onclick="return val();">
													Create
													</button></td>
												</tr>
											</table>
										</div>
										<div class="panel-footer">
											<table border="0" cellpadding="0" cellspacing="0" width="739" bordercolorlight="#008080" bordercolordark="#C0C0C0" height="8">
												<tr>
													<td width="21">&nbsp;</td>
													<td>
													<table border="0" cellpadding="0" cellspacing="0" width="696" bordercolorlight="#008080" bordercolordark="#C0C0C0" height="39">
														<tr>
															<td>
															<font face="Bell MT" size="2" color="#00A9E1">
															Designed : UDSM-Student</font></td>
															<td width="168" valign="bottom">
															<p align="right">
															<font face="Bell MT" size="2" color="#00A9E1">
															Copyright © 2017</font></td>
														</tr>
													</table>
													</td>
												</tr>
											</table>
										</div></div>
									</td>
								</tr>
							</table>
							<p>
							
							<table  width="100%">
	
	<?php
		echo "<tr>";
	if(!empty($err))
	{
		foreach($err as $e)
		{
			echo "<td align='center' colspan = '2'><font color='blue' face='tahoma'><i><b>".$e."</b></i></td>";
	    }
	}
		echo "</tr>";
	?>

	</table>

							</div>
						</td>
					</tr>
				</table>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</p>
	</form>
	</div>
</td>
		</tr>
	</table></div>

</body>

</html>