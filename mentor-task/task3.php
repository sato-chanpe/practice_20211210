<?php

function countUpp(){
    static $number = 1;
    return ++$number;
}

echo countUpp();
echo "\n";


