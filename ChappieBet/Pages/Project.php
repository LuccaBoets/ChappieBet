
<?php

session_start();
    include "connect.php";
    echo "<h1>Record wijzigen</h1>";


    $sql = "SELECT * FROM `tblgebruikers` WHERE gebruikerID = " . $_SESSION['id'];


    $resultaat = $mysqli->query($sql);
    $row = $resultaat->fetch_assoc();
    

    echo "<table>
        <form  method='post'>
        
            <tr><td>username</td><td><input type='text' value='".$row["username"]."' name='username'></td></tr>
            <tr><td>mail</td><td><input type='text' value='".$row["mail"]."'name='mail'></td></tr>
            <tr><td colspan=2><input type='submit' value='aanpassen' name='submit' style='width: 100%;'></td></tr>
        
        </form>    
    </table>
    <form  method='post'>    
        password <input type='text' value=''name='password'>     
        <input type='submit' value='aanpassen' name='pass' style='width: 169px;'>
    </form> 
    ";

    if (isset($_POST["submit"])){
        
        $username = $_POST["username"];
        $mail = $_POST["mail"];

        $sql = "UPDATE tblgebruikers SET username = '".$username."',mail = '".$mail."' WHERE gebruikerID = ". $_SESSION['id']."";
        
        //print $sql;
        if ($mysqli -> query($sql) == TRUE){
            
            echo "Record succesvol aangepast.";
            
        } else {
            
            echo "Error record toegevoegen: " . $mysqli->error;
            
        }
    }
    if (isset($_POST["pass"])){
        
        $sql1 = "UPDATE tblgebruikers SET password = '".md5($_POST["password"])."' WHERE gebruikerID = ". $_SESSION['id']."";
        
        //print $sql;
        if ($mysqli -> query($sql1) == TRUE){
            echo "Record succesvol aangepast.";
        
        } else {
        
            echo "Error record toegevoegen: " . $mysqli->error;
            
        }
    }

        echo "<br><a href='index.php'>Terug naar menu</a>";

?>


