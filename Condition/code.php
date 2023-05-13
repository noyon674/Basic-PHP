<?php
/////////////// If Else ////////////
$number = 70;// you can change the value as your wish

if($number < 40){
    echo "You are fail.";
}
elseif($number < 80){
    echo "You are pass.";
}
else{
    echo "You got A+";
}

echo"<br>";
///////////// switch Case ////////////
$color = 'blue'; // you can change the value as your wish

switch($color){
    case "red":
        echo "Your favorite color is Red.";
        break;
    case "green":
        echo "Your favorite color is Green.";
        break;
    case "blue":
        echo "Your favorite color is Blue.";
        break;
    default:
    echo "You don't have any color choice.";
}
?>
