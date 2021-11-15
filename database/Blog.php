<?php
    
use Illuminate\Database\Capsule\Manager as Capsule;
    

    
Capsule::schema()->create('blog', function ($table) 
{
            
 $table->increments('id');
            
 $table->timestamps();
    
});
