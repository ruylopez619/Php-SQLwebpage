<?php 

include "config.php";

if (isset($_POST['BId'])){

$selection_id = $_POST['BId'];

$sql_statement = "DELETE FROM book WHERE BId = '$selection_id'";

$result = mysqli_query($db, $sql_statement);

header ("Location: admin.php");

}

else
{

	echo "The form is not set.";

}

?>