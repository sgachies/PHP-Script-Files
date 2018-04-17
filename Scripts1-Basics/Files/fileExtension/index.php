<?php
echo $file = __FILE__ ."<br>";

function getFileExt($file) {
       return  end(explode(".", $file));
}

echo  getFileExt($file);
?>