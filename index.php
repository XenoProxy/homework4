<?php
//task 1 ==================================
echo '<br> Task 1 <br>';
echo ucwords('london is the capital of great britain') . '<br>';

//task 2 ==================================
echo '<br> Task 2 <br>';
$str = 'html <b>css</b> php';
$new_str = str_replace(["<b>", "</b>"], "", $str);
$arr = explode(" ", $new_str);
print_r($arr);

//task 3 ==================================
echo '<br><br> Task 3 <br>';
echo str_shuffle('A tag is a keyword or label that categorizes your question with other, similar questions.') . '<br>';

//task 4 ==================================
echo '<br> Task 4 <br>';
$month = date('m'); // нахожу текущий месяц
echo date('t', $month) . '<br>'; //при помощи параметра 't' узнаю, сколько дней в текущем месяце (передан вторым параметром)

//task 5 ==================================
echo '<br> Task 5 <br>';
echo date('Y-m-d') . '<br>' .
    date('d.m.Y') . '<br>' .
    date('d.m.y') . '<br>' .
    date('H:i:s') . '<br>';

echo date('d-m-Y', mktime(0, 0, 0, 11, 20, 22)) . '<br>';


//task 6 ==================================
echo '<br> Task 6 <br>';
$date = '2025-12-31';
echo 'Исходная дата ' . date('Y-m-d', strtotime($date)) . '<br>';// перевожу строку в формат даты

// +2 дня
// прибавляю кол-во секунд, соответствующее 10 дням
$two_days =  2 * 24 * 3600;
echo '+2 дня ' . date('Y-m-d', strtotime($date) + $two_days) . '<br>';

// +1 месяц и 3 дня
$one_month = 31 * 24 * 3600;
$three_days = 3 * 24 * 3600;
echo ' +1 месяц и 3 дня ' . date('Y-m-d', strtotime($date) + $one_month + $three_days) . '<br>';

// +1 год
$one_year = 12 * 31 * 24 * 3600;
echo '+1 год ' . date('Y-m-d', strtotime($date) + $one_year) . '<br>';

// -3 дня
echo '-3 дня ' . date('Y-m-d', strtotime($date) - $three_days) . '<br>';

//task 7 ==================================
echo '<br> Task 7 <br>';
$str = '1a2b3c4b5d6e7f8g9h0';
// 1 вариант - при помощи функции
$nums = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
echo str_replace($nums, "", $str) . '<br>';

// 2 вариант - при помощи функции и регулярки
// preg_replace выполняет поиск и замену по регулярному выражению
echo preg_replace( "/\d/", "", $str) . '<br>';

//task 8 ==================================
echo '<br> Task 8 <br>';
$arr = [4, -2, 5, 19, -130, 0, 10];
echo "Min: " . min($arr) . '<br>';
echo "Max: " . max($arr) . '<br>';

//task 9 ==================================
echo '<br> Task 9 <br>';
echo 'Случайное число от 1 до 100: ' . rand(1, 100) . '<br>';

//task 10 ==================================
echo '<br> Task 10 <br>';
$week = array(
    "1"=>"Понедельник", 
    "2"=>"Вторник", 
    "3"=>"Среда",
    "4"=>"Четверг",
    "5"=>"Пятница",
    "6"=>"Суббота",
    "7"=>"Воскресенье",
);
$num = date('N');
print_r($week[$num]);

//task 11 ==================================
echo '<br><br> Task 11 <br>';
$two_D_arr = [[1, 2, 3], [4, 5], [6]];
$sum1 = 0;
$sum2 = 0;
for ($i = 0; $i < count($two_D_arr); $i++){
    for ($y = 0; $y < count($two_D_arr[$i]); $y++){
        $sum2 += $two_D_arr[$i][$y];
    }
    $sum1 += $sum2;
}
echo $sum2 . '<br>';

//task 12 ==================================
echo '<br> Task 12 <br>';
$array = array(1,1,1,2,2,2,2,3);
echo $array[$y-1] . ' ';
for ($y = 1; $y < count($array); $y++){
    if($array[$y] === $array[$y-1]){
        continue;
    }else{
        echo $array[$y] . ' ';
    }
}
echo '<br>';

//task 13 ==================================
echo '<br> Task 13 <br>';
$navigation = array(
    "index"=>"Home", 
    "about"=>"About", 
    "services"=>"Services",
    "catalog"=>"Catalog",
    "contacts"=>"Contacts"
);
echo "<ul>";
foreach($navigation as $item => $item_count) {
    echo "<li><a href=\"$item_count.php\">$item</a></li>";
}
echo "</ul><br>";

//task 14 ==================================
echo '<br> Task 14 <br>';
echo "<div style=\"background-color: black;\">";
for($i=1; $i<=10; $i++){
    $a = rand(10, 100);
    echo "<div style='width: ${a}px; height: ${a}px; margin: $a; padding: $a; background-color: red'></div>";
}
echo "</div>";

//task 15 ==================================
echo '<br> Task 15 <br>';
$str = '1234567890';
$arr = [];
for($i = 0; $i+$count < strlen($str); $i+=$count){
        $count++;
}
$index = 0;
for($i = 1; $i <= $count; $i++){
    if($i == $count){
        $arr[$i-1] = substr($str, $index, strlen($str) - $index);
    } else{
        $arr[$i-1] = substr($str, $index, $i);
        $index += $i;
    }
}
print_r($arr);

//task 16 ==================================
echo '<br> Task 16 <br>';

//task 17 ==================================
echo '<br> Task 17 <br>';

//task 18 ==================================
echo '<br> Task 18 <br>';

//task 19 ==================================
echo '<br> Task 19 <br>';

//task 20 ==================================
echo '<br> Task 20 <br>';
?>