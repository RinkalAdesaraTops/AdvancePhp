<?php
// error - exception - user defined error
// try_catch & finally block


try {
    $a = 35;
    $b = 10;
    if($b>0){
        $num = $a/$b; // ❌ Division by zero
        echo "<br> Division is $num";
    } else {
        throw new Exception("Not divisible by zero");
    }
    
} 
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
finally {
    echo "<br>Finally block executed!";
}



?>