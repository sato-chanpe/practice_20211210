<?php
function takoyaki($tako =o){
    $tako = $tako -1;
    print"残りのたこ焼き数:". $tako. "\n";
    
    if($tako > 0){
        return takoyaki($tako);
    }
    else{
        print"もう残っていません";
        return 0;
    }
}

$tako_num = 10;
takoyaki($tako_num);

?>

