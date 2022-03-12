<!DOCTYPE html>
<html>
<head>
	<title>MAIN PAGE</title>
<link rel="stylesheet" href="style.css">
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.button2 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  } /* Blue */

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>


</head>
<body>
<p style="font-family:'Courier New', Courier, monospace;font-size:150%;">WELCOME!</p>
<h1 style="border:10px solid #851195;">Selected genres of books are listed below</h1>

<div align="center">



	<table>

<tr> <th> BId </th> <th> 	Bname </th> <th> 	Author </th><th> 	Genre </th><th>
<br>

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