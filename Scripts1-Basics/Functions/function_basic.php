<?php

function foo() {
    echo "This is foo";

 
function bar($param) {
    echo "This is bar saying: $param";
}

echo foo();        // Goes into foo()
 
 echo '<br>';
echo bar('test');  // Goes into bar()


?>