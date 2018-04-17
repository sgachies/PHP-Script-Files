<html>
	<head>
			<title><?php echo "counting"?></title>
	</head>
<body>
	<?php  //$url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'loop.php'; ?>
	<form action="# <?php //echo $url;?>" method="post">
		<p> print from 1 to:
		<input type="text" name="countTo" size="30" value=""/>
		</p>
		
		<p> print fibonacci sequence:
		<input type="text" name="fibonacci" size="30" value=""/>
		</p>
		
		
		<p> 
		<input type="submit" name="submit"  value="send"/>
		</p>
	</form>
		
</body>
</html>
<?php
	include("loop.php");
?>