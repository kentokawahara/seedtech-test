<?php
    //問1
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo 'FizzBuzz';
        } elseif ($i % 5 === 0) {
            echo 'Buzz';
        } elseif ($i % 3 === 0) {
            echo 'Fizz';
        } else {
            echo $i;
        }
            echo '<br>';
    }

    //問2
    for($n = 2; $n < 10000; $n++) {
        $amarinashi = 0;
        for($i = 2; $i <= $n ; $i++){
            if ($n % $i === 0) {
                $amarinashi++;
            }
        }
        if ($amarinashi<2){
            echo $n;
            echo '<br>';
        }
    }
    
    //問3
    $human = array(
        array("男", "女"),
        array("成人", "未成年"),
        array("文系", "理系"),
        array("既婚者", "独身"),
        array("白人", "黒人", "黄人"),
      );
      
    echo 'あなたは'.$human[0][1].$human[1][1].$human[2][1].$human[3][1].$human[4][1].'です';



?>