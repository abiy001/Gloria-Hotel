<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class City extends Model
{
    use HasFactory, Notifiable;

    /**
  * The attributes that are mass assignable.
  *
  * @var list<string>
  */
  
    protected $fillable = [
        'city_name',
        'city_image',
    ];
}
