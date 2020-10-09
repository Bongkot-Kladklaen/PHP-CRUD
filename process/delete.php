<?php
    $id = $_POST['id'];
    require_once "../database/database.php";
    $conn = new DB();
    $table = "tb_user";

    $query = "DELETE FROM $table WHERE id = $id";
    $conn->select($query);

?>