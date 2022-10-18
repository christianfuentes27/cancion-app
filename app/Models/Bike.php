<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; //import de java
use Illuminate\Database\Eloquent\Model; //import de java

class Bike extends Model //
{
    use HasFactory; //trait
    
    //tabla del modelo: bikes
    //protected $table = 'bike';
    
    //no voy a usar marcas de tiempo
    public $timestamps = false;
    
    protected $fillable = ['name'];
}
