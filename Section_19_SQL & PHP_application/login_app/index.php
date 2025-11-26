<?php
include('partials/header.php');
include('partials/navigation.php');
?>

<!-- hero section  -->
<div class="container">
    <div class="hero">
        <div class="hero-content">
            <h1>Wellcome to Our PHP login App</h1>
            <p>Securey Login and mange your Acount with us</p>
            <div class="hero-buttons">
          
                <?php if(is_user_logged_in()):?>
                <a class="btn" href="login.php">Login</a>
                <a class="btn" href="register.php">Register</a>

                  <?php endif; ?>
            </div>

        </div>
    </div>
</div>

<?php
include("partials/footer.php");
?>