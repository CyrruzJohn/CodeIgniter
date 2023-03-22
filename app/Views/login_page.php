<?php



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container py-5" style="background-color:white; max-width: 400px; border-radius: 25px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); height: 600px; border: none; outline: none; ">
        <h2 class="text-center mt-5">Login to URL Shortening System</h2>
        <form method="post" action="http://localhost/codeigniter/public/process/login" class="mx-auto mt-5" style="max-width: 320px">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input class="form-control" type="text" name="username" />
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="pass" />
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
            <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
            Don't have an account yet? <a href="http://localhost/codeigniter/public/register">Sign up</a>
            </div>
        </form>
  
</div>
  
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<style>
  html, body {
  height: 100%;
  width: 100%;
  margin: 0;
}
body {
  background: radial-gradient(circle at 10% 20%, rgb(0, 93, 133) 0%, rgb(0, 181, 149) 90%);
}
.container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>