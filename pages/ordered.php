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
        if (confirm("Are you Ok to Delete order?")) {
            doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
        }
        return false;
    }
</script>
<script>
    function confirmDelet(link) {
        if (confirm("Are you Ok to Cancel order?")) {
            doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
        }
        return false;
    }
</script>

</head>

<body bgcolor="#F0F0F0" style="background-color: #EEEEEE" >

<div align="center">
&nbsp;<table border="1" width="85%" style="border-width: 0px">
		<tr>
			<td style="border-style: none; border-width: medium">

<div align="center">

&nbsp;<table class="table table-bordered" width="1200">
        <thead>
        <tr colspan="10">
        <td colspan="15">
		

<font face="Tahoma" color="#45A6DA">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> 
		<font face="Sitka Banner" color="#45A6DA">YOUR&nbsp; PRODUCTS 
		ORDERED</font>
		<b><font face="Sitka Banner"><span style="font-weight: 400">TOTAL COST</span></font></b>:<font face="Tahoma" color="#45A6DA">  TZS</font>
		</td>

        </tr>

            <tr class="success">
                <th width="4%"><font size="2">F.Name</font></th>
                <th width="5%"><font size="2">M.Name</font></th>
                <th width="7%"><font size="2">L.Name</font></th>
                <th width="6%"><font size="2">Product</font></th>
                <th width="4%"><font size="2">Type</font></th>
                <th width="4%"><font size="2">Country</font></th>
                 <th width="13%"><font size="2">Price Tzs</font></th>
                 <th width="14%"><font size="2">Total Tzs</font></th>
                  <th width="7%"><font size="2">Engine</font></th>
                  <th width="7%"><font size="2">Model</font></th>
                  <th width="7%"><font size="2">Machine</font></th>
                  <th width="7%"><font size="2">Ordered Date</font></th>
                <th><font size="2" color="#0000FF">Action</font></th>
                <th><font size="2" color="#0000FF">Action</font></th>
                <th><font color="#0000FF" size="2">Action</font></th>
                            </tr>
        </thead>
 
         
        <tbody style="background-color: #FFFFFF">
        <tr>

    <td width="4%" >
    <font size="2">
     </font>  </td>
    <td width="5%" >
    <font size="2">
     </font>  </td>
<td width="7%" >
    <font size="2">
      </font>  </td>
<td width="6%" >
    <font size="2">
      </font>  </td>
<td width="4%" >
    <font size="2">
      </font>  </td>

    <td width="8%">
    <font size="2">
    </font></td>
    <td width="13%">
    <font size="2">
    </font></td>
    <td width="14%">
    <font size="2">
    </font></td>
    <td width="7%">
    </td>
    <td width="7%">
  </td>
    <td width="7%">
   </td>
    <td width="7%">
    <font size="2">
    </font></td>
    <td width="7%">
    <div class="ui small buttons"><a href=" ">
  
<button class="btn btn-primary"><span class="glyphicon glyphicon-" aria-hidden="true"></span>More</button></a>
</div></td>
    <td width="9%">
     <div class="ui small buttons"><a href="">
  <button class="btn btn-danger"  onclick="return confirmDelet(this);"><span class="glyphicon glyphicon-" aria-hidden="true"></span>Cancel</button></a>
</div>

     </td>
    <td width="9%">
     <div class="ui small buttons"><a href="">
  <button class="btn btn-danger"  onclick="return confirmDelete(this);"><span class="glyphicon glyphicon-" aria-hidden="true"></span>Delete</button></a>
</div>

    </td>
  </tr>
  

                    </tbody>
    </table>


</div>


			<p>&nbsp;</td>
		</tr>
	</table>
</div>


</body>

</html>