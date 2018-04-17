<html>
<head>
<title>search</title>
</head>

<body>

<form name="form1" method="post">

<label>Enter search name</label> <input type="text" name="t1" OnKeyup="aa();"/>
<div id="d1"></div>
</form>

<script>
function aa()
{
xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","search.php?nm="+document.form1.t1.value,false);
xmlhttp.send(null);
document.getElementById("d1").innerHTML=xmlhttp.responseText;
}


</script>



</body>

</html>

