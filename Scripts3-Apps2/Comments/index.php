<script type="text/javascript">
function get()
{
//form input comment
var input=$('#comment').val();
$.post('process.php',{comment:input },function(output){
$('#an').slideDown('slow').prepend(input+'<br/><hr/>').hide().fadeIn(
'slow')}
);
};
</script>

<html>

<head>
<title>COMMENT</title>
</head>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/bootstrap.js"> </script>
  
  <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>



<body>


<div class="well">


<form  method="post">
<input type="text" name="comment" id="comment"/>
<input type="button" value="post" onclick="get()"/>
</form>

<div id="an" style="width:600px">
</div>
</div>
</body>

<html>