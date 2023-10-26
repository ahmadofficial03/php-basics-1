<?php
// echo "Hello World"

// $x = 1;
// // $y = $x;
// $y = &$x;
// $x = 3;

// echo $y;

// $firstName = "Gio";
// echo "Hello $firstName";

// CONSTANT:

// define ('STATUS_PAID', 'paid');
// echo STATUS_PAID;

// const STATUS_PAID = 'paid';
// echo STATUS_PAID;

// if (true) {
//     define ('STATUS_PAID', 'paid');
//     // const STATUS_PAID = 'paid';  // Not Allowed
//     echo STATUS_PAID;
// }

// PRE DEFINED CONSTANTS:


// echo PHP_VERSION;
// echo "<br />";
// echo PHP_VERSION_ID;
// echo "<br />";


// PreDefined Magic Constant
// echo __LINE__;
// echo "<br />";

// echo __FILE__;

// VARIABLES VARIABLE:
// $foo = 'bar';
// $$foo = 'baz';

// $x = 5;
// $y = 10;

// echo $baz;
// echo $foo, $bar;

// $fruits = ["apple", "banana", "cherry"];
// foreach ($fruits as $fruit) {
//     $$fruit = 0;
//     echo $apple;
//     echo $banana;
//     echo $cherry;
// }


// CHECKING VARIABLES TYPES:
// $completed = true;
// $score = 75;
// $price = 8.09;

// $greeting = "HELLO Ahmad";

// echo gettype($completed);
// echo "<br />";
// echo gettype($score);
// echo "<br />";
// echo gettype($price);
// echo "<br />";

// // ANOTHER WAY:
// echo var_dump($completed);
// echo var_dump($price);


// TYPE COERESTION:
// declare(strict_types = 1);
// function sum(int $x, string $y) {
//     return $x + $y;
// } 

// $sum = sum(2, 3.5);
// echo $sum;

// Type Casting:
// $x = (int) "20";
// echo var_dump($x);

// $foo = 10;            // $foo is an integer
// $str = "$foo";        // $str is a string
// $fst = (string) $foo; // $fst is also a string

// This prints out that "they are the same"
// if ($fst === $str) {
//     echo "they are the same";
// }

// BOOLEAN DATA TYPE:
// $isCompleted = true;
// $isCompleted = "";
// $isCompleted = -1;
// $isCompleted = [];
// $isCompleted = (string) 8;

// echo var_dump(is_bool($isCompleted));
// echo var_dump($isCompleted);

// if ($isCompleted) {
//     echo "suceess";
// } else {
//     echo "failed";
// }


// NUMERIC DATA TYPE:
// $x = 0x2A;
// $x = 055;
// $x = 0b10000;

// $x = (integer) 10.5;
// $x = (int) true;
// $x = (int) "5.6";
// echo var_dump($x);
// echo $x;

// $a = 0.23; 
// $b = 1 - 0.77; 
// $c = 7E-10;
// $d = 1_234.567; // as of PHP 7.4.0

// if ($a == $b) {
//     echo "YES";
// } else {
//     echo "NOT";
// }


// $tolerance = 0.00001; // Define a small tolerance value

// if (abs($a - $b) < $tolerance) {
//     echo "YES";
// } else {
//     echo "NOT";
// }

// echo $a;
// echo "<br />";

// echo $b;
// echo "<br />";

// echo $c;
// echo "<br />";

// echo $d;
// echo "<br />";

// echo PHP_FLOAT_MAX * 3;
// echo PHP_FLOAT_MIN ;

// STRINGS 
// $x = 1;
// $y = 2;

// // HerDoc
// $text = <<<TEXT
//     LINE 1 $x
//     LINE 2 $y
// TEXT;
// echo nl2br($text);

// // NowDoc
// $text = <<<'TEXT'
//     Hello World
// TEXT;

// var_dump($text);

// echo $text;
// echo nl2br($text);

// echo "<br />";

// $firstName = 'Ahmad';
// $lastName = "Fraz";

// $fullName = $firstName . " " . $lastName;
// echo $fullName;
// echo "<br />";

// echo $fullName[2];
// echo "<br />";

// echo $fullName[-3];
// echo "<br />";

// echo strlen($fullName);


// NULL:
// $x = null;
// echo $x;

// echo var_dump(is_null($x));

// $y = 123;
// echo var_dump(($y));

// unset($y);
// echo var_dump(($y));

// var_dump((string) $y);

// ARRAYS:
// $programmingLanguages = ['php', 'Java', 'Ruby'];
// echo $programmingLanguages[1];

// // Note: We can treate arrays in different DSA like Stack, queue, trees.
// echo "<br />";
// // var_dump(isset($programmingLanguages[2]));
// // var_dump(isset($programmingLanguages[3]));

// // Mutate arrays:
// $programmingLanguages[1] = 'Javascript';


// echo count($programmingLanguages);
// echo "<br />";

// $programmingLanguages[] = 'C++';

// $programmingLanguages = [
//     'php' => '8.0',
//     'java' => '3.9',

// ];

// echo $programmingLanguages['java'];
// echo "<br />";

// $newLanguage = 'go';
// $programmingLanguages[$newLanguage] = 1.12;

// echo '<prev>';
// print_r($programmingLanguages);
// echo '</prev>';


?>



