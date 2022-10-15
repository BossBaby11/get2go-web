<?php 
    session_start();
    require "../script/conn.php";

    if ( isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row["password"])) {
                $_SESSION["login"] = true;
                $_SESSION["name"] = $_POST["username"];
                header("Location: /admin");
                exit;
            }
            
        }

        $error = true;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Kementerian Pariwisata</title>
    <link rel="stylesheet" href="/style/login.css">
    <link rel="icon" href="/favicon.ico">
</head>
<body>
    <section>
        <form action="" method="post">
            <?php if( isset($error) ) :?>
            <p style="color: red; font-style: italic;">Username / Password salah</p>
            <?php endif ?>

            <h3>Username</h3>
            <input type="text" name="username" id="username" maxlength="20" required autofocus autocomplete="off">
            <br><br>

            <h3>Password</h3>
            <input type="password" name="password" id="password"maxlength="20" required autocomplete="off" >
            <br><br>

            <button type="submit" name="login">Login</button>
        </form>
    </section>
</body>
</html>