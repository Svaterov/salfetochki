<?php

Schema::create('orders', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('car_id');
    $table->string('customer_name');
    $table->string('customer_email');
    $table->decimal('amount', 10, 2);
    $table->string('status')->default('pending'); // статус заказа
    $table->timestamps();

    $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
});