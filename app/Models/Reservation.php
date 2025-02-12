<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Reservation extends Model
{
    use HasFactory, Notifiable;

    /**
  * The attributes that are mass assignable.
  *
  * @var list<string>
  */

 protected $fillable = [
     'checkin_date',
     'checkout_date',
     'payment_status',
     'booking_status',
     'guest_total',
     'room_id',
     'user_id',
 ];

 public function user() : BelongsTo {
    return $this->belongsTo(User::class, 'user_id');
 }
 public function room() : BelongsTo {
    return $this->belongsTo(Room::class, 'room_id');
 }


}
