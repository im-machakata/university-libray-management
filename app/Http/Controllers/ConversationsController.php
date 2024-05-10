<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $chats = [];
        $messages = [];

        // for the university admin
        if (auth()->user()->role == 'Admin') {

            // get all chat's for the user
            $chats = Conversation::query()
                ->where('receiver', auth()->user()->id)
                ->get();

            // get all messages for a certain chat
            if ($request->has('id')) {
                $messages = Chat::query()
                    ->where('thread_id', $request->id)
                    ->get();
            }
        }

        // for the student, get their messages
        if (auth()->user()->role == 'User') {
            $admin = User::query()->where('role', 'Admin')->firstOrFail();
            $thread = Conversation::query()->firstOrCreate([
                'receiver' => $admin->id,
                'initiator' => auth()->user()->id,
            ]);
            $messages = Chat::query()
                ->where('thread_id', $thread->id)
                ->get();
        }

        // return chats & messages
        return view('chat/index')
            ->with('chats', $chats)
            ->with('messages', $messages)
            ->with('request', $request);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $chat = $request->validate([
            'message' => 'required|min:2|max:1000'
        ]);
        // get admin id - the receiver
        $admin = User::query()->where('role', 'Admin')->firstOrFail();

        // if user is student, get / create new thread
        //  with the following details
        if (auth()->user()->role == 'User') {
            $conversationAttributes = [
                'receiver' => $admin->id,
                'initiator' => auth()->user()->id,
            ];
            // grab thread id if it exists or create a new one
            $thread = Conversation::query()->firstOrCreate($conversationAttributes);
        }

        // if user is an admin, just grab an existing thread
        // since they don't start conversations
        if (auth()->user()->role == 'Admin') {

            // grab thread id if it exists or create a new one
            $thread = Conversation::query()->findOrFail($request->id);
        }

        // get receiver's id depending on who is logged in
        // if the admin is logged, grab the student's id from the thread
        // else use the admin's id if it's the student
        $receiverId = $admin->id == auth()->user()->id ? $thread->initiator : $admin->id;

        // save the message to the database
        Chat::query()->create([
            ...$chat,
            'receiver_id' => $receiverId,
            'sender_id' => auth()->user()->id,
            'thread_id' => $thread->id
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
