<?php
date_default_timezone_set('America/Lima');

$current=(isset($_GET['week']))?$_GET['week']:date("l-d-F-Y");

    $current_parts=explode('-',$current); 
    $current_string=$current_parts['0']."-".$current_parts['1']."-".$current_parts['2']."-".$current_parts['3'];    
    $current_unix=strtotime($current_string); 

    $current_date=date("l-d-F-Y",$current_unix); 

$prev_week=date("l-d-F-Y",strtotime("-7 week",$current_unix)); 

$next_week=date("l-d-F-Y",strtotime("+7 week",$current_unix)); 

echo "<h1>$current_date</h1>";

echo "<div>";
echo "<a href='week.php?date=$prev_week'>prev week</a>";
echo " - ";
echo "<a href='week.php?date=$next_week'>next week</a>";
echo "</div>";

// echo "<br>";
// echo "<br>";
// echo "<div><a href='numbers.php'>number 100</a></div>";
// echo "<div><a href='days.php'>today</a></div>";
// echo "<div><a href='months.php'>this month</a></div>";
