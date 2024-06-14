<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
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
            height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 400px;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form div {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            color: #fff;
            background-color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #555;
            transform: scale(1.05);
        }

        .register-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            color: #fff;
            background-color: #27ae60;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .register-link:hover {
            background-color: #229954;
            transform: scale(1.05);
        }

        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }

            input[type="text"],
            input[type="password"] {
                padding: 8px;
            }

            input[type="submit"],
            .register-link {
                padding: 8px 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Connexion</h2>
        <form action="authenticate.php" method="post">
            <div>
                <label>Nom d'utilisateur</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label>Mot de passe</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <input type="submit" value="Connexion">
            </div>
        </form>
        <a href="register.php" class="register-link">Créer un compte</a>
    </div>
</body>

</html>