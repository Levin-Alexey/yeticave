<?php
function format_num($num): string
{
$num = ceil($num);
if ($num > 1000){
    $num = number_format($num, 0, '', ' ');
}
return $num . " " ."₽";
}
