<?php
    require "php/session_check_out.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="w-100 m-auto">
        <form id="loginForm" name="loginForm" method="post" class=" m-auto p-3 rounded" style="max-width: 350px;">
            <h1>Sign In</h1>
            <div class="mt-4 form-floating">
                <input type="text" class="form-control rounded-0 rounded-top" id="user" placeholder="name@example.com" required>
                <label for="user" class="form-label">Username</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="password" class="form-control rounded-0 rounded-bottom" id="password" placeholder="Password123+_" required>
                <label for="password" class="form-label">Password</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Sign In</button>
            </div>
            <div class="mb-3 text-center">
                <a href="register.php">Doesn't have an account? Register</a>
            </div>
        </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" 
crossorigin="anonymous"></script>
<script src="js/account.js"></script>
</html>