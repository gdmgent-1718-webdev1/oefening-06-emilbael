<?php
$today = new dateTime();
echo "Vandaag zijn we " . $today->format('m-d-Y'). "</br>";

$lente = new DateTime('March 20');
$zomer = new DateTime('June 20');
$herfst = new DateTime('September 22');
$winter = new DateTime('December 21');

switch(true) {
    case $today >= $lente && $today < $zomer:
        echo 'Het is lente!';
        break;

    case $today >= $zomer && $today < $herfst:
        echo 'Het is zomer!';
        break;

    case $today >= $herfst && $today < $winter:
        echo 'Het is herfst!';
        break;

    default:
        echo 'Het is winter!';
}
?>