

<?php include_once('sms.php');?>

<html>
<form action="index.php" method="POST" >
Number:<br />

<input type="text" size="2" value="254" name="numbertext">-<input type="text" name="number">
<br /><br />

Sender:<br />
<input type="text" name="from">
<br /><br />

Message:<br />
<textarea  name="message"></textarea>
<br /><br />

<input type="hidden" name="submitted" value="true">
<input type="submit" name="send" value="send" >
</form>
</tr>
</table>
</form>
</html>