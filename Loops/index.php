<?php
/////////////// for loop ///////////
echo "/////////////For loop <br>";
for($i=0; $i<10; $i++){
    echo "Number :$i <br>";
}
echo "<br>";

////////// while loop ///////////
echo "////////////////while loop <br>";
$x = 10;
while($x > 5){
    echo "I am: $x <br>";
    $x--;
}
echo "<br>";

////////////////// do while loop ////////////
echo "////////////// do while loop <br>";
$a = 1;
do{
    echo "the number is: $a <br>";
    $a++;
}while($a >=5);

////////////// forEach loop /////////
echo "/////////////////// For Each loop <br>";
$number = array(3,5,26,7,3,8,9);
foreach($number as $i){
    echo "$i <br>";
}
?>
