<?php
//2) На входе имеем список строк разной длины.
//Необходимо написать функцию all_eq(lst), которая вернет новый список из строк одинаковой длины.
//Длину итоговой строки определяем исходя из самой большой из них.
//Если конкретная строка короче самой длинной, дополнить ее нижними подчеркиваниями с правого края
// до требуемого количества символов.
//Расположение элементов начального списка не менять.
//
//# Тесты
//all_eq(['крот', 'белка', 'выхухоль']) -> ['крот____', 'белка___', 'выхухоль']
//all_eq(['a', 'aa', 'aaa', 'aaaa', 'aaaaa']) -> ['a____', 'aa___', 'aaa__', 'aaaa_', 'aaaaa']
//all_eq(['qweasdqweas', 'q', 'rteww', 'ewqqqqq']) -> ['qweasdqweas', 'q__________', 'rteww______', 'ewqqqqq____']

$lst1 = ['крот', 'выхухоль', 'белка'];
$lst2 = ['a', 'aa', 'aaa', 'aaaa', 'aaaaa'];
$lst3 = ['qweasdqweas', 'q', 'rteww', 'ewqqqqq'];
function all_eq($lst){
    $maxSize = 0;
    foreach ($lst as $str){
        if (iconv_strlen($str) > $maxSize) {
            $maxSize = iconv_strlen($str);
        }
    }
    $k = 0;
    foreach ($lst as $str) {
        if (iconv_strlen($str) < $maxSize){
            $total = $maxSize - iconv_strlen($str);
            $add = str_repeat('_', $total);
            $lst[$k] = $str.$add;
        }else{
            $lst[$k] = $str;
        }
        $k++;
    }
    print_r($lst);
}
all_eq($lst1);