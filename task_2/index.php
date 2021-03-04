<?php 

$save = isset($_POST['send']);

if ($save) {

    $name =  $_POST['name'];
    $email = $_POST['email'];
    $username =  $_POST['username'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $phone =  $_POST['phone'];

    $array_data = array('Full name' => $name, 
                        'Email address' => $email, 
                        'Username' => $username, 
                        'Password' => $password, 
                        'Age' => $age,
                        'Phone Number' => $phone
                            
        );

        foreach ($array_data as $key => $value) {
            echo '<div class="msg">This is your <strong>'. $key.'</strong> : '. $value .'<br><br> </div>';
        }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="reg_form">
        
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form_1">
            <h1>Registration form</h1>

            <input type="text" name="name" id="name"  placeholder="Full name" required>
            <input type="text" name="email" id="email"  placeholder="Email address" required>
            <input type="text" name="username" id="username"  placeholder="Username" required>
            <input type="text" name="password" id="password"  placeholder="Password" required>
            <input type="number" name="age" id="age" placeholder="Age"  required>
            <input type="text" name="phone" id="phone"  placeholder="Phone number" required>

            <input type="submit" value="Submit" name="send" class="send">
        </form>
    </div>
</body>
</html>