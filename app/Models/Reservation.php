<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
     'guest_total',
     'user_id',
 ];

}
