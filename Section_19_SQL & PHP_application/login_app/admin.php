<?php
session_start();
include('partials/header.php');
include('partials/navigation.php');


if (!is_user_logged_in()) {
    header("location: login.php");
}
$result = mysqli_query($conn, "SELECT id, username, email, reg_date FROM users");

// for edit
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    //edit
    if (isset($_POST['edit_user'])) {
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
          $new_username = mysqli_real_escape_string($conn, $_POST['username']);
        $new_email = mysqli_real_escape_string($conn, $_POST['email']);
      


        $sql = "UPDATE users SET username = '$new_username', email = '$new_email' WHERE id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        // check_query hum db.php ki file main bnay hnva hian ?
        if (check_query($conn, $result)) {
            header("Location: admin.php");
            exit();
        }
    }

    //delete
    if(isset($_POST['delete_user']))
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $sql = "DELETE FROM users WHERE id = '$user_id' ";
        $result = mysqli_query($conn, $sql);
        if (check_query($conn, $result)) {
            header("Location: admin.php");
            exit();
        }
}
?>





<h1>Manage Users</h1>

<div class="container">
    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Registration Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>


            <?php while ($user = mysqli_fetch_assoc($result)): ?>

                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <!-- now es main November 25 proper es month ka function add kya hian  -->
                    <td><?php echo full_month_date($user['reg_date']); ?></td>
                    <td>
                        <form method="POST" style="display:inline-block;">
                            <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                              <input type="text" name="username" value="<?php echo $user['username']; ?>" required>
                            <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
                            <button class="edit" type="submit" name="edit_user">Edit</button>
                        </form>
                        <form method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                            <button class="delete" type="submit" name="delete_user">Delete</button>
                        </form>
                    </td>
                </tr>

            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Include Footer -->
<?php include("partials/footer.php") ?>