<?php
session_start();
include "connect.php";

?>
<html>
<head>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="MainCss.css" rel="stylesheet">
    <link href="testIndex.css" rel="stylesheet" type="text/css">
    <title>Leaderboard</title>
    <style>
        #achievements{
            margin-left: auto;
            margin-right: auto;
            border: 2px rgb(199,73,58) solid;
            width: 60%;

        }

        td{
            border: 1px #917164 solid;
            border-spacing: 0px;
            padding: 0px;
            font-size: 20px;
        }

        .giftPic{
            height: 75px;
            width: 15%;
        }
    </style>

</head>
<body>
<ul><li><h2><a class="nav-link" href='index.php'>Back</a></h2></li></ul>
<br>
<h1 style="text-align:center;">Leaderboard</h1>

<table id='achievements'>
    <tr>
        <td>Usernames</td>
        <td>Coins</td>
        <td>Consecutive days online</td>
    </tr>
<?php
$sql = "SELECT * FROM tblgebruikers ORDER BY coins DESC ";
$sqlVOERUIT = $mysqli->query($sql);


while ($row = $sqlVOERUIT->fetch_assoc()) {
    echo "<tr>
    		<td class='giftPic'>".$row['username']."
    		</td><td class='giftPic'>".$row['coins']."
    		</td><td class='giftPic'>".$row['daysOnline']."
    		</td></tr>";
}
?>
</table>
</body>



</html>
