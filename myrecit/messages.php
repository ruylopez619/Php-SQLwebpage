<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body>

<div align="center">

	<table>

<tr> <th> BId </th> <th> Bname </th> <th> Author </th> <th> Genre </th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM book";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
    $sailor_id = $row['BId']; 
    $sailor_name = $row['Bname']; 
    $srating = $row['Author'];
    $mai = $row['Genre']; 
	echo "<tr>" . "<th>" . $sailor_id . "</th>" . "<th>" . $sailor_name . "</th>" . "<th>" . $srating . "</th>" . "<th>" . $mai . "</th>". "</tr>";

}

?>

</table>
</div>

</body>
</html>