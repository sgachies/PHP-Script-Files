<?php
if ($submit=="Send")
{
$url='http://localhost:9333/ozeki?';
$url.="action=sendMessage";
$url.="&login=admin";
$url.="&password=abc123";
$url.="&recepient=".urlencode($recepient);
$url.="&messageData=".urlencode($message);
$url.="&sender=".urlencode($sender);
file($url);
}
?>
<html>
<form method=post action='index.php'>
<table border=0>
<tr>
<td>Sender</td><td><input type='text' name='sender'></td>
</tr>
<tr>
<td>Recepient</td><td><input type='text' name='recepient'></td>
</tr>
<tr>
<td>Message</td><td><input type='text' name='message'</td>
</tr>
<tr>
<td colspan=2><input type="submit" name="submit" value=Send>
</form>
</tr>
</table>
</form>
</html>