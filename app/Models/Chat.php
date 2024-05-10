<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = ['message', 'sender_id', 'receiver_id', 'thread_id'];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
