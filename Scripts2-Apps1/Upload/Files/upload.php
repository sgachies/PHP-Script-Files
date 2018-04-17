
<center>
	<form action="uploadphp.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
			<td>File Name</td><td><input type="text" name="filename"/></td>
			</tr>
			<tr>
			<td>File Location</td><td><input type="file" value="file" name="file"/></td>
			</tr>
			<tr>
			<td><input type="button" value="cancel" onclick="window.location='index.php';"/></td>
			<td><input type="submit" value="upload"/></td>
			</tr>
		</table>
		
		
	</form>

</center>