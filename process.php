<?php
//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'koletars') or die(mysqli_error($mysqli));

$id = 0;
$name = '';
$category = '';
$action = 0;
$update = false;

if(isset($_POST['save'])){
    $name = $_POST['ime'];
    $category = $_POST['kategorija'];
    $action = $_POST['akcija'];

    $mysqli->query("INSERT INTO artikli (ime, kategorija, akcija) VALUES ('$name','$category','$action')")or
        die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: admin.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM artikli WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: admin.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM artikli WHERE id=$id") or die($mysqli->error());
    if (is_iterable($result) == 1){
        $row = $result->fetch_array();
        $name = $row['ime'];
        $category = $row['kategorija'];
        $action = $row['akcija'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['ime'];
    $category = $_POST['kategorija'];
    $action = $_POST['akcija'];

    $mysqli->query("UPDATE artikli SET ime='$name', kategorija='$category', akcija='$action' WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: admin.php');
}