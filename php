<?php

/* Defining array */
$arr_cars = ["volvo", "bmw"];
//accessing element by index
$arr_cars[0];

function break end the loop
function continue go to next element from array

>?

<?php
/* function gettype give us the type of data */

//declare variable 
$x=555;                                         ---------->  integer

echo gettype($x);                        

?>

PHP type casting / прехвърляне от един тип към друг.
<?php
    //variable $input is "stirng"
    $input = "1998";
    
    // declare $cast and want to cast the type of $input to ineger 
    $cast = (int)$input;

    echo gettype($cast);

?>

Concatenation of strings/ Сливане на стрингове 

<?php
//create two strings and connect them with .
$a="Iliyan ";
$b="Gochev";
// we can use variable $c like new string
$c=$a.$b;

echo $c;

?>

Conditional operators / Условни оператори- осн.синтаксис 
Имаме променлива $age, aко условието в if е true кода ще се изпълни, ако е false кода няма да се изпълни.В конкретния пример $age е равно на 20 тоест true, кода се изпълнява. --> User is 20

<?php

$age=20;
if($age==20){

    echo 'User is 20';

}
?>

Logical operators / логически оператори 
AND / OR / XOR

// example with AND(&&) 
Имаме 2 променливи ако и двете отговарят(true) кода ще се изпълни. За да се изпълни трябва и двете страни да са вярни.
<?php

$username="gochev";
$pass="qwerty";

if($username=="gochev" && $pass=="qwerty") {
echo "OK"
}

?>

// example with OR (||)
Отново имаме две променливи. При OR трябва поне една от страните да е вярна за да се изпълни кода. В примера и двете са вярни тоест кода се изпълнява.
<?php
$username="gochev";
$pass="qwerty";

if($username=="gochev" || $pass=="qwerty") {
echo "OK"
}
?>

IF / ELSE - else(друго) се използва когато искаме ако if е false да се изпълни else 
В примера if е true и за това ще ни даде OK , но ако не отговаря то тогава ще ни даде NOT OK.
example:

<?php
$username="gochev" ;

if($username="gochev") {
echo "OK" ;
}
else {
echo "NOT OK" ;
}
?>
-------------------------------
 IF / ELSE / ELSEIF

<?php
Искаме например да отсеем информацията за различна възраст, ако потребителите са под или на 15 , ако са м/у 15-18 , и ако са по-големи от 18. Ако пурвото условие се изпълни е под 15...
$age=15;

if($age<=15){
echo "Under 15 y";
}
elseif($age>15 && $age<18){
    echo "Between 15-18";
}
else{
    echo "Bigger than 18";
}
?>
---------------------------------------
Operations with strings 
-когато искаме да проверим дали даден текст се съдържа в друг с функцията - strpos(haystack, needle);

<?php
$a="Hello world here is php  ";
$b="php";                          ---> получаваме 20 понеже това е позицията на която за първи път се среща php

echo strpos($a,$b);

?>

- когато искаме да заместим текст в текст с функцията - str_replace  / str_replace(searsh, replace, $subject)

<?php

$a="Hello from php world";

// we replace 'php' with 'java'

echo str_replace('php','java',$a);

?>


































