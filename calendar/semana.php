<?php

function una_semana_despues($fecha){
    $months=["enero"=>"1","febrero"=>"2","marzo"=>"3","abril"=>"4","mayo"=>"5","junio"=>"6","julio"=>"7","agosto"=>"8","setiembre"=>"9","octubre"=>"10","noviembre"=>"11","diciembre"=>"12"];
    $parts=explode(' ',$fecha); 
    $day=$parts[0];
    $month=$months[$parts[2]];
    $year=$parts[4];
    $date_unix=strtotime("$year-$month-$day +1 week");
    return date("l d F Y" , $date_unix) ;
}
    echo una_semana_despues("29 de diciembre del 2019");
    echo "probando";
    

