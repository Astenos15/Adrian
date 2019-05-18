<?php

require "update.php";



function showData(){

    global $connection;
    $query ="SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$query){
        die("query failed" . mysqli_error());
        
    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row["id"];
        $username = $row ["username"];
        $password = $row ["password"];
        echo "<option value='$id'>$id . $username . $password</option>";

    }
}


// if(isset($_POST["submit"])){
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     $id = $_POST["id"];


//     $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";

//     $result = mysqli_query($connection, $query);

//     if(!$result){
//         die("failed" . mysqli_error());
//     }

// }

function cdeleteTable() {
if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $comment = $_POST["comment"];
  


    $query = "DELETE FROM tbl_setting SET id = '$id', comment = '$comment' WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("failed" . mysqli_error());
    }
 }
}





function deleteTable() {
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];


    $query = "DELETE FROM users SET username = '$username', password = '$password' WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("failed" . mysqli_error());
    }
 }
}


if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username === "joseph" && $password === "parado"){
        header("location:read.php");
    } else {
        echo "Incorrrect log in information";

    } 

}



?>