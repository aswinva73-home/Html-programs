
<!DOCTYPE html>
<html>
<body>

<h1>Registration Form</h1>

<form action="" method="POST">

    Username: <input type="text" name="username"><br><br>

    Email: <input type="email" name="email"><br><br>

    Password: <input type="password" name="password"><br><br>

    Confirm Password:
    <input type="password" name="confirm_password"><br><br>

    <input type="submit" name="register" value="Register">

</form>

<?php

if (isset($_POST['register'])) {

    if (
        empty($_POST['username']) ||
        empty($_POST['email']) ||
        empty($_POST['password']) ||
        empty($_POST['confirm_password'])
    ) {
        die("Please fill all the fields");
    }

    if ($_POST['password'] != $_POST['confirm_password']) {
        die("Passwords do not match");
    }
    else {
        echo "Registration successful";
    }

}

?>

</body>
</html>
