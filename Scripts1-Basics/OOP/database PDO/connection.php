
<?php
class Connection{

public function dbConnect(){
return new PDO("mysql:host=127.0.0.1; dbname=loginpdo", "root", "");
}

}

?>
