<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Online showroom</title>
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-theme.css" rel="stylesheet">
<link href="../css/bootstrap-theme.min.css" rel="stylesheet">

<script>
    function confirmDelete(link) {
        if (confirm("Are you Ok to Delete?")) {
            doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
        }
        return false;
    }
</script>

</head>

<body bgcolor="#F0F0F0" style="background-color: #EEEEEE">
<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/npm.js"></script>
	<script src="js/carousel.js"></script>

<table class="table table-bordered">
        <thead>
        <tr colspan="8">
        <td colspan="8">
		<p align="center"><font color="#45A6DA">CUSTOMER COMMENTS</font></p>
		<p>
		</td>

        </tr>

            <tr class="success">
                <th><font size="2">User ID</font></th>
                <th><font size="2">Full Name</font></th>
                <th><font size="2">Email</font></th>
                <th><font size="2">Comments</font></th>
                <th><font size="2">Date</font></th>
                <th><font color="#0000FF" size="2">Action</font></th>
            </tr>
        </thead>
 
         
        <tbody style="background-color: #FFFFFF">
        <tr>
    <td >
    <font size="2">
     </font>  </td>
    <td>
    <font size="2">
   </font></td>
    <td>
    <font size="2">
    </font></td>
    <td>
    <font size="2">
    </font></td>
    <td>
    <font size="2">
   </font></td>
    <td width="34">
    <div class="ui small buttons"><a href=" ">
  
<button class="btn btn-danger"  onclick="return confirmDelete(this);"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>  Delete</button></a>
</div></td>
  </tr>
 

                    </tbody>
    </table>


</body>

</html>
