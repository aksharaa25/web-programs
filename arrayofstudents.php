<?php
echo"sorting array<br/>";
echo"===========================<br/>";
$stud=array("Nidhi","Sreelekshmi","Agna","Riya","christy");
echo"displaying array using print_r():<br/>";
print_r($stud);
echo"<br> array in ascending order:<br/>";
asort($stud);
print_r($stud);
echo"<br>array in descending order:</br>";
arsort($stud);
print_r($stud);
?>
 
