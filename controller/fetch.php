<?php
    $id = $_POST['id'];
    require_once "../database/database.php";
    $conn = new DB();
    $table = "tb_user";

    $query = "SELECT * FROM $table WHERE id = $id";
    $result = $conn->select($query);
    $row = $result->fetch_array();
    echo json_encode($row);
    
?>