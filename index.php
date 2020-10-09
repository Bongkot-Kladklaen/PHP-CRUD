<?php 
    require_once "database/database.php";
    $conn = new DB();
    $table = "tb_user";

    $query = "SELECT * FROM $table";
    $result = $conn->select($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
</head>
<body>
    <div class="container">
        <br />
        <h3 align="center">Bootstrap Modal - PHP Mysql Ajax</h3><br/>
        <div align="right"><button name="add" id="add" class="btn btn-info" data-toggle="modal" data-target="#insert_modal">Add</button></div><br/>
        <table class="table table-dark table-borderless">
            <thead>
                <tr>
                    <th width="35%">Firstname</th>
                    <th width="35%">Lastname</th>
                    <th width="10%">View</th>
                    <th width="10%">Edit</th>
                    <th width="10%">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>
                    <td><input type="button" class="btn btn-primary view_data" name="view" value="View" id="<?php echo $row['id'];?>"/></td>
                    <td><input type="button" class="btn btn-success edit_data" name="edit" value="Edit" id="<?php echo $row['id'];?>"/></td>
                    <td><input type="button" class="btn btn-danger delete_data" name="delete" value="Delete" id="<?php echo $row['id'];?>"/></td>
                </tr>
                <?php }?>
            </tbody>
            <?php require_once "insertModal.php"; ?>
            <?php require_once "viewModal.php"; ?>
        </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="process.js"></script>
</html>