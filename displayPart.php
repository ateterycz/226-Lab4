<?php
	include "dbconnect.inc.php";

	$part = $_GET['PartNum'];
	$query2 = "SELECT PART_NUM, DESCRIPTION, ON_HAND, CLASS, WAREHOUSE, PRICE FROM PART WHERE PART_NUM="."'".$part."'";

	$stmt2 = $conn->prepare($query2);
	$stmt2->execute();
	$result = $stmt2->get_result();
	if($result->num_rows > 0){
			$user = $result->fetch_assoc();
			echo '<table border="1px"><tr>';
			echo '<td>'.$user['PART_NUM'].'</td>';
			echo '<td>'.$user['DESCRIPTION'].'</td>';
			echo '<td>'.$user['ON_HAND'].'</td>';
			echo '<td>'.$user['CLASS'].'</td>';
			echo '<td>'.$user['WAREHOUSE'].'</td>';
			echo '<td>'.$user['PRICE'].'</td>';
			echo '</tr></table>';
	}
	echo '<p><a class="btn btn-secondary" href="Assignment4c.php">Back</a></p>';
?>