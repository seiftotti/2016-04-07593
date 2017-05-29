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

<table class="table table-bordered">
        <thead>
        <tr colspan="8">
        <td colspan="8">
		<p align="center"><font color="#45A6DA">LIST OF USERS</font></p>
		<p>
		</td>

        </tr>

            <tr class="success">
                <th><font size="2">User Name</font></th>
                <th><font size="2">Password</font></th>
                <th><font size="2">Status</font></th>
                 <th><font color="#0000FF" size="2">Change Status</font></th>
                <th><font color="#0000FF" size="2">Action</font></th>
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
    <td width="34">
    <div class="ui small buttons">  


</div>
<form method="post" action="unblock.php? delr=<?php echo $id ?>">
<select name='status' class="form-control">
 <option value='block'>block</option>
 <option value='admin'>admin</option>  
 <option value='staff'>staff</option> 
													 </select>

</td>
    <td width="34">
  
<button class="btn btn-info" name="reset"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Update</button></div>
</form>
    </td>
    <td width="34">
     
<button class="btn btn-danger"  onclick="return confirmDelete(this);"




><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>  Delete</button></a>
</div></td>
  </tr>
  
  
  
                    </tbody>
    </table>


</body>

</html>



