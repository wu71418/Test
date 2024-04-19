<?php
    $Age=$_POST['Age'];
    $Money=$_POST['Money'];
    $Rate=$_POST['Rate'];

    $Rate=$Rate/100;

    $Temp=65-$Age;
    $result="本金為".$Money."，利率為".$Rate."%，經由".$Temp."期的複利後可獲得";
    for($i=1;$i<=(65-$Age);$i++)
    {
        $Money=$Money*((1+$Rate)*$i);
    }
    $result=$result.$Money."元";
    echo $result;
?>