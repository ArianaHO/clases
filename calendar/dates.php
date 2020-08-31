<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="cssdates.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>
    Dates
    </title> 

</head>

<body>
<?php

$days_week=["Domingo","Lunes","Martes","Miercolés","Jueves","Viernes","Sabado"];
$months=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre"];
$current_month=1;

date_default_timezone_set('America/Lima');

// echo date("Y-m-d"); 

echo "La hora actual es ". date("g:iA"). "<br>";
echo  "Today is ". date("l,d F Y"). "<br>";
echo "Hoy es ". $days_week[date("w")].", ". date("d"). " de ". $months[date("n")-1]. " del ". date("Y"). "<br>";

$unix_yesterday=strtotime("-1 day");
echo  "Yesterday was ". date("l,d F Y", $unix_yesterday). "<br>";

$unix_tomorrow=strtotime("+1 day");
echo  "Tomorrow is ". date("l,d F Y", $unix_tomorrow). "<br>";

$unix_month=strtotime("-1 month");
echo  "The past month was ". date("F", $unix_month). "<br>";

$unix_year=strtotime("+1 year");
echo  "The next year is ". date("Y", $unix_year). "<br>";

$unix_birthday=strtotime("1999-07-05"); 
echo "Nací el ". $days_week[date("w", $unix_birthday)].", ". date("d", $unix_birthday). " de ". $months[date("n", $unix_birthday)-1]. " del ". date("Y", $unix_birthday). "<br>";

$unix_current=strtotime("today"); 
$diff_years= ($unix_current - $unix_birthday) / (24*60*60);
echo $diff_years. "<br>"; 

echo "<br>";
echo "Desde aquí son mis modificaciones, osea , para abajo" ."<br>";
echo "<br>";

echo "La hora actual es ". date("g:i a"). "<br>";
echo "Son las ". date("g:i"). " de la madrugada". "<br>";

$unix_tomorrow=strtotime("+1 day");
echo  "Tomorrow is ". date("d" . "/". "m". "/" ."Y", $unix_tomorrow). "<br>";

$unix_tomorrow=strtotime("+1 day");
echo  "Mañana es ". date("d" . "/". "m". "/" ."Y", $unix_tomorrow). "<br>";

$unix_birthday=strtotime("1999-07-05"); 
echo "El  ". date("d", $unix_birthday). " de ". $months[date("n", $unix_birthday)-1]. " del ". date("Y", $unix_birthday)." fue ". $days_week[date("w", $unix_birthday)]. "<br>"; 

$unix_yesterday=strtotime("-1 day");
echo  "Ayer fue ". $days_week[date("w", $unix_yesterday)].", ". date("d", $unix_yesterday). " de ". $months[date("n", $unix_yesterday)-1]. " del ". date("Y", $unix_yesterday). "<br>";   

echo "Mi edad es 21 años 1 mes y 22 dias". "<br>";
echo "<br>";

$unix_current=strtotime("today"); 
$diff_years= ($unix_current - $unix_birthday) / (365*24*60*60);
echo "EN DECIMAL". "<br>";
echo $diff_years. "<br>"; 

echo "<br>";

$diff_entero=(($diff_years)*21/21.164383561644);
echo "EN ENTERO". "<br>";
echo $diff_entero. "<br>"; 

echo "<br>";

echo "<br>";


$birth=date_create('1999-07-05');
$today=date_create('today');
$interval = date_diff($birth, $today);
echo $interval->format('yo nací hace %y años %m meses y %d días')."<br>";

// echo sqrt(4);

function raiz_cuadrada($number){
    return sqrt($number);
}
    echo raiz_cuadrada(16) . "<br>";

function letra($word){
    return "Sopa". $word;
}
    echo letra(" caliente");
    


;


?>

</body>