<?php
    
use Illuminate\Database\Capsule\Manager as Capsule;
    

    
Capsule::schema()->create('emails', function ($table) 
{
            
 $table->increments('id');
 $table->string('email');
 $table->timestamps();
    
});
