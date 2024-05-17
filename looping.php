<?php
include("");
include_once("");


// FOR LOOP
for ($i = 0; $i < 10; $i++) {
echo "$i ";

}
echo "br";

//while loop
$a = 1;
while ($a  <= 10) {
    echo "$a ";
    $a++;
}

// do while loop
$b = 0;
do {
    echo "$b ";
    $b++;
}
    while ($b <= 10);
echo "<br>";
// foreach loop 
$array = ["El wafi", "Wafa", "Wifi"];

foreach ($array as $key => $value){
    $no = $key +1;
echo $no. " - $value <br>";
}
?>









