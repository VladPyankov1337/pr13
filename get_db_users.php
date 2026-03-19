<?php
include("../settings/connect_datebase.php");

echo "<h2>Данные пользователей из БД:</h2>";

$query = $mysqli->query("SELECT `id`, `login`, `password`, `roll` FROM `users`");

if ($query) {
    echo "<table border='1' cellpadding='5' style='border-collapse: collapse; font-family: Arial, sans-serif;'>";
    echo "<tr style='background-color: #f2f2f2;'><th>ID</th><th>Логин</th><th>Пароль</th><th>Роль (1-Админ, 0-Пользователь)</th></tr>";
    
    while ($user = $query->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($user['id']) . "</td>";
        echo "<td>" . htmlspecialchars($user['login']) . "</td>";
        echo "<td>" . htmlspecialchars($user['password']) . "</td>";
        echo "<td>" . htmlspecialchars($user['roll']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Ошибка при выполнении запроса к базе данных.";
}
?>