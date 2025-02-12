<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    ];

    /*
      *  @return BelongsTo
    */
    public function roomtype(): BelongsTo
    {
        return $this->belongsTo(RoomType::class,'rooms_roomtype_id');
    }   
    public function reservation(): BelongsTo
    {
        return $this->belongsTo(Reservation::class,'room_id');
    }   
}
