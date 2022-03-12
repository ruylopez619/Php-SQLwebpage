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


<div align="center">
<p style="font-family:'Courier New', Courier, monospace;font-size:150%;">WELCOME!</p>
<h1 style="border:10px solid #851195;">Database Creation and Administration Panel</h1>
<h2 style="border:10px solid #851195;">Deletion Page</h2>
<br>
<br>
    <img src="f.jpg" alt="THIS IS MY CUTE CAT!" height="500" width="1500">
</a>
<?php 

include "config.php";

include "messages.php";

?>

<form action="sendadmin.php" method="POST">
<select name="BId">

<?php

$sql_command = "SELECT BId FROM book";

$myresult = mysqli_query($db, $sql_command);

while($id_rows = mysqli_fetch_assoc($myresult))
{
	$id = $id_rows['BId'];
	echo "<option value=$id>".$id."</option>";
}

?>
</select>

<button>DELETE</button>
</form>

</div>
</body>
</html>