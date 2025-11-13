<?php
session_start();
if (!isset($_SESSION["log_in"]) && isset($_POST["log_in"]) !== true) {
    header("Location: login.php");
    exit();
}
?>

<?php
include('partials/header.php');
include('partials/navigation.php');
?>

<h1>admin</h1>
<h3>well come admin</h3>
<a href="logout.php">Logout</a>

<?php
include("partials/footer.php");
?>