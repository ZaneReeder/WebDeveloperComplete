<?php 

include('connection.php'); 

$query = "SELECT * FROM users"; //* == all
$result = mysqli_query( $conn, $query );

?>