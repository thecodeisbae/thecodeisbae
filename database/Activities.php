<?php

require "./env.php";
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('activities', function ($table) {
       $table->increments('id');
       $table->string('name');
       $table->string('location');
       $table->timestamps();
});