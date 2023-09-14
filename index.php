<?php

/**
 * Array
 */

/*$fruits = array('apple', 'banana', 'orange');

echo $fruits[0];
echo $fruits[1];
echo $fruits[2];

$fruits[] = 'grape';
$fruits[] = 'melon';

echo $fruits[3];
echo $fruits[4];*/

$clocks = ['round', 'square', 'analog'];

/**
 * Multidimensional Array
 */

/*$students = array(
    array('John', 'Doe', 20),
    array('Jane', 'Smith', 19),
    array('Tom', 'Hanks', 22)
);

echo $students[0][0];
echo $students[1][1];
echo $students[2][2];

$students[] = array('Emily', 'Brown', 21);

echo $students[3][1];*/

/**
 * for-loop
 */

/*for ($i = 0; $i < count($students); $i++) {
    echo $students[$i][0] . " " . $students[$i][1] . " " . $students[$i][2] . "\n";
}*/

// for ($i = 0; $i < count($clocks); $i++) {
//     echo $clocks[$i] . "<br>";
// }

/**
 * foreach-loop
 */

/*foreach ($students as $student) {
    echo $student[0] . " " . $student[1] . " " . $student[2] . "\n";
}*/

// sort($clocks);
// foreach ($clocks as $clock) {
//     echo $clock . "<br>";
// }

/**
 * Haal de presentatie van een variabele binnen
 */

$dice = ['⚀', '⚁', '⚂', '⚃', '⚄', '⚅'];

shuffle($dice);
echo "<p style=font-size:20vw;> $dice[0] </p>";

$jerican = [
    ['name' => 'Rick', 'age' => 19, 'gender' => 'male', 'birthdate' => date('04 09 2004'), 'city' => 'Almere', 'country' => 'Nederland', 'email' => '', 'phone' => '', 'url' => '', 'address' => ''],
    ['name' => 'Rick', 'age' => 26, 'gender' => 'male', 'birthdate' => date('04 09 1997'), 'city' => '', 'country' => 'Nederland', 'email' => '', 'phone' => '', 'url' => '', 'address' => ''],
    ['name' => 'DF', 'age' => 16, 'gender' => 'male', 'birthdate' => date('08 01 2007'), 'city' => 'Almere', 'country' => 'Nederland', 'email' => '', 'phone' => '', 'url' => '', 'address' => '']
];

/*foreach ($jerican as $value) {
    foreach ($value as $attribute => $attributeValue) {
        // Loop logic for each attribute value goes here

        // Example usage:
        if ($attributeValue != '') {
             echo "<b>$attribute</b>: $attributeValue<br>";
//            var_dump($attributeValue);
        }
    }
        echo "<hr>";
}*/
