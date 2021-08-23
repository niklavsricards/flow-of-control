<?php

$input = (int) readline('Enter a positive integer: ');

if ($input <= 0) exit('You entered an invalid value');

echo strlen((string)$input);
