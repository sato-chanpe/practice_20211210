<?php
$food = "curry"; 

function foodname(){
    global $food;
    echo $food;
}

foodname();

