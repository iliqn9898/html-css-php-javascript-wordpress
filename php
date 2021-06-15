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

-------------------------------------------------------------------
Пример за многомерен масив с 3 елемента(клиента) вътре 

<?php
$arr1=[
   ['username'=>'user1', 'age'=>18, 'email'=>'user@abv.com'],
   ['username'=>'user2', 'age'=>30, 'email'=>'user2@abv.com'],
   ['username'=>'user3', 'age'=>45, 'email'=>'user3@abv.com']

];
?>

----------------------------------------------------------------------
Cicles / Цикли в PHP

-for
<?php
for($i=0;$i<10;$i++){
    echo $i.'<br>';
}
?> 

-while
<?php

$i=0;
while($i<10){

    echo $i.'<br>';
    $i ++;
}
?>

-do/while
<?php

$i=0;
do{
echo $i ;
$i ++;

}while($i<10);

?>

---------------------------------------------
Итериране на обикновен масив с for цикъла
<?php
// we have array ($users)
 $users=['ivan','petko','koko','gogo','maria','misho'];
    for($i=0;count($users);$i++){
    echo $users[$i].'<br>';
    }
?>

Итериране на обикновен масив с foreach цикъла

<?php

$users = ['ivan', 'petko', 'koko', 'gogo', 'maria', 'misho'];
    foreach ($users as $v) {
        echo $v . '<br>';
    }
?>

Интериране на асоциативен масив с foreach цикъла

<?php

$users = ['ivan', 'petko', 'koko', 'gogo', 'maria', 'misho'];
    foreach ($users as $k=>$v) {
        echo 'Key: '.$k.' is : '.$v . '<br>';
    }
?>

------------------------------------------------------------------------------------------------------------------
Функции в PHP 
How to create function

function circleArea(){
    $r=3 ;
    echo pi()*pow($r,2);

   }
   
Как да извикаме функция 
//just mention function's name
ciecleArea();















