<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngusMarkets - Контакты</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9; /* Светлый фон */
            color: #333; /* Темный цвет текста */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start; /* Выравниваем содержимое к верху */
            min-height: 100vh; /* Занимаем всю высоту экрана */
        }

        header {
            background-color: #4CAF50;
            color: white; /* Цвет текста заголовка */
            padding: 20px 0; /* Отступы сверху и снизу */
            text-align: center; /* Выравнивание по центру */
            width: 100%; /* Занимаем всю ширину */
        }

        h1 {
            margin: 0; /* Удаляем отступы по умолчанию */
            font-size: 28px; /* Размер заголовка */
        }
        nav {
            background-color: #333;
            width: 100%; /* Занимаем всю ширину */
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

        .contact-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 800px; /* Максимальная ширина контейнера */
            margin: 50px auto; /* Отступы сверху и снизу, авто-отступы по бокам */
            padding: 30px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            background-color: white; /* Белый фон для контейнера */
            text-align: center; /* Выравнивание по центру */
        }

        .contact-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #4CAF50;
            margin-bottom: 20px;
        }

        .contact-info {
            text-align: center;
        }
        h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #555;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
            width: 100%;
            position: fixed; /* Фиксируем позицию внизу */
            bottom: 0; /* Прикрепляем к низу экрана */
        }

        /* Стиль для более широких экранов */
        @media (min-width: 768px) {
            .contact-container {
                flex-direction: row; /* Горизонтальное расположение на больших экранах */
                align-items: center; /* Выравнивание по центру */
                justify-content: center; /* Распределение элементов по центру */
            }

            .contact-info {
                text-align: left; /* Выравнивание влево */
                margin-left: 30px; /* Отступ слева для информации */
            }

            .contact-photo {
                margin-bottom: 0; /* Удаляем нижний отступ для фотографии */
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Контакты</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="contact.php">Контакты</a></li>
        </ul>
    </nav>

    <div class="contact-container">
        <img src="загрузка — копия.png" class="contact-photo">
        <div class="contact-info">
            <h2>Контактная информация</h2>
            <strong>Telegram :</strong>
            <p><strong><a href="https://t.me/V1ctory14">Написать мне лично в Telegram</a></strong></p>
            <p><strong><a href="https://t.me/+pK1PVnyETuRlYWVi">Telegram канал</a></strong></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 AngusMarkets</p>
    </footer>
</body>
</html>
