<?php

date_default_timezone_set('America/Chicago');

$christmas = strtotime('December 25');
$currentTime = time();

echo 'Days until Christmas : ' . ceil(($christmas - $currentTime)/60/60/24);