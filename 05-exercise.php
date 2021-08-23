<?php

$input = readline('Enter a string: ');

$array = str_split(strtolower($input));

foreach ($array as $char) {
    if ($char == 'a' || $char == 'b' || $char == 'c') {
        echo 2;
        if ($char == 'c') {
            echo 22;
        } elseif ($char == 'b') {
            echo 2;
        }
    } elseif ($char == 'd' || $char == 'e' || $char == 'f') {
        echo 3;
        if ($char == 'f') {
            echo 33;
        } elseif ($char == 'e') {
            echo 3;
        }
    } elseif ($char == 'g' || $char == 'h' || $char == 'i') {
        echo 4;
        if ($char == 'i') {
            echo 44;
        } elseif ($char == 'h') {
            echo 4;
        }
    } elseif ($char == 'j' || $char == 'k' || $char == 'l') {
        echo 5;
        if ($char == 'l') {
            echo 55;
        } elseif ($char == 'k') {
            echo 5;
        }
    } elseif ($char == 'm' || $char == 'n' || $char == 'o') {
        echo 6;
        if ($char == 'o') {
            echo 66;
        } elseif ($char == 'n') {
            echo 6;
        }
    } elseif ($char == 'p' || $char == 'q' || $char == 'r' || $char == 's') {
        echo 7;
        if ($char == 's') {
            echo 777;
        } elseif ($char == 'r') {
            echo 77;
        } elseif ($char == 'q') {
            echo 7;
        }
    } elseif ($char == 't' || $char == 'u' || $char == 'v') {
        echo 8;
        if ($char == 'v') {
            echo 88;
        } elseif ($char == 'u') {
            echo 8;
        }
    } elseif ($char == 'w' || $char == 'x' || $char == 'y' || $char == 'z') {
        echo 9;
        if ($char == 'z') {
            echo 999;
        } elseif ($char == 'y') {
            echo 99;
        } elseif ($char == 'x') {
            echo 9;
        }
    }
    echo ' ';
}
