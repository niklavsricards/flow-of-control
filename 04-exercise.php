<?php

$dayNumber = (int) readline('Enter a day number (0 - 6): ');

if ($dayNumber >= 0 && $dayNumber < 7) {
    if ($dayNumber == 0) {
        echo "Sunday";
    } elseif ($dayNumber == 1) {
        echo "Monday";
    }elseif ($dayNumber == 2) {
        echo "Tuesday";
    }elseif ($dayNumber == 3) {
        echo "Wednesday";
    }elseif ($dayNumber == 4) {
        echo "Thursday";
    }elseif ($dayNumber == 5) {
        echo "Friday";
    }else {
        echo "Saturday";
    }
} else {
    echo "Not a valid day";
}