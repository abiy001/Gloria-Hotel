<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class RoomType extends Model
{
    use HasFactory, Notifiable;

    /**
  * The attributes that are mass assignable.
  *
  * @var list<string>
  */

 protected $fillable = [
      //   'roomtype_id',
     'roomtype_name',
     'roomtype_description',
     'roomtype_image',
     'guest',
     'price_per_day',
 ];

 /*
 * @return HasMany
 */
 public function rooms():HasMany {
    return $this->hasMany(Room::class);
 }
}
