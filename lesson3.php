
<?php
//1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
echo "1.   ";
function kiemTraSoChan($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number không phải là số chẵn.";
    }
}

kiemTraSoChan(11);


// 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n. 
echo " <br> 2.   ";
function tinhTong($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

echo tinhTong(11); // Tính tổng từ 1 đến 5


// 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.

echo " <br> 3.    ";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo $i . " x " . $j . " = " . ($i * $j) . "<br>";
    }
    echo "<br>";
}



// 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.

echo " <br> 4.    ";
function kiemTraChuoi($string, $word) {
    if (strpos($string, $word) !== false) {
        echo "Chuỗi '$string' chứa từ '$word'.";
    } else {
        echo "Chuỗi '$string' không chứa từ '$word'.";
    }
}
kiemTraChuoi("Hello, world!", "world"); 



// 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.

echo " <br> 5.    ";
function timGiaTriLonNhat($arr) {
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

function timGiaTriNhoNhat($arr) {
    $min = $arr[0];
    foreach ($arr as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}

$array = [5, 2, 9, 1, 7];
echo "Giá trị lớn nhất: " . timGiaTriLonNhat($array) . "\n";
echo "Giá trị nhỏ nhất: " . timGiaTriNhoNhat($array) . "\n";


//6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. 

echo " <br> 6.    ";
function sapXepTangDan($arr) {
    sort($arr);
    return $arr;
}

$array = [5, 2, 9, 1, 7];
$sortedArray = sapXepTangDan($array);
print_r($sortedArray);



// 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.

echo " <br> 7.    ";
function tinhGiaiThua($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

echo tinhGiaiThua(5); // Tính giai thừa của số 5



// 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.

echo " <br> 8.    ";
function kiemTraSoNguyenTo($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function timSoNguyenToTrongKhoang($start, $end) {
    $primeNumbers = [];
    for ($i = $start; $i <= $end; $i++) {
        if (kiemTraSoNguyenTo($i)) {
            $primeNumbers[] = $i;
        }
    }
    return $primeNumbers;
}

$start = 1;
$end = 20;
$primeNumbers = timSoNguyenToTrongKhoang($start, $end);
echo "Các số nguyên tố trong khoảng $start đến $end là: " . implode(", ", $primeNumbers);



// 9. Viết chương trình PHP để tính tổng của các số trong một mảng.

echo " <br> 9.    ";
function tinhTongMang($arr) {
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}

$array = [5, 2, 9, 1, 7];
echo "Tổng của mảng: " . tinhTongMang($array);


// 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.

echo " <br> 10.    ";
function inSoFibonacci($n) {
    $fibonacci = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}
    
$n = 10;
$fibonacciNumbers = inSoFibonacci($n);
echo "Các số Fibonacci trong khoảng từ 0 đến $n là: " . implode(", ", $fibonacciNumbers);


// 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.

echo " <br> 11.    ";
function kiemTraSoArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $length = strlen($number);
    
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $length);
        $temp = intval($temp / 10);
    }
    
    if ($sum == $number) {
        echo "Số $number là số Armstrong.";
    } else {
        echo "Số $number không phải là số Armstrong.";
    }
}

kiemTraSoArmstrong(153); // Gọi hàm để kiểm tra số 153



// 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. 

echo " <br> 12.    ";
function chenPhanTu($arr, $element, $position) {
    array_splice($arr, $position, 0, $element);
    return $arr;
}

$array = [1, 2, 3, 4, 5];
$newArray = chenPhanTu($array, 10, 2); // Chèn số 10 vào vị trí thứ 2
print_r($newArray);


// 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.

echo " <br> 13.    ";
function loaiBoTrunglap($arr) {
    $result = array_unique($arr);
    return $result;
}

$array = [1, 2, 2, 3, 4, 4, 5];
$newArray = loaiBoTrunglap($array);
print_r($newArray);



// 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. 

echo " <br> 14.    ";
function timViTri($arr, $element) {
    $positions = [];
    foreach ($arr as $index => $value) {
        if ($value == $element) {
            $positions[] = $index;
        }
    }
    return $positions;
}

$array = [1, 2, 3, 4, 5, 3, 6];
$element = 3;
$positions = timViTri($array, $element);
echo "Vị trí của số $element trong mảng là: " . implode(", ", $positions);



// 15. Viết chương trình PHP để đảo ngược một chuỗi.

echo "<br> 15.    ";
function daoNguocChuoi($string) {
    $reversedString = strrev($string);
    return $reversedString;
}

$str = "Hello, world!";
$reversedStr = daoNguocChuoi($str);
echo $reversedStr;


// 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.

echo " <br> 16.    ";
function demPhanTu($arr) {
    $count = count($arr);
    return $count;
}

$array = [1, 2, 3, 4, 5];
echo "Số phần tử trong mảng: " . demPhanTu($array);


//17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.

echo " <br> 17.    ";
function kiemTraPalindrome($string) {
    $reversedString = strrev($string);
    if ($string == $reversedString) {
        echo "Chuỗi '$string' là chuỗi Palindrome.";
    } else {
        echo "Chuỗi '$string' không là chuỗi Palindrome.";
    }
}

kiemTraPalindrome("Hieu Minh"); 



// 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.

echo " <br> 18.    ";
function demLanXuatHien($arr, $element) {
    $count = 0;
    foreach ($arr as $value) {
        if ($value == $element) {
            $count++;
        }
    }
    return $count;
}

$array = [1, 92, 29, 92, 42, 44, 35];
$element = 92;
$count = demLanXuatHien($array, $element);
echo "Số lần xuất hiện của số $element trong mảng: " . $count;



// 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.

echo " <br> 19.    ";
function sapXepGiamDan($arr) {
    rsort($arr);
    return $arr;
}

$array = [5, 2, 9, 1, 7];
$sortedArray = sapXepGiamDan($array);
print_r($sortedArray);


// 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.

echo " <br> 20.    ";
function themPhanTuDau($arr, $element) {
    array_unshift($arr, $element);
    return $arr;
}

function themPhanTuCuoi($arr, $element) {
    $arr[] = $element;
    return $arr;
}

$array = [1, 2, 3, 4, 5];
$newArray = themPhanTuDau($array, 0); // Thêm số 0 vào đầu mảng
print_r($newArray);

$newArray = themPhanTuCuoi($array, 6); // Thêm số 6 vào cuối mảng
print_r($newArray);

// 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. 

echo " <br> 21.    ";
function timSoLonThuHai($arr) {
    $max = max($arr);
    $secondMax = null;
    
    foreach ($arr as $value) {
        if ($value < $max) {
            if ($secondMax === null || $value > $secondMax) {
                $secondMax = $value;
            }
        }
    }
    
    return $secondMax;
}

$array = [35, 12, 93, 76, 15];
$secondLargest = timSoLonThuHai($array);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;


// 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.

echo " <br> 22.    ";
function timUSCLN($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function timBSCNN($a, $b) {
    $gcd = timUSCLN($a, $b);
    $lcm = $a * $b / $gcd;
    return $lcm;
}

$num1 = 72;
$num2 = 91;
$gcd = timUSCLN($num1, $num2);
$lcm = timBSCNN($num1, $num2);
echo "Ước số chung lớn nhất của $num1 và $num2 là: " . $gcd . "\n";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: " . $lcm . "\n";



// 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.

echo " <br> 23.    ";
function kiemTraSoHoanHao($number) {
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    
    if ($sum == $number) {
        echo "Số $number là số hoàn hảo.";
    } else {
        echo "Số $number không là số hoàn hảo.";
    }
}

kiemTraSoHoanHao(98); // Gọi hàm để kiểm tra số 6



//  24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.

echo " <br> 24.    ";
function timSoLeLonNhat($arr) {
    $maxOdd = null;
    foreach ($arr as $value) {
        if ($value % 2 == 1) {
            if ($maxOdd === null || $value > $maxOdd) {
                $maxOdd = $value;
            }
        }
    }
    return $maxOdd;
}

$array = [52, 21, 95, 14, 78];
$maxOdd = timSoLeLonNhat($array);
echo "Số lẻ lớn nhất trong mảng là: " . $maxOdd;


// 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. 

echo " <br> 25.    ";
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 29;
if (isPrime($number)) {
    echo $number . " là số nguyên tố.";
} else {
    echo $number . " không là số nguyên tố.";
}


// 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. 

echo " <br> 26.    ";
function timSoDuongLonNhat($arr) {
    $maxPositive = null;
    foreach ($arr as $value) {
        if ($value > 0) {
            if ($maxPositive === null || $value > $maxPositive) {
                $maxPositive = $value;
            }
        }
    }
    return $maxPositive;
}

$array = [-21, 15, 94, -53, 9];
$maxPositive = timSoDuongLonNhat($array);
echo "Số dương lớn nhất trong mảng là: " . $maxPositive;


// 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. 

echo " <br> 27.    ";
function timSoAmLonNhat($arr) {
    $maxNegative = null;
    foreach ($arr as $value) {
        if ($value < 0) {
            if ($maxNegative === null || $value > $maxNegative) {
                $maxNegative = $value;
            }
        }
    }
    return $maxNegative;
}

$array = [-7, 2, 91, -11, -5];
$maxNegative = timSoAmLonNhat($array);
echo "Số âm lớn nhất trong mảng là: " . $maxNegative;

// 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. 
echo " <br> 28.    ";
function tinhTongSoLe($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 1) {
            $sum += $i;
        }
    }
    return $sum;
}

$n = 10;
$sum = tinhTongSoLe($n);
echo "Tổng các số lẻ từ 1 đến $n là: " . $sum;


// 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. 

echo " <br>29.    ";
function timSoChinhPhuong($start, $end) {
    $result = [];
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == floor(sqrt($i))) {
            $result[] = $i;
        }
    }
    return $result;
}

$start = 1;
$end = 20;
$squares = timSoChinhPhuong($start, $end);
echo "Các số chính phương trong khoảng từ $start đến $end là: " . implode(", ", $squares);


// 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.

echo " <br> 30.    ";
function kiemTraChuoiCon($str, $subStr) {
    if (strpos($str, $subStr) !== false) {
        echo "Chuỗi '$subStr' là chuỗi con của chuỗi '$str'.";
    } else {
        echo "Chuỗi '$subStr' không là chuỗi con của chuỗi '$str'.";
    }
}

$str = "Hieu, Minh";
$subStr = "Minh";
kiemTraChuoiCon($str, $subStr);

?>