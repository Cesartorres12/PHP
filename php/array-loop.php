<?php
$characters[0] = "Bugs Bunny";
$characters[1] = "Tweety";
$characters[2] = "Wile E. Coyote";
$characters[3] = "Elmer Fud";
$characters[4] = "Sylveter";
$characters[5] = "Road Runner";

foreach ($characters as $value) {
  echo $value . "<br />";
}

echo '<br>';
echo '<br>';
echo '<br>';

  $characters['pig'] = "Porky Pig";
  $characters['duck'] = "Daffy Ducky";
  $characters['mouse'] = "Speedy Gonzalez";

  foreach ($characters as $key => $value) {
    echo $value . " is a " . $key . ".<br />";
  }
  ?>
