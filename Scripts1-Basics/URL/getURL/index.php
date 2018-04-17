<?php
session_start();
$value='value';

$_SESSION['variable']=$value;
echo $_SESSION['variable'];
echo'<br />';

echo stripslashes($_GET['variable']);

echo '<br /><script>alert(\"xss attack\");</script><br /><a href="?variable='.urlencode($value).'">click me</a>';

?><br />
<html>

<form method="GET">
<input name="variable" value="value"/>
<input type="submit" value="submit" />

</form>
</html>