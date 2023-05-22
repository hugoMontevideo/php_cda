<?php

$varA = 1;    // integer
$varB = '1';  // string

if ($varA == $varB) { // avec le double == on compare uniquement la valeur
    echo "$varA est égal à $varB en valeur <br>";
}

if ($varA === $varB) {  // avec le triple === on compare la valeur et le type
    echo 'Les deux variables sont égales en valeur ET en type <br>';
} else {
    echo 'Les deux variables sont différentes en valeur OU en type <br>';
}

?>
<p>hello</p>

