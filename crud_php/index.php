<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
require_once 'db/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD Application</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1,
        h2 {
            color: #333;
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .actions {
            margin-top: 20px;
        }

        .actions a {
            text-decoration: none;
            padding: 10px 20px;
            margin-right: 10px;
            color: #fff;
            background-color: #333;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .actions a:hover {
            background-color: #555;
            transform: scale(1.05);
        }

        .actions a.delete {
            background-color: #c0392b;
        }

        .actions a.delete:hover {
            background-color: #a93226;
        }

        .logout {
            text-decoration: none;
            padding: 10px 20px;
            color: #fff;
            background-color: #c0392b;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 20px;
            display: inline-block;
        }

        .logout:hover {
            background-color: #a93226;
            transform: scale(1.05);
        }

        .user-list {
            margin-top: 30px;
            margin-bottom: 20px;
            color: #333;
            font-weight: bold;
        }

        .create-user {
            text-decoration: none;
            padding: 10px 20px;
            color: #fff;
            background-color: #27ae60;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: inline-block;
            margin-bottom: 20px;
        }

        .create-user:hover {
            background-color: #229954;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            .actions a {
                padding: 8px 15px;
                margin-right: 5px;
            }

            .logout,
            .create-user {
                padding: 8px 15px;
            }
        }

        @media (max-width: 580px) {
            .actions a {
                display: block;
                margin: 5px 0;
                text-align: center;
            }

            .logout,
            .create-user {
                display: block;
                width: 100%;
                text-align: center;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION["username"]); ?> ✨</h1>
        <a href="logout.php" class="logout">Se déconnecter</a>
        <a href="create.php" class="create-user">Créer un nouvel utilisateur</a>

        <h2 class="user-list">Liste des utilisateurs</h2>
        <?php
        $sql = "SELECT id, username, email, created_at FROM users";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Nom d'utilisateur</th><th>Email</th><th>Créé à</th><th>Actions</th></tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
                    echo "<td class='actions'>";
                    echo "<a href='update.php?id=" . $row['id'] . "'>Modifier</a>";
                    echo "<a href='delete.php?id=" . $row['id'] . "' class='delete' onclick='return confirm(\"Tu es sûr de bien vouloir supprimer cet utilisateur ?\");'>Supprimer</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($result);
            } else {
                echo "<p>Aucun utilisateur trouvé</p>";
            }
        } else {
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);
        }
        mysqli_close($link);
        ?>
    </div>
</body>

</html>