<?php 
class siteCopyright {

    function getCopyrightYear($var3) {
        
       $var1 = "&copy;";
       $var2 = date("Y");    
       
       echo "<h2>$var1$var2 $var3</h2>";
       
    }
    
}
$myFirstObject = new siteCopyright();
// This time we send data to the class function, can be any variable or string
$myFirstObject -> getCopyrightYear("Developphp.com"); 
?>