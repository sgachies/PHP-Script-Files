
<?php
class Load{
function view($file_name,$data=null)
{
//extract takes the item in associative array and turn them to variables
if(is_array($data)){
extract($data);


}
include 'views/' .$file_name;
}
}
 
 
 
?>