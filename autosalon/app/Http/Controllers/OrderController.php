<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Car;

class OrderController extends Controller {
    public function create($car_id) {
        $car = Car::findOrFail($car_id);
        return view('orders.create', compact('car'));
    }

    public function store(Request $request) {
        // Валидация данных заказа
        $validated = $request->validate([
            'customer_name' => 'required|string',
            'customer_email' => 'required|email',
            'car_id' => 'required|exists:cars,id',
            'amount' => 'required|numeric',
        ]);

        // Создаем заказ с статусом pending
        Order::create([
            'car_id' => $validated['car_id'],
            'customer_name' => $validated['customer_name'],
            'customer_email' => $validated['customer_email'],
            'amount' => $validated['amount'],
            'status' => 'pending',
        ]);

        // Перенаправление к оплате или подтверждению (зависит от системы платежа)
        return redirect()->route('payment.process');
    }
}