<?php
require_once 'db/db.php';
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $id = trim($_GET['id']);

    $sql = "DELETE FROM users WHERE id = ?";
    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        $param_id = $id;

        if (mysqli_stmt_execute($stmt)) {
            header("location: index.php");
        } else {
            echo "Quelque chose s'est mal passé. Veuillez réessayer plus tard.";
        }
        mysqli_stmt_close($stmt);
    }
} else {
    echo "Erreur: Il n'y a pas d'id.";
    exit();
}
mysqli_close($link);
?>
