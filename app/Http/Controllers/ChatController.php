<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $chats = Chat::query()->where('sender_id', $user);
        return view('chat/index')
            ->with('chats', $chats);
    }
}
