<!DOCTYPE html>
<html>
<head>
    <title>Машины</title>
    <style>
        /* Общие стили страницы */
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        /* Стиль кнопки возврата */
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: #2980b9;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1em;
            transition: background-color 0.3s, transform 0.2s;
        }

        .back-button:hover {
            background-color: #3498db;
            transform: scale(1.05);
        }

        /* Контейнер для всех карточек */
        .cars-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Центрируем карточки по горизонтали */
            gap: 20px; /* Расстояние между карточками */
            max-width: 1200px; /* Максимальная ширина контейнера */
            margin: 0 auto; /* Центрируем контейнер на странице */
        }

        /* Карточка автомобиля */
        .car-card {
            background-color: #ffffffcc; /* полупрозрачный белый */
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 350px; /* Максимальная ширина карточки */
            padding: 20px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .car-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        /* Название машины */
        .car-name {
            text-align: center;
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #34495e;
        }

        /* Изображение автомобиля */
        .car-photo {
            display: block;
            margin: 0 auto 15px auto;
            width: 100%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
        }

        /* Список характеристик */
        ul {
            list-style-type: none; /* убираем маркеры */
            padding-left: 0;
        }

        li {
            padding: 8px 0;
            border-bottom: 1px solid #ecf0f1;
        }

        li:last-child {
           border-bottom:none; /* убрать границу у последнего элемента */
        }

        strong {
           color:#2c3e50; 
        }
    </style>
</head>
<body>
    <!-- Кнопка возврата на главную -->
    <a href="/" class="back-button">Вернуться на главную страницу</a>

    <h1>Автомобили</h1>

<div class="cars-container">
<?php
$cars = [
    [
        'name' => 'Toyota Camry',
        'photo' => 'images/cars/camry.jpg', // предполагается полный путь или корректный относительный
        'features' => [
           'выпуск' => '2022',
           'Двигатель' => '2.5L 4-цилиндра',
           'Мощность' => '203 л.с.',
           'Цена' => '$24,000'
       ],
    ],
    [
       'name' => 'Honda Accord',
       'photo' => 'images/cars/honda.jpg',
       'features' => [
           'выпуск' => '2021',
           'Двигатель' => '1.5L турбо',
           'Мощность' => '192 л.с.',
           'Цена' => '$23,000'
       ],
   ],
   [
       'name' => 'Ford Mustang',
       'photo' => 'images/cars/mustang.jpg',
       'features' => [
           'выпуск' => '2023',
           "Двигатель" => "5.0L V8",
           "Мощность" => "450 л.с.",
           "Цена" => "$36,000"
       ],
   ],
   [
       "name" => "BMW Series 3",
       "photo" => "images/cars/bmw.jpg",
       "features" => [
           "выпуск" => "2022",
           "Двигатель" => "2.0L турбо",
           "Мощность" => "255 л.с.",
           "Цена" => "$41,000"
       ],
   ],
   [
       "name" => "Audi A4",
       "photo" => "images/cars/audi.jpg",
       "features" => [
           "выпуск" => "2022",
           "Двигатель" => "2.0L турбо",
           "Мощность" => "201 л.с.",
           "Цена" => "$39,000"
       ],
   ],
   [
       "name" => "Mercedes-Benz C-Class",
       "photo" => "images/cars/mercedes.jpg",
       "features" => [
           "выпуск" => "2023",
           "Двигатель" => "2.0L турбо",
           "Мощность" => "255 л.с.",
           "Цена" => "$42,000"
       ],
   ],

   // Можно добавить остальные машины по аналогии
];

foreach ($cars as $car): ?>
<div class="car-card">
    <div class="car-name"><?php echo htmlspecialchars($car['name']); ?></div>
    <img src="<?php echo htmlspecialchars($car['photo']); ?>" alt="<?php echo htmlspecialchars($car['name']); ?>" class="car-photo">
    <ul>
        <?php if(isset($car['features']) && is_array($car['features'])):
                foreach ($car['features'] as $feature=>$value): ?>
                    <li><strong><?php echo htmlspecialchars($feature); ?>:</strong> <?php echo htmlspecialchars($value); ?></li>
                <?php endforeach; 
              endif; ?>
    </ul>
</div>
<?php endforeach; ?>
</div> <!-- закрытие cars-container -->
</body>
</html>