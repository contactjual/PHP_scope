<?php

// // Global Scope

// // $global_scope = "global";
// // function my_func1 () {
// //     echo $global_scope;
// // }
// // my_func1(); // global
// // echo $global_scope; // global




// // define global value

// $x = 5;
// $y = 4;
// function my_global () {
//     global $x, $y;
//     $y = $x + $y; // cann't access $x and $y in the function scope so, defined those as global scope
//     echo "$y";
// }
// my_global(); // 9
// echo $y; // value of y will be 9






// // Local Scope

// function my_func2 () {
//     $local_scope = "local"; 
//     echo $local_scope;
// }
// my_func2(); // local
// // echo $local_scope; // cannot access






// // define global value

// $x = 5;
// $y = 4;
// function my_global () {
//     global $x, $y;
//     $y = $x + $y; // cann't access $x and $y in the function scope so, defined those as global scope
//     echo "$y";
// }
// my_global(); // 9
// echo $y; // value of y will be 9




// define local value

function calcu1() {
    $x = 0;
    $x++;
    echo $x++;
}
calcu1 (); // 1
calcu1 (); // 1
calcu1 (); // 1




function calcu() {
    static $x = 0; // used static
    $x++;
    echo $x;
}j
calcu (); // 1
calcu (); // 2
calcu (); // 3




?>