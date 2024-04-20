<?php
include '../config/database.php';

$id = $_GET['id'];

$stmt = $db->prepare("DELETE FROM guru WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location: index.php');
exit;