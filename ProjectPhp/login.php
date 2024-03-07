<?php
require_once 'db.php';

session_start();

// Проверяем, отправлена ли форма методом POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Преобразуем введенный логин в нижний регистр
    $usernameLower = strtolower($username);

    // Подготавливаем запрос на выборку пользователя из базы данных
    $sql = "SELECT * FROM users WHERE LOWER(username) = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usernameLower);
    $stmt->execute();

    // Получаем результат запроса
    $result = $stmt->get_result();

    // Проверяем, найден ли пользователь
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Проверяем соответствие пароля
        if (password_verify($password, $row['password'])) {
            // Устанавливаем сессию для авторизации пользователя
            $_SESSION['username'] = $row['username'];
            header("Location: profile.php"); // Переадресация на страницу профиля
            exit();
        } else {
            // Неправильный пароль
            $error = "Неверный пароль";
        }
    } else {
        // Пользователь не найден
        $error = "Пользователь не найден";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>
    <h2>Авторизация</h2>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="post" action="login.php">
        <label for="username">Имя пользователя:</label>
        <input type="text" name="username" required><br>

        <label for="password">Пароль:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Войти">
    </form>
</body>
</html>
