<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM cardapio WHERE id = $id";
    $conn->query($sql);
}

header("Location: admin.php");
?>
