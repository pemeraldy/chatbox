<?php

//$fname = $_POST['fname'];
//$lname = $_POST['lname'];
// $emai = $_POST['email'];
// $lname = $_POST['lname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Log In</title>
</head>
<body>
<div class="container col col-lg-4">
            <form action = "" method="POST">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="pwd" class="form-control" id="password" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Sign Up</button>
                
            </form>
            
    </div>
</body>
</html>