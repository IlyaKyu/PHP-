<?php
include '1.php';
include '2.php';
// Задание 1: Произведение отрицательных элементов в массиве
$array = [2, -3, 5, -7];
$negativeProduct = 1;

foreach ($array as $element) {
    if ($element < 0) {
        $negativeProduct *= $element;
    }
}

echo "Произведение отрицательных элементов в массиве: $negativeProduct<br>";

// Задание 2: Работа со строками
$c1 = "ТИТОК";
$c2 = "GERGER";

// 1. Определение длины строки c2
$lengthOfC2 = strlen($c2);
echo "Длина строки c2: $lengthOfC2<br>";

// 2. Сцепление строк c1 и c2
$concatenatedString = $c1 . $c2;
echo "Результат сцепления строк c1 и c2: $concatenatedString<br>";

// 3. Преобразование строки c2 в нижний регистр
$c2Lowercase = strtolower($c2);
echo "Строка c2 в нижнем регистре: $c2Lowercase";

// Задание 3: Функция для расчетов по формуле
function calculateFormula($x, $y) {
    return pow(cos($x) - sin($y), 3) / sqrt(pow($x, 2) + 1) + pow(log($x * $y), 2);
}

// Пример использования функции
$xValue = 0.5;
$yValue = 0.2;
$formulaResult = calculateFormula($xValue, $yValue);
echo "<br>Результат расчетов по формуле: $formulaResult";
?>
