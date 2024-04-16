<html>
<head>
 <title>BREW BLISS BOOKING RECORD</title>
</head>
<body>
 <h3 align="center">BREW BLISS BOOKING RECORD</h3>
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "bbdbs";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 //create and execute query
 $sql = "SELECT * FROM BOOKING";
 $result = $conn->query($sql);
 //check if records were returned
 if ($result->num_rows > 0) {
 //create a table to display the record
 echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
 echo '<tr><td align="center"><b>No</b></td>
 <td align="center"><b>Name</b></td>
 <td align="center"><b>Contact</b></td>
 <td align="center"><b>Email</b></td>
 <td align="center"><b>DateBooking</b></td>
 <td align="center"><b>Combo</b></td>
 <td align="center"><b>PaymentMethod</b></td>
</tr>';

 // output data of each row
 while($row = $result->fetch_assoc()) {
 echo '<tr>';
 echo '<td align="center">'.$row["bil"].'</td>';
 echo '<td align="center">'.$row["Name"].'</td>';
 echo '<td align="center">'.$row["Contact"].'</td>';
 echo '<td align="center">'.$row["Email"].'</td>';
 echo '<td align="center">'.$row["DateBooking"].'</td>';
 echo '<td align="center">'.$row["Combo"].'</td>';
 echo '<td align="center">'.$row["PaymentMethod"].'</td>';
 echo '</tr>';
 }
 }
 else {
 echo "0 results"; //if no record found in the database
 }
 //close connection
 $conn->close();
 echo '<p><a href="CAFES3.html">Back to Main Menu</a></a></p>';
?>
</body>
</html>
