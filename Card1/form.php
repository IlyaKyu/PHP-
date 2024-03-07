<!DOCTYPE html>
<html>
<head>
    <title>Обратная связь</title>
</head>
<body>

<h2>Обратная связь</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Имя: <input type="text" name="name"><br>
    Контактный телефон или Email: <input type="text" name="contact"><br>
    <input type="submit" name="submit" value="Отправить заявку">
</form>

<?php
// Обработка данных формы после отправки
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    
    // Выводим данные, полученные из формы
    echo "<h3>Данные, полученные из формы:</h3>";
    echo "Имя: " . $name . "<br>";
    echo "Контакт: " . $contact;
}
?>

</body>
</html>