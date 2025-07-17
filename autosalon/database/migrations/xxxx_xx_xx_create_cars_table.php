<?php

Schema::create('cars', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description')->nullable();
    $table->decimal('price', 10, 2);
    $table->unsignedBigInteger('category_id');
    $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    $table->string('image')->nullable(); // путь к изображению
    $table->timestamps();
});