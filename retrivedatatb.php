<?php
$servername="localhost";
$username="root";
$password="";
$dbname="empdb";
$tbname="emp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
else
{
    echo "<br><h2 align=center>Employee deatils</h2><br/>";
}
$sql="SELECT*from emp";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    echo "<table border=2 align=center>";
    echo "<tr><th>employee id</th>";
    echo "<th>employee name</th>";
    echo "<th>department</th>";
    echo "<th>salary</th></tr>";
    while($row=mysqli_fetch_assoc($res))
    {
        echo"<tr><td>$row[eid]</td>";
        echo"<td>$row[ename]</td>";
        echo"<td>$row[dept]</td>";
        echo"<td>$row[sal]</td></tr>";
    }
    echo"</table>";
}
else
{
    echo "0 result";
}
mysqli_close($conn);
?>