<?php 
session_start();
// ============================ CODE TO GENERATE RECHARGE CARD PIN ==========

$gen = isset($_POST['pin']);
if ($gen) {
    
    $i=0;
    $num = 200;
    
       

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recharge Card Pin</title>
    <style>
    body {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    form {
            margin: auto;
            width: auto;
            height: 100%;
        }
        .btn {
            width: auto;
            height:auto;
            padding: 15px;
            border-radius : 10px;
            background: blue;
            color:#fff;
            font-size: 14px;
            text-align:center;
            cursor:pointer;
            outline: none;
            border: none;
        }
        .display {
            width: 100%;
            height: auto;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    
        <input class="btn" name="pin" value="Generate Pin" type="submit">
        <div class="display">
        <h1>Recharge Card Pin</h1>
            <?php 
      for ($i=0; $i <  $num; $i++) { 
        $rand_num = rand(1000000000000000, 99999999999999);
        echo "\n\n\n";
        // $pins = $rand_num . "\n". "<br>";
        $_SESSION['pins'] = $rand_num . "\n". "<br>";
         echo $_SESSION['pins'];
         };
                //if (isset($_SESSION['pins'])) {
                   // echo $_SESSION['pins'];
               // }
                          
          };
            ?>
        </div>
       
    </form>
    
       
   

</body>
</html>
