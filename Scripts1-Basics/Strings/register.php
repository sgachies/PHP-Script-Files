<?php
$errors=array();

if(isset($_POST['submitted']) && $_POST['submitted']==='true'){
$full_name=trim($_POST['full_name']);
$names = explode(' ',$full_name);

if(count($names)>2 || count($names)==1 || empty($full_name)){
$errors[] = 'Please enter your first and last name';
}

if(empty($errors)){

$first_name=$names[0];
$last_name=$names[1];
	
	echo 'First Name:'.$first_name.'<br>';
	echo 'Last Name:'.$last_name;
	
	}else{
	foreach($errors as $error){
		echo $error.'<br />';
}
}

}


?>

<form action="register.php" method="POST">
	<p>Full Name:<input type="text" name="full_name" value="<?php if(isset($full_name)) {echo $full_name;} ?>"</p>
	<p><input type="submit" value="submit" /></p>
	<input type="hidden" name="submitted" value="true" />
</form>