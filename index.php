<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="overlay"></div>
   <form action="login.php" method="post" class="box">
       <div class="login-area">
        <h1>LOGIN</h1>
           <input type="text" name="email" class="username" placeholder="Email">
           <input type="password" name="password" class="password" placeholder="Password">
           <input type="submit" value="Login" class="submit">
           <a href="registerForm.php">Forgot Password?</a>
       </div>
   </form> 
</body>
</html>