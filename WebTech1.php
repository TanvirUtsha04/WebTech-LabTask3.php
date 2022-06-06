#1

<?php
$length = 14;
$width = 8;
$p = NULL;
$area = $length * $width;
$p = 2*($length*$width);
echo "area of reactangle = ".$p;
?><br>

#2

<?php
$vat =15;
$printExVat = 27;
$vatToDue = ($priceExVat/100)*$vat;
$totalPriceInVat = $priceExVat +$vatToDue;
echo "Total Price Include VAT : ";
echo number_format($totalPriceInVat, 2);
?><br>


#3


<?php
$number = 20;
if($number % 2 == 0){
	echo "Even";
}
else{
	echo "Odd";
}
?><br>


#4

<?php
$a = 6;
$b = 7;
$c = 10;

if(($a>$b) && ($a>$c))
{
	echo " a is the largest number";
}
elseif(($b>$a) && ($b>$c))
{
	echo " b is the largest number";
}

else
{
	echo " c is the largest number";
}
?><br>


#5


<?php
echo "The Odd number between 10 to 100";

for ($i=10; $i<=100; $i++)

{
   if($i%2==1)
   {
       echo $i." ";
   }


}
?><br>   














