<?php
    $Number=$_POST['Number'];
    
    $Array_Number=array('零','壹','貳','參','肆','伍','陸','柒','捌','玖');
    $Array_Unit=array('元','拾','佰','仟','萬','拾','佰','仟','萬','億');

    $result='';
    $str_length=strlen($Number);
    $j=0;

    for($i=0;$i<$str_length;$i++){
        $Temp=$Number %10;
        $result=$result.$Array_Number[$Temp];
        $result=$result.$Array_Unit[$j];
        $j=$j+1;
        $Number=(int)($Number/10);
    }
    echo $result;
?>