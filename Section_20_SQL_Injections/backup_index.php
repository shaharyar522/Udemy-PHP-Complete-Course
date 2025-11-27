<?php
// Note : jb first  vedio main hain us ka code hian ok right now


$username = 'shari';
$conn = mysqli_connect("localhost", "root", "", "sql_injection");

$sql = "SELECT * FROM  users WHERE username='$username' OR '1' = '1'";
$result = mysqli_query($conn, $sql);


//Avoid SQl injection with prepared statement 

$sql_prepare = "SELECT * FROM users WHERE username = ? ";
$stmt = mysqli_prepare($conn, $sql_prepare);
//Bin the param
mysqli_stmt_bind_param($stmt, "s", $username);
//execute
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);


?>


<ul>
    <?php while ($user = mysqli_fetch_assoc($result)): ?>

        <li><?php echo $user['username']; ?></li>

    <? endwhile; ?>
</ul>