<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Hotel extends Model
{
    use HasFactory, Notifiable;

    /**
  * The attributes that are mass assignable.
  *
  * @var list<string>
  */

 protected $fillable = [
     'hotel_name',
     'hotel_image',
     'hotel_description',
     'city_id',
     'hotel_rating',
     'total_rating',
 ];

 public function city() : BelongsTo {

    return $this->belongsTo(City::class, 'city_id');
 }

 public function rooms() : HasMany {
    return $this->hasMany(Room::class);
 }

//  public function reservation() : HasMany {
//     return $this->hasMany(Reservation::class);
//  }
}
