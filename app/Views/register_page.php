<?php



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="stylesheet1.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container py-5 h-50 mt-5 " style="border: 1px solid black; background-color:white; max-width: 400px; border-radius: 25px;   box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
        <h2 class="text-center mt-5">Register</h2>
        <form method="post" action="http://localhost/codeigniter/public/process/login" class="mx-auto mt-5" style="max-width: 320px">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input class="form-control" type="text" name="username" />
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="pass" />
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input class="form-control" type="password" name="pass" />
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
            <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
  
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  <style>
body {background-color: #6096B4;
    }

h1   {color: blue;}
p    {color: red;}
</style>
</html>