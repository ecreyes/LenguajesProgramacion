<?php
#creando arreglo de [0-6]
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
#añadiendo el elemento 7
$semana[7]="Dia extra";
echo $semana[7];

#otra forma de escribir arreglos
$colores = ['blanco','negro','azul'];
echo $colores[0];

#los arreglos pueden contener valores de cualquier tipo
$arreglo = [1,'dos',true];
echo $arreglo[2];
echo "</br>";
#numero de elementos de un arreglo
echo count($colores);
?>