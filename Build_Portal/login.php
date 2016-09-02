<?php
  require_once '_db.php';

    $name = $_POST['user'];
    $password = $_POST['pass'];

    $name = stripslashes($name);
    $password = stripslashes ($password);

    $query = "SELECT * FROM rooms WHERE name='$name' AND password='$password'";
    

    if($name==$password){
    echo'worked';
    }

?>