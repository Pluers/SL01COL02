<?php

/**
 * Array
 */

$clocks = ['round', 'square', 'analog', 'digital'];

/**
 * Multidimensional Array
 */

$jerican = [
    ['name' => 'Rick', 'age' => 19, 'gender' => 'Male', 'birthdate' => date('04 09 2004'), 'city' => 'Almere', 'country' => 'Nederland', 'email' => '', 'phone' => '', 'url' => '', 'address' => ''],
    ['name' => 'Rick', 'age' => 26, 'gender' => 'Male', 'birthdate' => date('04 09 1997'), 'city' => '', 'country' => 'Nederland', 'email' => '', 'phone' => '', 'url' => '', 'address' => ''],
    ['name' => 'DF', 'age' => 16, 'gender' => 'Male', 'birthdate' => date('08 01 2007'), 'city' => 'Almere', 'country' => 'Nederland', 'email' => '', 'phone' => '', 'url' => '', 'address' => '']
];

/**
 * for-loop
 */

 for ($i = 0; $i < count($clocks); $i++) {
     echo $clocks[$i] . "<br>";
 }
 echo "<hr>";

/**
 * foreach-loop
 */

foreach ($jerican as $value) {
    foreach ($value as $attribute => $attributeValue) {
        if ($attributeValue != '') {
            echo "<b>$attribute</b>: $attributeValue<br>";
        }
    }
    echo "<hr>";
}

/**
 * Haal de presentatie van een variabele binnen
 */

//Roll the dice
$dice = ['⚀', '⚁', '⚂', '⚃', '⚄', '⚅'];
shuffle($dice);
echo "<p style=font-size:20vw;> $dice[0] </p>";


