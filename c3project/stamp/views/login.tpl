<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/list.css">
</head>
<body class="stampbg">
    <div class="container">
        <h1>Stamp Library</h1>
        
        <?php if($error) { ?>
            <p style="color:red">Username or password incorrect</p> <?php } ?>
        
            <form action="submitLogin.php" method="post">
            <input class="log" type="text" name="user" placeholder="Username" /><br>
            <input class="log" type="password" name="pass" placeholder="Password" /><br>
            <button type="submit">Login</button> 
            </form>
    </div>
    <div class="container">   
        <form action="register.php" method="post">
            <p>Not a user? Register below!</p>
        <button action="register.php" type="register">Register</button>
        </form>
    </div>

    
</body>
</html>