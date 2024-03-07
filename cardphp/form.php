<?php
// Запуск сессии
session_start();

// Проверка, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    
    // Сохраняем данные в сессионные переменные
    $_SESSION['user_name'] = $name;
    $_SESSION['user_contact'] = $contact;
    
    // Перенаправляем пользователя на страницу 2.php
    header("Location: 2.php");
    exit(); // Обязательно завершаем выполнение скрипта после перенаправления
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Обратная связь</title>
</head>
<body>

<h2>Обратная связь</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="name" placeholder="Имя:"><br>
    <input type="text" name="contact" placeholder="Контактный телефон или Email:"><br>
    <input type="submit" name="submit" value="Отправить заявку">
</form>

</body>
</html>