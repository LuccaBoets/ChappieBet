<link rel = "stylesheet" href="Styles.css"/>

<?php
session_start();

session_destroy();
header('Location: index.php');