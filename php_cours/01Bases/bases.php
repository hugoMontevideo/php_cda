<?php


$a='bleu';
$b='blanc';
$c='rouge';

$trait = '-';
$d = '';


$tableau = [$a, $b, $c];

for($i = 0; $i<count($tableau); $i++ ){

    $d .= $tableau[$i];
    if(next($tableau)){
        $d .= $trait;
    }
}
echo $d;

?>
<p>hello</p>

