<?php
require './db.php';
$q = "SELECT * FROM Toscana";
$toscana = mysqli_query($mysqli, $q);
while($row = $toscana->fetch_assoc()) {
    $toscanaArr[] = $row;
}
echo json_encode($toscanaArr);
?>