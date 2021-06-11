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
