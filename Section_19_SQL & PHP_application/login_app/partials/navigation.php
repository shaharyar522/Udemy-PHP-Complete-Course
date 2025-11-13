<nav>
    <ul>
        <li><a href="index.php">Home</a></li>

        <?php if (isset($_SESSION["log_in"]) && $_SESSION["log_in"] === true): ?>
            <!-- Show this if user is logged in -->
            <li><a href="admin.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <!-- Show this if user is NOT logged in -->
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>
<!-- matalb k jb main index par jao ga agr user session log nhi ahin --
 uay tu lazmi hi dehkain ga laken  us k necay mohjy-->

 <!-- agr login hain  -->
<!--  home , Admin , Logout  ko show karo -->     

<!-- agr login nhi hain -->
 <!-- home , Register , login  ko show karo -->
