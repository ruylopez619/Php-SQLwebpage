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
  border: 1px solid #004CFF;
  text-align: left;
  padding: 8px;
}


tr:nth-child(even) {
  background-color: #89E7FF;
}
tr:nth-child(odd) {
  background-color: #89E7FF;
}


</style>

</head>
<body>


<br>
<br>

<div align="center">

	<table>

<tr> <th> BId </th> <th> Bname </th> <th> Author </th><th> Genre </th><th>
<?php

include "config.php";


if (isset($_POST['Genre'])){

-
$genre = $_POST['Genre'];



$sql_statement = "SELECT * FROM book WHERE Genre = '$genre' ";

$result = mysqli_query($db, $sql_statement);


while($row = mysqli_fetch_assoc($result))
{
  $BId = $row['BId'];
  $Genre = $row['Genre'];
  $Bname = $row['Bname'];
  $Author = $row['Author'];


	echo "<tr>" . "<th>" . $BId . "</th>" . "<th>" . $Bname ."</th>" . "<th>" .$Author ."</th>" . "<th>". $Genre;
}


}

else
{

	echo "The form is not set.";

}


?>