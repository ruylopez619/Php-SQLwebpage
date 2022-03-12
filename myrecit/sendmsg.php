<?php

include "config.php";

if (isset($_POST['BId'])){ 
    $sailor_id = $_POST['BId']; 
    $sailor_name = $_POST['Bname']; 
    $srating = $_POST['Author'];
    $mai = $_POST['Genre']; 
    $sql_statement = "INSERT INTO `book`(`BId`, `Bname`, `Author`, `Genre`) VALUES ($sailor_id, '$sailor_name', '$srating', '$mai')"; 

    $result = mysqli_query($db, $sql_statement);

header ("Location: index.php");

}

else
{

	echo "The form is not set.";

}


?>