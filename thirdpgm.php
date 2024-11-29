Associative arrays

<html>
<body>

<?php
$flowers = array("name"=>"Sunflower","colour"=>"Yellow","year"=>1976);
$numbers1=array(1=>1,2=>2,3=>4=>4);
$numbers2=array("one"=>1,"two"=>2,"three"=>3","four"=>4);
$values=array_values($flower);

for($x = 0;$x<count($values);$x++)

{
 echo $values[$x]."<br>";
}
foreach($flower as $x => $y)
{
 echo"<br>$x:$y<br>";
}
foreach($numbers1 as $x => $y)
{
 echo "<br> $x