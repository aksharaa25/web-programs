<html>
    <body>
        <h1>Electricity bill</h1>
        <form method="POST" action="#">
            consumerid:<input type="number" name="id"><br>
            name:<input type="text" name="name"><br>
            previous reading:<input type="number" name="prev"><br>
            present reading:<input type="number" name="pres"><br><br><input type="submit">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]="POST")
        {
            $id=$_POST['id'];
            $name=$_POST['name'];
            $prev=$_POST['prev'];
            $pres=$_POST['pres'];
            $units=$_pres-$prev;
            echo"------------------------------------------------------";
            echo"<h3>kerala state electricity board(KSEB)</h3>";
            echo"<br><br>";
            echo"consumer id:".$id."<br>";
            echo"consumer name:".$name."<br>";
            echo"unit consumed:".$units."<br>";
            if($units<=100)
            {
                $amt=$units*3;
            }
            else if($units>100 && $units<=200)
            {
                $amt=$units*4;
            }
            else if($units>200 && $units<=300)
            {
                $amt=$units*5;
            }
            else
                {
                 $amt=$units*5;  
                }
                echo"<h4>Total:Rs.".($amt)."</h4><br>";
                echo"---------------------------------------------------";
        }
        ?>
        </body>
</html>