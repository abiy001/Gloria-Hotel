<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Comments extends Model
{
    use HasFactory, Notifiable;

       /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $fillable = [
        'user_id',
        'hotel_id',
        'comment',
    ];

    /*
      *  @return BelongsTo
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }   

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class,'hotel_id');
    }   
}
