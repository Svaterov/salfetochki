<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать в наш проект</title>
    <!-- Подключение Google Fonts для красивого шрифта -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Общие стили */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Контейнер с контентом */
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
            text-align: center;
            max-width: 600px;
        }

        /* Заголовок */
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            color: #333;
        }

        /* Описание */
        p {
            font-size: 1.2em;
            color: #555;
        }

        /* Кнопка */
        a.button {
            display: inline-block;
            margin-top: 30px;
            padding: 15px 30px;
            font-size: 1.2em;
            color: #fff;
            background-color: #4CAF50;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a.button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            margin-bottom: 40px;
        }

        /* Стиль для кнопки */
        .btn {
            background-color: #ff7f50; /* коралловый цвет */
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border: none;
            border-radius: 50px; /* скругление */
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: background-color 0.3s, transform 0.2s;
        }

        /* Эффект при наведении */
        .btn:hover {
            background-color: #ff6347; /* более насыщенный цвет */
            transform: scale(1.05);
        }

        /* Убираем стандартные стили у ссылки */
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Добро пожаловать!</h1>

    <!-- Кнопка с классом для стилизации -->
    <a href="/cars">
        <button class="btn">Посмотреть автомобили</button>
    </a>
</body>
</html>
