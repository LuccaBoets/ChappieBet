<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
    <style>

        /*
@hiercelik - hiercelik.net
@koalapix - koalapix.com
*/
        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);
        @import url(http://fonts.googleapis.com/css?family=Titillium+Web&subset=latin,latin-ext);
        @media (min-width: 768px) {
            .kpx_row-sm-offset-3 div:first-child[class*="col-"] {
                margin-left: 25%;
            }
        }
        h2{
            text-align: center;
        }


        body {
            font-family: 'Titillium Web', sans-serif;
        }
        a{
            color:#ff5400;
        }
        a:hover {
            opacity: 0.8;
            color:#ff5400;
            text-decoration:none;
        }

    </style>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header" style="margin: 50px">
  <h2>Register</h2>
  </div>


      <form  method="post">

          <div class="row kpx_row-sm-offset-3">
              <div class="col-xs-12 col-sm-6">
                  <form class="kpx_loginForm" action="" autocomplete="off" method="POST">
                      <div class="input-group">
                          <input type="text" class="form-control" name="Naam" id="naam" placeholder="Username" required>
                      </div>
                      <hr />

                      <div class="input-group">
                          <input  type="email" class="form-control" name="Mail" id="Mail" placeholder="E-Mail" required>
                      </div>

                      <hr />

                      <div class="input-group">
                          <input  type="password" class="form-control" name="Password" id="Password" placeholder="Password" required>
                      </div>
                        <input type="radio"                name="radiocheck"
  id="18+" required> I am at least 18 years old.

                      <hr />
                      <button class="btn btn-lg btn-outline-primary btn-block" type="submit" name="submit"><i class="fa fa-sign-in"></i> Register</button>
                  </form>
              </div>
          </div>
      </form>
      <div class="row kpx_row-sm-offset-3">
          <div class="col-xs-12 col-sm-3">


          </div>
          <div class="col-xs-12 col-sm-3">
              <p class="kpx_forgotPwd" style="float: right;">
                  <a href="../../ChappieBet/index.html">Back to menu</a>
              </p>
          </div>
      </div>

    <?php
    
           include "connect.php";
        if (isset($_POST['submit'])) {

            echo "dklf";
            //Date date = new Date(); //INSERT INTO `tblgebruikers`(`gebruikerID`, `username`, `password`, `mail`, `totaalGeld`, `online`, `profImage`, `coins`, `winstreak`, `lastDate`, `daysOnline`, `admin`, `achievement_1`, `achievement_2`, `achievement_3`, `achievement_4`, `achievement_5`, `achievement_6`, `achievement_7`, `achievement_8`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20])
            $sql = "INSERT INTO `tblgebruikers`(`username`, `password`, `mail`, `totaalGeld`, `online`, `coins`, `winstreak`, `lastDate`, `daysOnline`, `admin`, `achievement_1`, `achievement_2`, `achievement_3`, `achievement_4`, `achievement_5`, `achievement_6`, `achievement_7`, `achievement_8`,`profImage`) 
            VALUES ('".$_POST["Naam"]."','".md5($_POST["Password"])."','".$_POST["Mail"]."',0,0,500,0,'".(date("Y-m-d"))."',0,0,0,0,0,0,0,0,0,0,0)";
            echo($sql);

            if($mysqli->query($sql)){
                echo"ja";
                header("location: ../index.html");
            }else{
                echo "Error record toevoegen: ".$mysqli ->error."<br>";
            }
            $mysqli->close();

            
            
        
        }

    
    ?>
    
</body>
</html>