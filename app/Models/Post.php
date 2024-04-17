<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    //ver convenciones 9
    //post -> posts    
    use HasFactory;
    protected $table = 'posts';

    protected function casts(): array
    {   //cambiar el tipo de dato de los atributos de la tabla
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean', 

        ];
    }

    protected function title(): Attribute{
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            },
            get: function($value){
                return ucfirst($value);
            }
        );
    }
}
