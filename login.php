<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
   <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
   <label for="userName">User Name :</label>
        <input type="text" id="userName" name="userName"> <br> <br>
        <label for="Password">Password :</label>
        <input type="text" id="Password" name="Password"> <br> <br>
        <input type="submit" name="submit" value="Login"> <br> <br>
   </form>
        <a href="file-io.php">Click to register</a> 

        <?php
        $userName = $Password ="";
         $userName = input($_POST["userName"]);
         $Password =input( $_POST["Password"]);
        
         $readValue= json_decode(read());
        
        if($userName->username == $userName && $Password->password == $Password){
            echo "Login sucess";
        }
        
        
         
        
        function read(){
            $fileName ="data.txt";
            $resorse= fopen($fileName, "r");
            $fileRead= fread($resorse, filesize($fileName));
            fclose($resorse);
            return $fileRead;
      
        }
        function input ($v){
            $v = htmlspecialchars($v);
            $v = trim($v);
            $v = stripslashes($v);
            return $v;
             
        }
        
        ?>

</body>
</html>