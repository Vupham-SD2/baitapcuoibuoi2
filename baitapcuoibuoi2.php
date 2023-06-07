<?php


//cau 1
function checkEven($number)
{
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
if (checkEven(6)) {
    echo "6 là số chẵn".'<br />';
} else {
    echo "6 không phải là số chẵn".'<br />';
}
//cau 2
function totalNumber($totalNumber) {
    $mang = range(1, $totalNumber);
    return array_sum($mang); //tra ve gia tri
}
echo totalNumber(10).'<br />';
//cau3
    function multiplicationtable() {
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                echo "$i x $j = " . $i * $j . "<br />";
            }
            echo "\n";
        }
    }
    multiplicationtable();
//cau4
function checkWord($chuoi, $tu) {
    if (strpos($chuoi, $tu) !== false) // so sánh không đồng nhất
    {
        return true;
    } else {
        return false;
    }
}

$chuoi = "Hello World";
$tu = "World";

if (checkWord($chuoi, $tu)) {
    echo "Chuỗi '$chuoi' có chứa từ '$tu'". "<br />";
} else {
    echo "Chuỗi '$chuoi' không chứa từ '$tu'". "<br />";
}

//cau5
function checkMinMax($array) {
    $max = max($array);
    $min = min($array);
    return array($min, $max);
}

$array = array(5, 11, 6, 17, 14);
list($min, $max) = checkMinMax($array);

echo "Giá trị lớn nhất: $max <br />";
 
echo "Giá trị nhỏ nhất: $min <br />";

//cau6
function arrAscending($array) {
    $array = array(12, 24, 5, 1, 32);
    sort($array);
    print_r($array);
}
    arrAscending($array);
    echo "<br />";
//cau7
function checkFactorial($n) {
    $giaiThua = 1;
    for($i = 1; $i <= $n; $i++) {
        $giaiThua *= $i;
    }
    return $giaiThua;
}

echo checkFactorial(5);
echo "<br />";

//cau8
function checkPrime($prime) { //kiem tra so nguyen to
    if($prime <= 1) {
        return false;
    }
    for($i = 2; $i <= sqrt($prime); $i++) { //ham sqrt can bac 2
        if($prime % $i == 0) { // check chia het trc can bac 2
            return false;
        }
    }
    return true;
}

function findPrime($start, $end) {
    for($i = $start; $i <= $end; $i++) {
        if(checkPrime($i)) {
            echo $i . " ";
        }
    }
}

    echo "Các số nguyên tố là: ";
    findPrime(1, 100);
    echo "<br />";

//cau 9
function sumTotal($arr) {
    $total = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $total += $arr[$i];
    }
    return $total;
}

$numbers = array(1, 2, 3, 4, 5);
echo sumTotal($numbers);
//cau10
function printFibonacci($start, $end){
    $num1 = 0;
    $num2 = 1;
    while ($num2 <= $end){
        if ($num2 >= $start){
            echo ' '.$num2;
        }
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
    }
}

    $start = 10;
    $end = 100;
    echo "Các số Fibonacci là:";
    printFibonacci($start, $end);
    echo "<br />";

//cau11 - khó
function isArmstrong($number) {
    $sum = 0;
    $numberOfDigits = strlen($number);
    $copyOfNumber = $number;
    while ($copyOfNumber != 0) {
        $lastDigit = $copyOfNumber % 10;
        $sum = $sum + pow($lastDigit, $numberOfDigits);
        $copyOfNumber = (int)($copyOfNumber / 10);
    }
    if ($number == $sum) {
        return true;
    } else {
        return false;
    }
}
    echo isArmstrong(153) ? "là số Armstrong" : "không phải là số Armstrong";
    echo "<br />"; //condition ? value_if_true : value_if_false
//cau12
function addArray($array, $element, $position) {
    $newArray = array();
    for ($i = 0; $i < count($array); $i++) {
        if ($i == $position) {
            $newArray[] = $element;
        }
        $newArray[] = $array[$i];
    }
    return $newArray;
}

$numbers = array(1, 2, 3, 4, 5);
print_r(addArray($numbers, 6, 2));
//cau13
function removeRepeat($arr) {
    $newArr = array();
    for ($i = 0; $i < count($arr); $i++) {
        if (!in_array($arr[$i], $newArr)) {
            array_push($newArr, $arr[$i]);
        }
    }
    return $newArr;
}

$numbers = array(1, 2, 3, 4, 5, 2, 3);
print_r(removeRepeat($numbers));

//cau14
function searchKey($arr, $key) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $key) {
            return $i;
        }
    }
    return -1;
}

$numbers = array(1, 2, 3, 4, 5);
echo searchKey($numbers, 3);
//cau15
function rvString($str) {
    $newStr = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $newStr .= $str[$i];
    }
    return $newStr;
}

$string = "Hello World!";
echo rvString($string);
//cau16
function countElement($array) {
    return count($array);
}
    $array = array('LOL', 'FM23', 'SM23');
    echo countElement($array);
    echo "<br />";

//cau17
function checkPalindrome($string) {
    $string = strtolower(str_replace(' ', '', $string)); //bỏ khoảng trắng và đổi thành chữ thường
    if ($string == strrev($string)) { //đảo ngược str
        echo "Chuỗi '".$string."' là chuỗi Palindrome";
    } else {
        echo "Chuỗi '".$string."' không phải là chuỗi Palindrome";
    }
}

    checkPalindrome("Madam"); //Race car
    echo "<br />";
//cau18
function countElement ($arr, $element) {
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $element) {
            $count++;
        }
    }
    return $count;
}

$numbers = array(1, 2, 3, 4, 5, 2);
echo countElement($numbers, 2);
//cau19
function arrangeDesc($array) {
    rsort($array);
    return $array;
}
    $array = array(3, 2, 5, 1, 4);
    $array = arrangeDesc($array);
    print_r($array);
    echo "<br />";
//cau20
function addElement($array, $element, $position) {
    if ($position == 'start') {
        array_unshift($array, $element);
    } else {
        array_push($array, $element);
    }
    return $array;
}
    $array = array(1, 2, 3);

    $array = addElement($array, 4, 'end');
    print_r($array);
    echo "<br />";

    $array = addElement($array, 0, 'start');
    print_r($array);
    echo "<br />";

//cau21
function searchSecond($array) {
    rsort($array); //sap xep giam dan roi lay phan tu thu 2
    return $array[1];
}
    $array = array(1, 3, 5, 7, 9);
    echo "Số lớn thứ hai trong mảng là: " . searchSecond($array);
    echo "<br />";
//cau22
function findUCLN($a, $b) {
    if ($b == 0) return $a;
    return findUCLN($b, $a % $b);
}

function findBCNN($a, $b) {
    return ($a * $b) / findUCLN($a, $b); // BCNN=axb/UCLN
}

    $a = 12;
    $b = 18;
    echo "UCLN của " . $a . " và " . $b . " là: " . findUCLN($a, $b) . "<br>";
    echo "BCNN của " . $a . " và " . $b . " là: " . findBCNN($a, $b);
    
    echo "<br />";

//cau23
function isPfnum($n) {
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $n;
}
    echo isPfnum(28) ? "28 là số hoàn hảo" : "28 không phải là số hoàn hảo"; //condition ? value_if_true : value_if_false
    echo "<br />";

//cau24
function searchOdd($array) {
    $maxOdd = null;
    foreach ($array as $value) {
        if ($value % 2 == 1 && ($maxOdd == null || $value > $maxOdd)) //ktra max odd
        {
            $maxOdd = $value;
        }
    }
    return $maxOdd;
}
    $array = array(1, 2, 3, 4, 5, 17, 7, 8, 9);
    echo searchOdd($array);
    echo "<br />";

//cau25
function searchPrime($prime) {
    if ($prime <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($prime); $i++) { //sqrt can bac 2
        if ($prime % $i == 0) { 
            return false;
        }
    }
    return true;
}
    if (searchPrime(7)) {
        echo "7 là số nguyên tố";
    } else {
        echo "7 không phải là số nguyên tố";
    }
    echo "<br />";

	//cau26
function maxInteger($array) {
    $max = 0;
    foreach ($array as $value) {
        if ($value > $max && $value > 0) {
            $max = $value; //ktra integer max dể thay thế
        }
    }
    return $max;
}
    $array = array(1, 3 ,5 ,7 ,9);
    echo maxInteger($array);
    echo "<br />";

//cau27 
function maxNegativeN($array) {
    $negativeNumbers = array_filter($array, function($x) { return $x < 0; }); //lọc số âm trong mảng bằng hàm vô danh callback
    if (count($negativeNumbers) == 0) { //ktra xem hàm có phẩn tử nào ko
        return null;
    }
    return max($negativeNumbers);
}

    $array = array(1, -2, 3, -4, 5);
    echo maxNegativeN($array);
    echo "<br />";
//cau28
 function sumOdd($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) { //chia 2 mà dư thì là số lẻ
            $sum += $i; // nếu i lẻ rồi thì cộng vào $sum
        }
    }
    return $sum;
}

    $n = 15;
    echo "Tổng các số lẻ từ 1 đến $n là: " . sumOdd($n);
    echo "<br />";

//cau29
function numSquare($n) {
    for ($i = 1; $i <= $n; $i++) {
        $root = sqrt($i); //tính căn bậc 2 để tìm số nguyên
        if ($root == (int)$root) {
            echo $i." ";
        }
    }
}
    echo numSquare(100);
    echo "<br />";

//cau30
function checkString($string, $subString) {
    if (strpos($string, $subString) !== false) {
        echo "Chuỗi '".$subString."' là chuỗi con của chuỗi '".$string."'";
    } else {
        echo "Chuỗi '".$subString."' không phải là chuỗi con của chuỗi '".$string."'";
    }
}

checkString("Dai hoc Thuong Mai", "hoc");

?>