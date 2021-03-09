<?php

date_default_timezone_set('America/Chicago');

// Monday 6th April 2015
echo date('l, jS F Y');
echo "<br>";

// Today is ...
echo 'Today is '. date('l');
echo "<br>";

// Monday 06 April, 2015
echo date('l d F, Y');
echo "<br>";

// 2015/04/06
echo date('Y/m/d');
echo "<br>";

// Monday 6th April 2015, 3:12 PM
echo date('l jS F Y, h:i A');
echo "<br>";

// leap year test
if(date('L')) {
    echo date('Y') . ' is a leap year';
} else {
    echo date('Y') . ' is not a leap year';
}