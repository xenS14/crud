<?php
session_start();
require_once 'db/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        session_start();
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;
                        header("location: index.php");
                    } else {
                        echo "Mot de passe invalide.";
                    }
                }
            } else {
                echo "Aucun compte trouvé avec ce nom d'utilisateur.";
            }
        } else {
            echo "Quelque chose s'est mal passé. Veuillez réessayer plus tard.";
        }
        mysqli_stmt_close($stmt);
    }
}
mysqli_close($link);
?>