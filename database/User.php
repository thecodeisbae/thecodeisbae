<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('users', function ($table)
{
       $table->increments('id');
       $table->string('firstname');
       $table->string('lastname');
       $table->string('location');
       $table->string('sexe');
       $table->string('age');
       $table->string('email')->unique();
       $table->string('password');
       $table->timestamps();
});