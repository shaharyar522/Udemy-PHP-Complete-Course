<?php
include('partials/header.php');
include('partials/navigation.php');

session_start();
if (!isset($_SESSION["log_in"]) && isset($_POST["log_in"]) !== true) {
    header("Location: login.php");
    exit();
}
?>


<div class="container">
    <h2>Well to Admin <?php echo $_SESSION["username"];  ?></h2>
</div>

<a href="logout.php">Logout</a>

<?php
include("partials/footer.php");
?>