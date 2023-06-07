<?php
$acumuladora=0;
$contadora=0;
do {$compra=readline( "ingrese el precio:");
    $acumuladora += $compra;
    $contadora ++;
   $resp =readline ("quiere otra compra? S/N :"); 
}while (strtoupper ($resp) =='S');{
    echo " el total vendido es de $: $acumuladora  ".PHP_EOL;
    $promedio =$acumuladora/$contadora;
    echo "el precio de venta fue :$ $promedio" .PHP_EOL;
    echo "gracias por su copra";

}
