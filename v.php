<!DOCTYPE html>
<html>
<head>
    <title>processor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qwer</title>
     <link rel="stylesheet" type="text/css" href="qwer.css">
     <link rel="stylesheet" type="text/css" href="hp.css">
</head>
<body>
    <div class="heading">
     <h1>SELECT THE PROCESSOR YOU WANT</h1>
     </div>
    <br /><br />
    <div class="t1">
    <ul><li><a href="#" onclick='show(1);'>INTEL CORE i7</a></li></ul></div>
    <br />  
    <div class="t2">
    <ul><li><a href="#" onclick='show(2);'>INTEL CORE i5</a></li></ul></div>
    <br /> 
    <div class="t3">
    <ul><li><a href="#" onclick='show(3);'>INTEL CORE i3</a></li></ul></div>
    <br /> 
    <div class="t4">
    <ul><li><a href="#" onclick='show(4);'>AMD RYZEN 7</a></li></ul></div>
    <br />
    <div class="t5">
    <ul><li><a href="#" onclick='show(5);'>AMD RYZEN 5</a></li></ul></div>
    <br />
    <div class="t6">
    <ul><li><a href="#" onclick='show(6);'>AMD RYZEN 3</a></li></ul></div>
    <br />
<div id="table1">
    <table>
<tr>
<th>IMAGE</th>
<th>BRAND</th>
<th>MODEL</th>
<th>DISPLAY(inches)</th>
<th>PROCESSOR</th>
<th>DISK SPACE</th>
<th>RAM</th>
<th>GRAPHIC CARD</th>
<th>PRICE</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "saket1234", "laplist_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT IMAGE, BRAND, MODEL, DISPLAY, PROCESSOR, DISK_SPACE, RAM, GRAPHIC_CARD, PRICE FROM info WHERE PROCESSOR LIKE 'INTEL CORE i7%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<tr>";
echo "<td>";?> <img src="<?php echo $row["IMAGE"]; ?>" width="250" height="200"> <?php echo "</td>";

echo "<td>";
echo $row["BRAND"];
echo "</td>";
echo  "<td>" . $row["MODEL"] . "</td><td>". $row["DISPLAY"] 
. "</td><td>" . $row["PROCESSOR"] . "</td><td>" . $row["DISK_SPACE"] . "</td><td>"
. $row["RAM"] . "</td><td>" . $row["GRAPHIC_CARD"] . "</td><td>" . $row["PRICE"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
<div id="table2"> 
<table>
<tr>
<th>IMAGE</th>
<th>BRAND</th>
<th>MODEL</th>
<th>DISPLAY(inches)</th>
<th>PROCESSOR</th>
<th>DISK SPACE</th>
<th>RAM</th>
<th>GRAPHIC CARD</th>
<th>PRICE</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "saket1234", "laplist_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT IMAGE, BRAND, MODEL, DISPLAY, PROCESSOR, DISK_SPACE, RAM, GRAPHIC_CARD, PRICE FROM info WHERE PROCESSOR LIKE 'INTEL CORE i7%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<tr>";
echo "<td>";?> <img src="<?php echo $row["IMAGE"]; ?>" width="250" height="200"> <?php echo "</td>";

echo "<td>";
echo $row["BRAND"];
echo "</td>";
echo  "<td>" . $row["MODEL"] . "</td><td>". $row["DISPLAY"] 
. "</td><td>" . $row["PROCESSOR"] . "</td><td>" . $row["DISK_SPACE"] . "</td><td>"
. $row["RAM"] . "</td><td>" . $row["GRAPHIC_CARD"] . "</td><td>" . $row["PRICE"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table></div>
<div id="table3">
<table>
<tr>
<th>IMAGE</th>
<th>BRAND</th>
<th>MODEL</th>
<th>DISPLAY(inches)</th>
<th>PROCESSOR</th>
<th>DISK SPACE</th>
<th>RAM</th>
<th>GRAPHIC CARD</th>
<th>PRICE</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "saket1234", "laplist_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT IMAGE, BRAND, MODEL, DISPLAY, PROCESSOR, DISK_SPACE, RAM, GRAPHIC_CARD, PRICE FROM info WHERE PROCESSOR LIKE 'INTEL CORE i7%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<tr>";
echo "<td>";?> <img src="<?php echo $row["IMAGE"]; ?>" width="250" height="200"> <?php echo "</td>";

echo "<td>";
echo $row["BRAND"];
echo "</td>";
echo  "<td>" . $row["MODEL"] . "</td><td>". $row["DISPLAY"] 
. "</td><td>" . $row["PROCESSOR"] . "</td><td>" . $row["DISK_SPACE"] . "</td><td>"
. $row["RAM"] . "</td><td>" . $row["GRAPHIC_CARD"] . "</td><td>" . $row["PRICE"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
<div id="table4">
<table>
<tr>
<th>IMAGE</th>
<th>BRAND</th>
<th>MODEL</th>
<th>DISPLAY(inches)</th>
<th>PROCESSOR</th>
<th>DISK SPACE</th>
<th>RAM</th>
<th>GRAPHIC CARD</th>
<th>PRICE</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "saket1234", "laplist_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT IMAGE, BRAND, MODEL, DISPLAY, PROCESSOR, DISK_SPACE, RAM, GRAPHIC_CARD, PRICE FROM info WHERE PROCESSOR LIKE 'INTEL CORE i7%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<tr>";
echo "<td>";?> <img src="<?php echo $row["IMAGE"]; ?>" width="250" height="200"> <?php echo "</td>";

echo "<td>";
echo $row["BRAND"];
echo "</td>";
echo  "<td>" . $row["MODEL"] . "</td><td>". $row["DISPLAY"] 
. "</td><td>" . $row["PROCESSOR"] . "</td><td>" . $row["DISK_SPACE"] . "</td><td>"
. $row["RAM"] . "</td><td>" . $row["GRAPHIC_CARD"] . "</td><td>" . $row["PRICE"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
<div id="table5">
<table>
<tr>
<th>IMAGE</th>
<th>BRAND</th>
<th>MODEL</th>
<th>DISPLAY(inches)</th>
<th>PROCESSOR</th>
<th>DISK SPACE</th>
<th>RAM</th>
<th>GRAPHIC CARD</th>
<th>PRICE</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "saket1234", "laplist_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT IMAGE, BRAND, MODEL, DISPLAY, PROCESSOR, DISK_SPACE, RAM, GRAPHIC_CARD, PRICE FROM info WHERE PROCESSOR LIKE 'INTEL CORE i7%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<tr>";
echo "<td>";?> <img src="<?php echo $row["IMAGE"]; ?>" width="250" height="200"> <?php echo "</td>";

echo "<td>";
echo $row["BRAND"];
echo "</td>";
echo  "<td>" . $row["MODEL"] . "</td><td>". $row["DISPLAY"] 
. "</td><td>" . $row["PROCESSOR"] . "</td><td>" . $row["DISK_SPACE"] . "</td><td>"
. $row["RAM"] . "</td><td>" . $row["GRAPHIC_CARD"] . "</td><td>" . $row["PRICE"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
<div id="table6">
<table>
<tr>
<th>IMAGE</th>
<th>BRAND</th>
<th>MODEL</th>
<th>DISPLAY(inches)</th>
<th>PROCESSOR</th>
<th>DISK SPACE</th>
<th>RAM</th>
<th>GRAPHIC CARD</th>
<th>PRICE</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "saket1234", "laplist_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT IMAGE, BRAND, MODEL, DISPLAY, PROCESSOR, DISK_SPACE, RAM, GRAPHIC_CARD, PRICE FROM info WHERE PROCESSOR LIKE 'INTEL CORE i7%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<tr>";
echo "<td>";?> <img src="<?php echo $row["IMAGE"]; ?>" width="250" height="200"> <?php echo "</td>";

echo "<td>";
echo $row["BRAND"];
echo "</td>";
echo  "<td>" . $row["MODEL"] . "</td><td>". $row["DISPLAY"] 
. "</td><td>" . $row["PROCESSOR"] . "</td><td>" . $row["DISK_SPACE"] . "</td><td>"
. $row["RAM"] . "</td><td>" . $row["GRAPHIC_CARD"] . "</td><td>" . $row["PRICE"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<script src="qwer.js"></script>
</body>
</html>