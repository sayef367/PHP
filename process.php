<?php
    // Create connection
$mysqli = new mysqli("localhost", "root", "", "php_class") or die(mysqli_error($mysqli));

    // Data Insert
if (isset($_POST['save'])) {
    
    mysqli_query($mysqli,"INSERT INTO data  VALUES(NULL,'$_POST[b_date]','$_POST[firstname]','$_POST[lastname]','$_POST[email]', 
        '$_POST[contact]')") or die($mysqli->error);

    header("location: index.php");
}

    // Create Delete
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error);

    header("location: index.php");
}

    // data update
if (isset($_POST['update'])) {
    mysqli_query($mysqli,"UPDATE data SET b_date='$_POST[b_date]', firstname='$_POST[firstname]', 
        lastname='$_POST[lastname]', email='$_POST[email]', contact='$_POST[contact]' where id='" . $_GET['id'] . "'");
    
    header("location: index.php");
}

?>