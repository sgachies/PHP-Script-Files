<html>
<head>
<title>String Functions</title>
</head>

<body>

<?php
$str_a="my name is  steve bab";
$str_b="     and im a programmer";


$str_c=$str_a;
$str_c.=$str_b;

echo "str_c=".$str_c."<br />";
echo "<hr />";
?>

String Length: <?php echo strlen($str_c) ;?><br />
String Trim:   <?php echo $str_a.trim($str_b);?><br />
String Find:   <?php echo strstr($str_a,"is");?><br />
String Replace:<?php echo str_replace("bab","ngechu",$str_c);?><br />
<?php echo "<hr />"; ?>
Repeat String: <?php echo str_repeat($str_c,2) ;?><br />
Make Substring:<?php echo substr($str_c,0,10);?><br />
Find Position: <?php echo strpos($str_c,"steve");?><br />
Find Character:<?php echo strchr($str_c,"g");?><br />
</body>