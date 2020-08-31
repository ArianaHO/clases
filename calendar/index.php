<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="css.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title>
    Calendario 
    </title> 

</head>

<body>

<?php
    $days_week=["Domingo","Lunes","Martes","Miercolés","Jueves","Viernes","Sabado"];
    $months=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre"];
    $current_day=2;
    $current_month=8;
    $current_year=2020;
    $total_days_month=31;
    $days_before_start=5;

    $days=[];
    // loop before the first day of the month
    for ($i=1; $i<=$days_before_start+1; $i++){
        $days[]="-";
    }
    
    // loop for the days of the month
    for ($i=1; $i<=$total_days_month; $i++){
        $days[]=$i;
    }
    $days_after_finish=7 - ( ($total_days_month+$days_before_start+1)%7); 
    // echo $days_after_finish; 

    // loop for the days after the end of the month
    for ($i=1; $i<=$days_after_finish; $i++){
        $days[]="-";
    }

    // render the calendar 
    echo '<table class="calendar">';

    // days of week
    echo "<tr>";
    foreach ($days_week as $day){
        echo "<td class='week'>".substr($day,0,3)."</td>";
    }
    echo "</tr>";

    // all days 
    echo "<tr>";
    foreach ($days as $i => $item){
        if ($i %7 ==0) {
            $sun="sun";
        }
        else {
            $sun="";
        }
        echo "<td class='".$sun."'>".$item."</td>";
        if ($i %7 ==6) {
            echo "</tr><tr>";
        }
    }

    echo "</tr>";
    echo "</table>"
?>

</body>

