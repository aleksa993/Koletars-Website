<?php

include("config.php");

session_start();

if(!isset($_SESSION['name'])){
    header('location:loginAdmin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <title>Koletars Admin</title>
</head>
<body>
   <?php require_once 'process.php'; ?>
   
    <?php

    if(isset($_SESSION['message'])): ?>


    <div class="alert alert-<?=$_SESSION['msg_type']?>">

        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>
    <?php endif ?>
    <div class="container">
   
   <?php

    $mysqli = new mysqli('localhost', 'root', '', 'koletars') or die(mysqli_error($mysqli));  
    $result = $mysqli->query("SELECT * FROM artikli") or die($mysqli->error);
   // $resultAkcija = $mysqli->query("SELECT * FROM artikli WHERE akcija=$action") or die($mysqli->error);
    //pre_r($result->fetch_assoc());
  ?>
    <br>
    <a class="btn btn-secondary btn-lg float-right" href="logout.php" role="button">Logout</a><br>
    <div class="row justify-content-center artikli">
    

    <div class="row justify-content-center ">
        <div class="kard">
            <h1 style="text-align: center;">Dodaj artikal</h1>
            <br>
            <div>
                
                <form action="process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>Ime</label>
                    <input type="text" name="ime" class="form-control"
                    value="<?php echo $name; ?>" placeholder="Unesi ime artikla" required> 
                </div>
                <div class="form-group">
                    <label>Kategorija</label>
                    <input type="text" name="kategorija" class="form-control"
                    value="<?php echo $category; ?>" placeholder="Unesi kategoriju artikla" required>
                </div>
                <div class="form-group">
                    <label>Akcija</label><br>
                    <input type="radio" id="da" name="akcija" value="1">
                    <label for="da">DA</label><br>
                    <input type="radio" id="ne" name="akcija" value="0" checked>
                    <label for="ne">NE</label><br>
                   
                </div>
                <div class="form-group">
                <?php
                 if ($update == true ):
                ?>
                <button type="submit" class="btn btn-info" name="update">Update</button>
                 <?php else: ?>
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                 <?php endif; ?>
                </div>
            </form>
            </div>
            
        </div>
    </div>
    </div>
        <br><br>
        <table class="table">
            <thead>
            <h1 style="text-align: center;">Artikli</h1>
                <tr>
                    <th>Ime</th>
                    <th>Kategorija</th>
                    <th>Akcija</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
        <?php
            while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['ime']; ?></td>
                <td><?php echo $row['kategorija']; ?></td>
                <td><?php echo $row['akcija']; ?></td>
                <td>
                    <a href="admin.php?edit=<?php echo $row['id']; ?>"
                    class="btn btn-info">Edit</a>
                    <a href="process.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-danger">Delete</a>
                    
                </td>
            </tr>
            <?php endwhile; ?>
        </table>

    
  <?php

    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

   ?>
    
    <br><br>
    
    <br>
</body>
</html>