<?php
    require_once "../database/database.php";
    $conn = new DB();
    $table = "tb_user";
    
    $id = $_POST['id'];  
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $web = $_POST['web'];
    
    if ($id == "") {
        $query = "INSERT INTO $table(fname,lname,email,web) VALUES('$fname','$lname','$email','$web')";
    } else {
        $query = "UPDATE $table SET fname='$fname',lname='$lname',email='$email',web='$web' WHERE id=$id";
    }
    
    $conn->insert($query);

?>
