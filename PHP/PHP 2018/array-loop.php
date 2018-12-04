<?php
$characters[0] = "Bugs Bunny";
$characters[1] = "Tweety";
$characters[2] = "Wile E. Coyote";
$characters[3] = "Elmar Fud";
$characters[4] = "Sylvester";
$characters[5] = "Road Runner";

foreach ($characters as $value) {
  echo $value . "<br />";
}

echo '<br>';
echo '<br>';
echo '<br>';

$characters['pig'] = "Pory Pig";
$characters['duck'] = "Daffy Duck";
$characters['pig'] = "Speedy Gonzales";

foreach ($characters as $key => $value) {
 echo $value . " is a " . $kay . ".<br/>";
}
?>
