<?php 

$my_arr_constructor = array();

$my_arr_literal = [];

$my_arr_init_vals = ['a', 1, true, 5.6];

$mixed_arr = [
    "Shaun McKinnon",
    true,
    44,
    30.62
];

array_push($mixed_arr, "I like cats"); // add at the end

$mixed_arr[] = "I like dogs"; // works same as push (shortcut for push)

array_unshift($mixed_arr, false); // add at the start

array_pop($mixed_arr); // remove from end

array_shift($mixed_arr); // remove form start

array_slice($mixed_arr, 3, 1); // remove specific element

$mixed_arr[] = [ // adding array inside an array
    "hello",
    "world"
];

$mixed_arr[3] = "I like hedgehogs";

?>