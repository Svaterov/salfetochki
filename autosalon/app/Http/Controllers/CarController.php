<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller {
    public function index() {
        // список всех машин или по категориям можно расширить позже
        $cars = Car::with('category')->get();
        return view('cars.index', compact('cars'));
    }

    public function show($id) {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }
}