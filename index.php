<?php

$name = "John";
$age = 35;
$salary = null;
// variables in php dont have type but the value has type

echo $name . '<br>' ;
echo gettype($name);
var_dump ($name, $age);// print the whole variable
// change the type of variable by changing the value of variable
//variable checking function:
var_dump(is_string($name, $age));
var_dump(is_int($age));
is_string($name); //true
is_string($age); //false

//check if variable is defined
isset($address); //true/false to check if the address variable is defined or not ==> in this case, return FALSE as address is not declared
var_dump(isset($name));//bool(true)
var_dump(isset($salary));//bool(false)

// __constants__
define(`PI`, 3.14);
echo PI;
defined(`PI`); //true
defined(`PI2`); //false

$a = 5;
$b = 4;
echo $a += $b; // $a = 9
echo $a++ //$a = 6
echo ++$a; // = 7
var_dump(is_float(4.1));//bool(true)
var_dump(is_numeric(4.1));//true
var_dump(is_numeric('4.1'));//true
var_dump(is_numeric('4d.1'));//false

//__conversion__

$strNumber = '12.43';
$number = (float)$strNumber;
var_dump($number);//float(12.43)
$number = (int)$strNumber;//int12

//__Array__
//Create an array
$fruits = ["apple", "banana","pineapple"];
//print the whole array:
var_dump($fruits);
//get element by index:
echo $fruits[0];
//set element by index:
$fruits[0] = "appricot";
//print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';  
//check if the array has element at index 2 or not
echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';  //bool(true)
echo '<pre>';
var_dump(isset($fruits[3]));
echo '</pre>';  //bool(false)
//append element into the array
$fruits[] = "mango";
//OR add element at the end of the array:
array_push($fruits,'cherry')

echo '<pre>';
var_dump($fruits);
echo '</pre>';  //$fruits = ["apple", "banana","pineapple","mango"]
//print the length of the array:
echo count($fruits); //4
//remove the last element of the array
array_pop($fruits);
array_unshift($fruits, 'dragonfruit');// add element to array at the first position
array_shift($fruits); //remove 1st element of the array
echo '<pre>';
var_dump(explode(",", $fruits));//split the string into an array
echo '</pre>';
echo implode("&", $fruits).'<br>';; //combine array elements into a string
print_r($fruits); //print the whole array
in_array('pineapple', $fruits); //true
array_search('pineapple', $fruits); //return index of pineapple in the array

//merge 2 arrays 
$vegetable = ["carrot", "tomato"];
echo '<pre>';
var_dump(array_merge($fruits, $vegetable));// OR using spread operator:
//var_dump([...$fruits, ...$vegetable]);
echo '</pre>';
sort($fruits);//sort an array and rsort($fruits) to sort in reverse order

//FILTER, MAP AND REDUCE
$number = [1,2,3,4,5,6,7,8];
$even = array_filter($number, function($n){ //fn($n) => $n % 2 === 0 (notice that the filter exam the array function number first, then callback)
    return $n % 2 === 0;
});
echo '<pre>';
var_dump($even);
echo '</pre>';

$square = array_map(fn($n) => $n * $n, $number) //this callback first, then exam the array
echo '<pre>';
var_dump($square); //print out the new square array
echo '</pre>';

echo(array_reduce($number, fn($carry,$item) => $carry + $item));
//iterate through the array number, take each item, pass it in the function callback, carry is an accumulator, collecting result of the sum(carry and item)

//ASSOCIATE ARRAY: key-value pair array
$person = [
    'name' => 'John',
    'surname' => 'Doe',
    'age' => 30,
    'hobbies' => ['tennis', 'video game']
];
echo $person['name'] . '<br>'; //get element by key
$person['channel'] = 'XYZ discovery'; //set element by key
isset($person['age']); //check  if age is set or not ==> return: true
isset($person['address']); //return: false
echo '<pre>';
var_dump(array_keys($person)); //print out the keys of the array
echo '</pre>';

echo '<pre>';
var_dump(array_values($person)); //print out the values of the array
echo '</pre>';

ksort($person);//sorting associate array by values(asort/arsort), by keys(ksort), reverse order(krsort)

//2 dimentional array
$todoItems = [
    ["title" => "item1", "completed" => true],
    ["title" => "item2", "completed" => false],
    ["title" => "item3", "completed" => true]
]









