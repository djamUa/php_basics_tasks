<?php

$day = 7;
switch ($day){
    case 0:
        echo "Неизвестный день";
        break;
    case ($day >=1 and $day <=5 ):
        echo "Это рабочий день";
        break;
    case ($day ==6 or $day ==7 ):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}

?>

