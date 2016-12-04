<?php

function foo($a, $b, $c){
    return $a + $b + $c;
}

$a = [1, 2, 4];

echo foo(...$a);