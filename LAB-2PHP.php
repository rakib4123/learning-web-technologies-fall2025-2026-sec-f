<?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length: " . $length . "<br>";
echo "Width: " . $width . "<br>";
echo "Area: " . $area . "<br>";
echo "Perimeter: " . $perimeter . "<br><br><br>";

///////////////////////////////////////////////////////////

$amount = 1000;
$vat = $amount * 0.15;

echo "Amount: " . $amount . "<br>";
echo "VAT (15%): " . $vat . "<br>";
echo "Total with VAT: " . ($amount + $vat) . "<br><br><br>";


//////////////////////////////////////////////////////////////

$num1 = 50;
$num2 = 31;

if ($num1 % 2 == 0) {
    echo $num1 . " is even.<br>";
} else {
    echo $num1 . " is odd.<br>";
}

if ($num2 % 2 == 0) {
    echo $num2 . " is even.<br>";
} else {
    echo $num2 . " is odd.<br><br><br>";
}

/////////////////////////////////////////////////////////
$num11 = 15;
$num22 = 22;
$num33 = 10;

if ($num11 > $num22 && $num11 > $num33) {
    echo $num11 . " is the largest number.<br>";
} elseif ($num22 > $num11 && $num22 > $num33) {
    echo $num22 . " is the largest number.<br>";
} else {
    echo $num33 . " is the largest number.<br>";
}

echo "<br><br><br>";
////////////////////////////////////////////////////////////////


for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
}

echo "<br><br><br>";

///////////////////////////////////////////////////////////

$array = [5, 12, 9, 3, 7, 9, 15];
$ele = 9;
$found = false;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $ele) {
        echo "Element " . $ele . " found at index " . $i . "<br>";
        $found = true;
    }
}

if (!$found) {
    echo "Element " . $ele . " not found in the array.<br>";
}

echo "<br><br><br>";
///////////////////////////////////////////////////////////

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br>";


$letter = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letter . " ";
        $letter++;
    }
    echo "<br>";
}

echo "<br><br><br>";
///////////////////////////////////////////////////////////

$array2D = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];



for ($i = 0; $i < count($array2D); $i++) {
    for ($j = 0; $j < count($array2D[$i]); $j++) {
        if (is_numeric($array2D[$i][$j])) {
            echo $array2D[$i][$j] . " ";
        }
    }
    echo "<br>";
}

echo "<br>";



for ($i = 0; $i < count($array2D); $i++) {
    for ($j = 0; $j < count($array2D[$i]); $j++) {
        if (!is_numeric($array2D[$i][$j])) {
            echo $array2D[$i][$j] . " ";
        }
    }
    echo "<br>";
}

?>
