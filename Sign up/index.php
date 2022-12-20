<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Sign up</title>
</head>
<body>
    <form action ="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class = "error"><?php echo $_GET['error']; ?></p>
       <?php } ?>
        <label>User Name</label>
        <input type="text" name = "uname" placeholder = "User Name"> <br>

        <label>User Name</label>
        <input type="password" name = "password" placeholder = "Password">

        <button type ="submit">Login</button>
    </form>
</body>
</html>