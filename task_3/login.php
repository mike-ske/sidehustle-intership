<?php 
session_start();

$save = isset($_POST['login']);

if ($save) {

    $_SESSION['user'] =  $_POST['username_1'];
    $_SESSION['pass'] = $_POST['password_1'];
    $_SESSION['check_box'] = isset($_POST['check']);



    if ($_SESSION['user'] == $_SESSION['username'] && $_SESSION['password'] == $_SESSION['pass'] && $_SESSION['check_box']  == 1) 
    {
      $_SESSION['success'] =  "Success!";
      header("location: welcome.php");
     
    }
    else 
    {
      $_SESSION['error'] = "Failed to login";
      
    }
    
  
   
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form_main">
        <form action="" method="post" class="form">

                <?php 
                        // if (!empty($_SESSION['success']) ) {
                        //     echo "<div class='msg_success' id='msg'>".$_SESSION['success']."</div>";
                        // }

                        if (!empty($_SESSION['error']) ) {
                            echo "<div class='msg_alert' id='msg'>".$_SESSION['error']."</div>";
                        }

                        if (isset($_SESSION['success']) ) {
                            unset($_SESSION['success']);
                        }
                        
                        if (isset($_SESSION['error']) ) {
                            unset($_SESSION['error']);
                        }
                ?>

            <h1>Login</h1>
            <input type="text" name="username_1" id="username" class="username" required placeholder="Username">
            <input type="password" name="password_1" id="password" class="password" required placeholder="Password">
            
            <label for="check" class="check"><input type="checkbox" name="check" id="check" value="1">Remember me</label>
            

            <input type="submit" value="Login" name="login" class="login"> 
            <label for="acct" class="acct"> <a href="index.php" id="acct">Create account</a></label>
        </form>
    </div>
</body>
</html>