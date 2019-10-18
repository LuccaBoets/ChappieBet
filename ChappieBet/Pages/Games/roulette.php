<html>
    <head>
        <link rel="stylesheet" type="text/css" href="roulette.css">
    </head>
    <body class="bg">
        
        <script> 
  
  
        </script>         
        
        
        <?php
        
        include "../connect.php";
                    $sql = "SELECT * FROM `tblgebruikers` WHERE 1";
            echo($sql);

            $resultaat = $mysqli->query($sql);
            $row = $resultaat->fetch_assoc();
            echo $_GET['data']

        
        ?>
        

        
    </body>
</html>