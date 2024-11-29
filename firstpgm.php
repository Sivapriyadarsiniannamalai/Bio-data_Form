<html>
<body>

<?php
$flowers = array("Sunflower", "Rose", "Dahlia");
sort($flowers);
$clength = count($flowers);
echo "<br><b> Sort flowers in ascending order </b><br>";
for($x = 0; $x < $clength; $x++)
{
  echo "<br>";
  echo $flowers[$x];
  echo "<br>";
}


$flowers = array("Sunflower", "Rose", "Dahlia");
rsort($flowers);
$clength = count($flowers);
echo "<br><b> Sort flowers in descending order </b><br>";
for($x = 0; $x < $clength; $x++) 
{
  echo "<br>";
  echo $flowers[$x];
  echo "<br>";  
}


$flower = array("one"=>"Sunflower", "two"=>"Rose", "three"=>"Dahlia");
asort($flower);
echo "<br><b> Sorts an associative array in ascending order, according to the value </b><br>";
foreach($flower as $x => $xvalue) {
  echo "<br>Key=" . $x . ", Value=" . $xvalue;
  echo "<br>";
}


$flower = array("one"=>"Sunflower", "two"=>"Rose", "three"=>"Dahlia");
ksort($flower);
echo "<br><b> Sorts an associative array in ascending order, according to the key </b><br>";
foreach($flower as $x => $xvalue) {
  echo "<br>Key=" . $x . ", Value=" . $xvalue;
  echo "<br>";
}

$flower = array("one"=>"Sunflower", "two"=>"Rose", "three"=>"Dahlia");
arsort($flower);
echo "<br><b> Sorts an associative array in descending order, according to the value </b><br>";
foreach($flower as $x => $xvalue) {
  echo "<br>Key=" . $x . ", Value=" . $xvalue;
  echo "<br>";
}


$flower = array("one"=>"Sunflower", "two"=>"Rose", "three"=>"Dahlia");
krsort($flower);
echo "<br><b> Sorts an associative array in descending order, according to the key </b><br>";
foreach($flower as $x => $xvalue) {
  echo "<br>Key=" . $x . ", Value=" . $xvalue;
  echo "<br>";
}
?>

</body>
</html>

     
