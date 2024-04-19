<?php
    $Number = $_POST['Number'];
    
    $Array_Number = array('零','壹','貳','參','肆','伍','陸','柒','捌','玖');
    $Array_Unit = array('元','拾','佰','仟','萬','拾萬','佰萬','仟萬','億');

    $result = '';
    $str_length = strlen($Number);
    $j = 0;
    $hasZero = false; // 判斷是否需要添加「零」

    for($i = 0; $i < $str_length; $i++){
        $Temp = $Number % 10;
        if ($Temp == 0) {
            $hasZero = true;
        } else {
            if ($hasZero) {
                $result = '零' . $result; // 添加「零」
                $hasZero = false;
            }
            $result = $Array_Number[$Temp] . $Array_Unit[$j] . $result;
        }
        $j = $j + 1;
        $Number = (int)($Number / 10);
    }
    if ($hasZero) {
        $result = '零' . $result; // 如果最後一位是零，需要補上
    }
    $result .= '圓整'; // 加上「圓整」
    echo $result;
?>
