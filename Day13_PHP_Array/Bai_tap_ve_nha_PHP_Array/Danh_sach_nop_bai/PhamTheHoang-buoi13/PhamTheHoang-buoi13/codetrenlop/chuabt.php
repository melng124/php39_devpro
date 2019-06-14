<?php
function factorial($n){
    if($n<0){
        return 'Không ch phép tính giai thừa trên soos âm';
    }
    $mutial=1;
    $resultText="$n! = ";
    for($i=1;$i<=$n;$i++){
        $resultText.=$i;
        $mutial*=$i;
        if($i<$n) $resultText .=" * ";
        else $resultText .=" = ";
    }
    $resultText .= $mutial;
    return $resultText;

}
$a=factorial(5);
echo $a;
?>