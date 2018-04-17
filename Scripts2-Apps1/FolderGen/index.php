<?php

ob_start();

$domain = "http://localhost/scripts2/URL/rangeURL/index.php";

$url = $_POST['url'];

if ($url)
    header("location: index.php");
else
{
    if (substr($url,0,7)!="http://")
        $url = "http://".$url;

$folder = generate_folder();

while (is_dir($folder))
   $folder = generate_folder();

    mkdir($folder, 0777);

    $file="$folder/index.php";
    $handle=fopen($file, 'w');
    fwrite($handle,"<meta http-equiv='REFRESH' content='0;url=".$url."'>");

    echo "your shortened URL: <input type='text' size='40' value='$domain/$folder'>";
}


//generate folder nameby combining both lower and uppercase letter
function generate_folder()
    {
        $lowercase = array('a','q','w','e','r','t','y','u','i','o','p','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m');
        $uppercase = array('Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M');

        $return = "";

        for ($x=0;$x<=2;$x++);
            $return = $lowercase[rand(0, 26)].$uppercase [rand(0, 26)];

        return $return;


    }

 ?>