


<?php
$url = "http://www.example.com";

if(!filter_var($url, FILTER_VALIDATE_URL))
  {
  echo "URL is not valid";
  }
else
  {
  echo "URL is valid";
  }
?> 