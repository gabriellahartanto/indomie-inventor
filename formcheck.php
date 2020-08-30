<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mywebsite";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

$sql = "SELECT * FROM indomieinventor";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo "base: ".$row["base"]."<br>";
    echo "width: ".$row["width"]."<br>";
    echo "type: ".$row["type"]."<br>";
    echo "flavor: ".$row["flavor"]."<br>";
    echo "toppings: ".$row["protein"]."<br>";
    echo "color: ".$row["color"]."<br>";
    echo "selectcolor: ".$row["selectcolor"]."<br>";
    echo "name: ".$row["name"]."<br>";
    echo "printname: ".$row["printname"]."<br>";
    echo "email: ".$row["email"]."<br>";
    echo "datee: ".$row["datee"]."<br>";
    echo "<a href='editform.php?id=".$row["id"]."'>Edit Data</a> | <a href='deleteform.php?id=".$row["id"]."'>Delete Data</a><br>";
    echo " <br>";
}
?>
