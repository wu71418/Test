<?php
    $Num_1=$_POST['Num1'];
    $Num_2=$_POST['Num2'];

    echo $Num_1."<br>".$Num_2;

    echo "<br>";

    function Fraction($Num_1,$Num_2){
        $result='';
        for($i=2;$i<=$Num_1;$i++)
        {
            if($Num_1 %$i== 0 and $Num_2 %$i==0)
            {
                $Num_1 =$Num_1 / $i;
                $Num_2 =$Num_2 / $i;
            }   
        }
        $result = $Num_1 ."/". $Num_2;
        return $result;
    }

    echo Fraction($Num_1,$Num_2);
?>