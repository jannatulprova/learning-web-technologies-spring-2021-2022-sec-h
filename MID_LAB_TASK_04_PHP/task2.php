<?php
   function vat($price,$vat=15) 
   {

    $vat_added_price=0;
    $vat_added_price= $price + ($vat*($price/100));
    $vat_added_price= round($vat_added_price, 2);
    return $vat_added_price;
   }
echo vat(15);

?>