<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable = ['initiator', 'receiver'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'initiator', 'id');
    }

    public function getLastMessage(){
        return Chat::query()->where('thread_id', $this->id)->orderByDesc('id')->first();
    }
}
