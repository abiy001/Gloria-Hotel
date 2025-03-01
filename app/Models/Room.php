<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Room extends Model
{
    use HasFactory, Notifiable;

       /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $fillable = [
        'room_id',
        'rooms_roomtype_id',
        'room_number',
        'room_status',
        'checkin_date',
        'checkout_date',
        'hotel_id',
    ];

    /*
      *  @return BelongsTo
    */
    public function roomtype(): BelongsTo
    {
        return $this->belongsTo(RoomType::class,'rooms_roomtype_id');
    }   
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class,'hotel_id');
    }   
    public function reservation():HasMany {
        return $this->hasMany(Reservation::class);
     } 
}
