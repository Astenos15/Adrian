<?php

require "update.php";
include "function.php";
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    
<div class="container col-3 mt-5 p-4 mx-auto border border-success rounded-lg bg-light">
    <h1>UPDATE</h1>
    <div>
        <form method="post" action="delete.php">
            <div>
                <label>Username</label>
                <input type="text" name="username" class="form-control">
            </div><br>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div><br>

            <select name="id">
                <?php
                    deleteTable();
                ?>

            </select>
            <input type="submit" name="submit" value="update" class="btn btn-primary btn btn-lg"><br>
        </form>
    </div>
</div>


</body>
</html>