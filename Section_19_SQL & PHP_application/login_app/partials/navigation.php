<nav>
    <ul>
        <li><a class="<?php echo setActiveClass('index.php'); ?>" href="index.php">Home</a></li>

        <?php if (isset($_SESSION["log_in"]) && $_SESSION["log_in"] === true): ?>
            <!-- Show this if user is logged in -->
            <li><a  class="<?php echo setActiveClass('admin.php'); ?>" href="admin.php">Admin</a></li>
            <li><a href="logout.php" class="<?php echo setActiveClass('logout.php'); ?>">Logout</a></li>
        <?php else: ?>
            <!-- Show this if user is NOT logged in -->
            <li><a class="<?php echo setActiveClass('register.php'); ?>" href="register.php">Register</a></li>
            <li><a class="<?php echo setActiveClass('login.php'); ?>" href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>
<!-- matalb k jb main index par jao ga agr user session log nhi ahin --
 uay tu lazmi hi dehkain ga laken  us k necay mohjy-->

 <!-- agr login hain  -->
<!--  home , Admin , Logout  ko show karo -->     

<!-- agr login nhi hain -->
 <!-- home , Register , login  ko show karo -->
