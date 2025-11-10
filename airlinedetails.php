 <?php
if (isset($_POST['submit'])) {

 
    $conn = mysqli_connect("localhost", "root", "", "airdb");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

 
    $from = $_POST['fro'];
    $airline = $_POST['airline'];
    $dep = $_POST['dd'];
    $arrival = $_POST['ad'];
    $to = $_POST['too'];
    $flightnum = $_POST['fn'];
    $terminal = $_POST['ter'];

 
    $sql = "INSERT INTO air (fro, airline, dd, ad, too, fn, ter)
            VALUES ('$from', '$airline', '$dep', '$arrival', '$to', '$flightnum', '$terminal')";

 
    if (mysqli_query($conn, $sql)) {
        echo "<h3>Flight details added successfully!</h3>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>

 
<h2>Enter Flight Details</h2>
<form method="post" action="">
    From: <input type="text" name="fro" required><br><br>
    Airline: <input type="text" name="airline" required><br><br>
    Departure Date: <input type="date" name="dd" required><br><br>
    Arrival Date: <input type="date" name="ad" required><br><br>
    To: <input type="text" name="too" required><br><br>
    Flight Number: <input type="text" name="fn" required><br><br>
    Terminal: <input type="text" name="ter" required><br><br>
    <input type="submit" name="submit" value="Add Flight">
</form>
