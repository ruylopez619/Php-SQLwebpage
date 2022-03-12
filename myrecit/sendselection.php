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

body {
	background-image: url("https://i.pinimg.com/originals/b8/3f/fb/b83ffb5a6b74b5ef38c6ce2a640ee956.png");

}


</style>

</head>
<body>

<a href="deneme.html"  style="color:pink">BACK TO HOME PAGE </a>
<br>
<br>

<div align="center">

	<table>

<tr> <th> Cost </th> <th> Game Name </th> <th> Genre </th><th> Release Year </th><th> Development Time </th><th> Company Name</th></tr>
<?php

include "config.php";


if (isset($_POST['cost'])){

$cost = $_POST['cost'];
$genre = $_POST['genre'];



$sql_statement = "SELECT * FROM develop_games WHERE cost >= $cost and genre = '$genre' ";

$result = mysqli_query($db, $sql_statement);


while($row = mysqli_fetch_assoc($result))
{
  $cost = $row['cost'];
  $genre = $row['genre'];
$gamename = $row['gamename'];
  $releaseyear = $row['releaseyear'];
  $developmenttime = $row['developmenttime'];
  $companyname = $row['companyname'];

	echo "<tr>" . "<th>" . $cost . "</th>" . "<th>" . $gamename ."</th>" . "<th>" .$genre ."</th>" . "<th>". $releaseyear ."</th>" . "<th>". $developmenttime ."</th>" . "<th>" .$companyname;
}


}

else
{

	echo "The form is not set.";

}


?>