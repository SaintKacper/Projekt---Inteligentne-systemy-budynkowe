<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie administratora</title>
</head>
<body>
    <h2>Logowanie administratora</h2>
    <form action="login.php" method="post">
        <label for="username">Nazwa użytkownika:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Hasło:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Zaloguj">
    </form>

    <?php
    // Sprawdzanie danych logowania
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Sprawdzenie, czy dane logowania są poprawne
        if ($username === 'admin' && $password === 'admin') {
            // Zalogowano pomyślnie, przekieruj na stronę główną
            header("Location: Strona główna_admin.html");
            exit;
        } else {
            echo "<p style='color: red;'>Nieprawidłowa nazwa użytkownika lub hasło.</p>";
        }
    }
    ?>
</body>
</html>
