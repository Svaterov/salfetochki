
<?php

use Illuminate\Support\Facades\Route;

// Главная страница автосалона
Route::get('/', [App\Http\Controllers\CarController::class, 'index'])->name('home');

// Категории (подкаталоги)
Route::get('/category/{slug}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');

// Карточка автомобиля
Route::get('/car/{id}', [App\Http\Controllers\CarController::class, 'show'])->name('car.show');

// Страница оформления заказа
Route::get('/order/{car_id}', [App\Http\Controllers\OrderController::class, 'create'])->name('order.create');

// Обработка платежа (пример)
Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'process'])->name('payment.process');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome'); // главная страница
});

Route::get('/cars', function () {
    // Передача данных о машинах в представление
    $cars = [
        [
            'name' => 'Toyota Camry',
            'photo' => 'images/toyota_camry.jpg',
            'features' => [
                'Engine' => '2.5L 4-cylinder',
                'Horsepower' => '203 HP',
                'Year' => 2023,
            ],
        ],
        [
            'name' => 'Honda Civic',
            'photo' => 'images/honda_civic.jpg',
            'features' => [
                'Engine' => '2.0L 4-cylinder',
                'Horsepower' => '158 HP',
                'Year' => 2022,
            ],
        ],
        // Можно добавить еще машин
    ];

    return view('cars', ['cars' => $cars]);
});

Route::get('/cars', function () {
    // Можно передать данные о машинах, если нужно
    $cars = [
        [
            'name' => 'Toyota Camry',
            'photo' => 'images/toyota_camry.jpg',
            'features' => [
                'Engine' => '2.5L 4-cylinder',
                'Horsepower' => '203 HP',
                'Year' => 2023,
            ],
        ],
        [
            'name' => 'Honda Civic',
            'photo' => 'images/honda_civic.jpg',
            'features' => [
                'Engine' => '2.0L 4-cylinder',
                'Horsepower' => '158 HP',
                'Year' => 2022,
            ],
        ],
    ];

    return view('cars', ['cars' => $cars]);
});

// Маршрут для страницы мототехники
Route::get('/mototechnique', [App\Http\Controllers\MainController::class, 'mototechnique'])->name('mototechnique');