<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
</head>

<body>
    <?php
    if (isset($_SESSION['admin'])) {
        header("Location: dashboard.php");
        exit();
    }

    if (isset($_POST['submit'])) {
        $admin_user = "admin";
        $admin_pass = "admin_pass"; // Change this to a secure password in a real-world scenario

        $input_user = $_POST['username'];
        $input_pass = $_POST['password'];

        if ($input_user === $admin_user && $input_pass === $admin_pass) {
            $_SESSION['admin'] = true;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Identifiants invalides.";
        }
    }
    ?>

    <h1>Connexion</h1>
    <form method="post" action="index.php">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="submit" value="Connexion">
    </form>
</body>

</html>