
<?php
$a=10;
$b=13;
function add($a,$b){
    echo "The Sum of $a+$b= ", $a+$b, "<br />";
    $a=5;
    $b=10;
    echo "The sum is=" ,$a+$b , "<br />" ;    }
add($a,$b);
echo $a+$b;

if($a>0){
echo $a;
}else{
echo ($a*-1);
}


?>
