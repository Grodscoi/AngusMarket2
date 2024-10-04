<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngusMarkets - Корзина</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Цвет фона страницы */
            color: #333; /* Цвет текста */
            margin: 0; /* Убираем отступы */
            padding: 0; /* Убираем отступы */
        }
        .container {
            margin: 20px auto; /* Центрирование контейнера */
            padding: 20px;
            border: 1px solid #ccc; /* Цвет рамки */
            border-radius: 5px; /* Закругления углов */
            background-color: #fff; /* Фоновый цвет контейнера */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Тень */
            max-width: 600px; /* Максимальная ширина */
        }
        h1 {
            text-align: center; /* Центрирование заголовка */
            color: #4CAF50; /* Цвет заголовка */
        }
        h2 {
            text-align: center; /* Центрирование заголовка */
            color: #555; /* Цвет второстепенного заголовка */
        }
        ul {
            list-style-type: none; /* Убираем маркеры списка */
            padding: 0; /* Убираем отступы */
        }
        li {
            padding: 10px; /* Отступы внутри элементов списка */
            border-bottom: 1px solid #eee; /* Низняя граница элементов списка */
        }
        a {
            color: #4CAF50; /* Цвет ссылок */
            text-decoration: none; /* Убираем подчеркивание */
        }
        a:hover {
            text-decoration: underline; /* Подчеркивание при наведении */
        }
        header {
    background-color: #4CAF50;
    color: white;
    text-align: center; 
    padding: 1em 0;
}

nav {
    background-color: #333;
}

nav ul {
    list-style-type: none;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: white;
    padding: 14px 20px;
    text-decoration: none;
    display: inline-block;
}

nav ul li a:hover {
    background-color: #575757;
}
    </style>
</head>
<body>
    <header>
        <h1>AngusMarkets</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="contact.php">Контакты</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Данные Корзины</h1>
        <?php
        // Проверяем, есть ли данные в GET-запросе
        if (!empty($_GET)) {
            echo "<h2>Полученные данные:</h2>";
            echo "<ul>";

            // Проходим по всем полям GET-запроса и выводим их
            foreach ($_GET as $key => $value) {
                echo "<li><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</li>";
            }

            echo "</ul>";
        } else {
            echo "<p>Корзина пуста.</p>";
        }
        ?>
    </div>

    <h2>Для заказа проекта напишите мне в тг : <a href="https://t.me/V1ctory14">Telegram</a></h2>
</body>
</html>