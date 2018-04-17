<?php
error_reporting (E_ALL ^ E_NOTICE);

?>

<?php
function RandomString($length) {

    $keys = array_merge(range(1,3), range('A', 'C'));

    for($i=0; $i < $length; $i++) {

        $key .= $keys[array_rand($keys)];

    }

    return $key;

}

echo RandomString(4);
?>