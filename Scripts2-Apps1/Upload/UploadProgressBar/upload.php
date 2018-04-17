<?php
/*
	@author:			dawgp0und
	@copyright:			Copyright 2012 (c). All Rights Reserved.
*/

$file = $_FILES["upload_file"];

if($file && $file["error"] == 0)
{
        $tempnames = $file["tmp_name"];

        $extension = explode(".", $file["name"]);
        $extension = $extension[1];

        $filenames = generate_random(16);

        $movedfile = move_uploaded_file($tempnames, "$filenames.$extension");
        if($movedfile)
        {
                echo 1;
        }
        else
        {
                echo 0;
                exit();
        }
}
else
{
    echo 0;
    exit();
}

function generate_random($number_of_characters)
{
        $characters = array();
        $randomchar = "";
        $x = 0;
        for($i = 48; $i < 123; $i++)
        {
                if(ctype_alnum(chr($i)))
                {
                        $characters[$x] = chr($i);
                        $x++;
                }
        }
        for($i = 0; $i < $number_of_characters; $i++)
        {
                $randomchar .= $characters[rand(0, count($characters) - 1)];
        }
        return $randomchar;
}
?>