<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Image information</title>


</head>

<body>


<form enctype="multipart/form-data" action="storeinfo.php" method="POST">
<table border="0" align="center"> 

<tr>
<td>Image Name</td><td><input type="text" name="filename"></td>
</tr>

<tr>
<td>Image Details</td><td><input type="text" name="filedetails"></td>
</tr>

<tr>
<td>Image File</td><td><input type="file" name="fileimage"></td>
</tr>
<tr>
<td> </td><td><input type="submit" value="upload image file" name="submit" id="submit"></td>
</tr>
</table> 


</form>

</div>
</body>

</html>