<?php

    require_once("utils.php");

    /**
     * Function receives an array with integer numbers,
     * should return its sum. It is not alowed to use built-in php functions.
     *
     * Функция получает на вход массив чисел, должна вернуть сумму этих чисел.
     * Не использовать встроенные функции суммирования php.
     *
     * @param array $arr
     * @return integer
     */
    function my_sum($arr) {
        for ($i=0; $i < count($arr); $i++) { 
            $sum += $arr[$i];
            //echo $sum;
            
    }
    return $sum;
    }
    //my_sum($arr);


    /**
     * Function receives a long string with many words.
     * It should return the same string, but words,
     * larger then 6 symbols, should be changed, symbols
     * after the sixth one should be replaced by symbol *
     *
     * Функция получает на вход длинную строку с множеством слов.
     * Она должна вернуть ту же строку, но в словах, которые длиннее 6 символов,
     * функция должна вместо всех символов после шестого поставить одну звездочку.
     * Пример: Из слова 'verwijdering' должно получиться 'verwij*'
     *
     * @param string $shortMe
     * @return string
     */
    function shortener($shortMe) {
        //echo $shortMe . "\n";
        $ar = explode(" ", $shortMe); // сделать мааис слов
        $new = [];
        foreach ($ar as $value){
        $long = strlen($value);//находим длину каждого элемента
        //echo $long;
        If ($long > 6) $value = substr($value, 0, 6) . '*';
        $new[]=$value;
    }
    $res = implode(" ", $new);
    //echo $res;
    return $res;
    }



    /**
     * Function receives an array of strings.
     * Please return number of strings, which
     * length is at least 2 symbols and first character
     * is equal to the last character
     *
     * Функция получает на вход массив строк. Вернуть надо количество строк,
     * которые не короче двух символов и у которых первый и последний
     * символ совпадают.
     *
     * @param array $arr
     * @return number
     */
    function compare_ends($arr) {
      //  print_r($arr);
        $res = 0;
        for($i=0; $i< count($arr); $i++){
        $long = strlen($arr[$i]);//находим длину каждого элемента массива
        //echo $long;
        if ($arr[$i][0] == $arr[$i][$long - 1] && $long >=2) $res += 1;
    }
    //echo $res;
    return $res;
}



    /**
     * Function receives a string, should return this string reversed.
     *
     * Функция получает на вход строку, должна вернуть ее перевернутой.
     *
     * @param string $str
     * @return string
     */
    function reverse_string($str) {
        echo $str . PHP_EOL;
        $str2 = '';
        $count = strlen($str);
        //echo $count. PHP_EOL;
        for($i=1;$i<=$count;$i++){
        $str2 .= substr($str,-$i,1);
        If ($count == strlen($str2))
        echo $str2. PHP_EOL;
    }
    return $str2;
}

test_shortener();

test_compare_ends();

test_my_sum();

test_reverse_string();










