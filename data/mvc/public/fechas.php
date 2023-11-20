<?php

$cadenafecha= "12/10/2022";

$fecha= DateTime::createFromFormat("d/m/Y",$cadenafecha);
echo "<br> Objeto fecha";

var_dump($fecha);

$sfecha= $fecha->format('#Y#m#d');
echo "$sfecha";