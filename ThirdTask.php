<?php
//3) Предоставлен список натуральных чисел. Требуется сформировать из них множество.
// Если какое-либо число повторяется, то преобразовать его в строку по образцу:
// например, если число 4 повторяется 3 раза, то в множестве будет следующая запись:
// само число 4, строка «44» (второе повторение, т.е. число дублируется в строке),
// строка «444» (третье повторение, т.е. строка множится на 3). Реализуйте вывод множества через функцию set_gen().
//
//# Тесты
//list_1 = [1, 1, 3, 3, 1]
//list_2 = [5, 5, 5, 5, 5, 5, 5]
//list_3 = [2, 2, 1, 2, 2, 5, 6, 7, 1, 3, 2, 2]
//set_gen(list_1)  -> {1, 3, '111', '33', '11'}
//set_gen(list_2) -> {'5555555', 5, '55', '55555', '5555', '555555', '555'}
//set_gen(list_3) -> {1, 2, 3, 5, 6, 7, '22', '2222', '22222', '222', '11', '222222'}

$list_1 = [1, 1, 3, 3, 1];
$list_2 = [5, 5, 5, 5, 5, 5, 5];
$list_3 = [2, 2, 1, 2, 2, 5, 6, 7, 1, 3, 2, 2];
function set_gen($list){
    $items_count = [];
    $k=0;
    foreach ($list as $item){
        if ($items_count[$item]>=1){
            $items_count[$item]++;
        }else{
            $items_count[$item]=1;
        }
        $k++;
    }
    print_r($items_count);
    $add = [];
    foreach ($items_count as $k=>$v) {
        if ($v>1){
            for ($i = $v;$i>1; $i--){
                $str=str_repeat($k, $i);
                $add[]= $str;
            }
        }else{
            $add[] = $k;
        }

    }
    echo "<pre>";
    print_r($add);
}
set_gen($list_3);