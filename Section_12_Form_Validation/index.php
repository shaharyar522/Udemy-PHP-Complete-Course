<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h2>Simple From</h2>

    <form action="process.php" method="POST" autocomplete="off">
        <input  name="username" type="text" placeholder="Enter your username">
        <input name="password" type="password" placeholder="Enter you password">
        <input type="submit">
    </form>

    <!-- http://localhost/udemy/Section_12_Form_Validation/process.php?username=shari&password=123
    http://localhost/udemy/Section_12_Form_Validation/ -->
</body>
</html>