<?php

$names = [
    'Neo',
    'Morpheus',
    'Tank',
    'Trinity',
    'Dozer',
    'Pifia'
];

$a = serialize($names);

var_dump(unserialize($a));