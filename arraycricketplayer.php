<?php
$cricket=array("Virat","Dhoni","sachin","sehwag");
echo "<br>dispalying names in table format</br>";
echo "<br>================================</br>";
echo "<br>Name of circket players as stored in an array:<br/>";
print_r($cricket);
echo "<br><br> name of circket player as stored in table:<br/>";
echo "<br><table border = 2><tr><th>player name</th></tr><br/>";
echo "<tr><td>$cricket[0]</td></tr>";
echo "<tr><td>$cricket[1]</td></tr>";
echo "<tr><td>$cricket[2]</td></tr>";
echo "<tr><td>$cricket[3]</td></tr>";
echo "</table>";
?>

