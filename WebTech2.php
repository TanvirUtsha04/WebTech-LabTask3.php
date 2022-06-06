<?php
$vat =15;
$printExVat = 27;
$vatToDue = ($priceExVat/100)*$vat;
$totalPriceInVat = $priceExVat +$vatToDue;
echo "Total Price Include VAT : ";
echo number_format($totalPriceInVat, 2);
?><br>