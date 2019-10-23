<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  <h2>Register</h2>
  </div>

  <form method="post" action="register.php">
  <div class="input-group">
    <label>Username</label>
    <input type="text" name="Naam" value="" required>
  </div>
  <div class="input-group">
    <label>Email</label>
    <input type="email" name="Mail" value="" required>
  </div>
  <div class="input-group">
    <label>Password</label>
    <input type="password" name="Password" required>
  </div>
  <div class="input-group">
    <label>Confirm password</label>
    <input type="password" name="password_2">
  </div>
  <div class="input-group">
    <button type="submit" name="submit">Register</button>
  </div>
  <p>
  Already a member? <a href="logInFormulier.php">Sign in</a>
  </p>
  </form>
    
    <?php
    
           include "connect.php";
        if (isset($_POST['submit'])) {
        
            //Date date = new Date();
            
            $sql = "INSERT INTO `tblgebruikers`(`username`, `password`, `mail`, `totaalGeld`, `online`, `coins`, `winstreak`, `lastDate`, `daysOnline`) 
            VALUES ('".$_POST["Naam"]."','".md5($_POST["Password"])."','".$_POST["Mail"]."',0,0,0,0,'".(date("H:i:s"))."',0)";
            echo($sql);

            $resultaat = $mysqli->query($sql);
            
            
        
        }

    
    ?>
    
</body>
</html>