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
<br>
<br>
    <img src="f.jpg" alt="THIS IS MY CUTE CAT!" height="500" width="1000">
</a>
<?php 
include "messages.php";
?>

<form action="sendmsg.php" method="POST">

<input type="text" id="BId" name="BId" placeholder="Type BId"><br>
<input type="text" id="Bname" name="Bname" placeholder="Type Bname"><br>
<input type="text" id="Author" name="Author" placeholder="Type Author"><br>
<input type="text" id="Genre" name="Genre" placeholder="Type Genre"><br>

	<button class="button2">SEND</button>
</form>

<a href="http://localhost/myrecit/admin.php" target="_blank">
    <img src="del.jpg" alt="THIS IS MY CUTE CAT!" height="100" width="400">
</a>
<a href="http://localhost/myrecit/selectphp.php" target="_blank">
    <img src="selecth.jpg" alt="THIS IS MY CUTE CAT!" height="100" width="400">
</a>
<h3 style="border:10px solid #851195;">Press the photo on the left to delete book from library database, Press the photo on the right to select books from library database</h1>
</div>
</body>
</html>