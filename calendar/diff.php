<?php

$birth=date_create('1999-07-05');
$today=date_create('today');
$interval = date_diff($birth, $today);
echo $interval->format('yo nací hace %y años %m meses y %d días')."<br>";

