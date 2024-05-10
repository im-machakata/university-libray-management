@extends('layouts.base')
@section('title','Chat')
@section('content')
<main>
    <div class="container-fluid">
        {{-- Some D.R.Y code --}}
        @php
            $userIsAdmin = auth()->user()->role == 'Admin';
        @endphp

        {{-- Display any form errors below --}}
        <div class="container">
            @if($errors->any() || session()->get('error'))
                <x-alert.warning :message="Arr::first($errors->all()) ?? session()->get('error')" />
            @endif
        </div>

        @if($userIsAdmin)
            @if(count($messages) > 0)
                <div class="container mt-5">
                    <h1 class="fs-2">Chat with students</h1>
                    <p class="lead">Talk to {{ $messages[0]->sender->name }} and help them with their academic
                        needs</p>
                </div>
            @else
                <div class="container mt-5">
                    <h1 class="fs-2">Chats</h1>
                    <p class="lead">Talk to students who need help</p>
                </div>
            @endif
        @else
            <div class="container mt-5">
                <h1 class="fs-2">Chat with us</h1>
                <p class="lead">Talk to your subject librarian and get help with your academic needs</p>
            </div>
        @endif

        @if((count($messages) > 0 && $userIsAdmin) || !$userIsAdmin)
            <div class="container py-2">
                <div class="d-flex flex-column gap-2">
                    @foreach($messages as $message)
                        @if(auth()->user()->id === $message->sender_id)
                            <x-chat.to :message="$message->message"
                                sent-at="{{ $message->created_at->diffForHumans() }}" />
                        @else
                            <x-chat.from :message="$message->message"
                                sent-at="{{ $message->created_at->diffForHumans() }}" />
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="container">
                <form
                    action="/talk-to-a-librarian{{ $userIsAdmin ? '?id='.$request->id : '' }}"
                    method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="form-floating flex-fill">
                            <textarea type="text" placeholder="Your message goes here..." name="message" id="message"
                                class="form-control" required></textarea>
                            <label for="message">Your message goes here...</label>
                        </div>
                        <button class="input-group-text text-uppercase" type="submit">
                            <i class="fa-solid fa-send"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="container pb-2 text-muted ps-2 ps-lg-4 fs-6">
                You will need to refresh to see new messages.
                @if(auth()->user()->role == 'Admin')
                    View <a href="/talk-to-a-librarian">more chats</a>
                @endif
            </div>
        @endif

        @if($userIsAdmin)
            <div class="container pb-2">
                @if(count($chats) && !$messages)
                    <ul class="list-unstyled">
                        @foreach($chats as $chat)
                            <li class="p-2 border rounded-2 fs-5">
                                <p class="mb-0 ps-2">
                                    <a href="?id={{ $chat->id }}"
                                        class="fs-5 text-decoration-none">{{ $chat->owner->name }}
                                        {{ $chat->owner->surname }} </a>
                                    <small class="text-muted small fs-6">&ndash;
                                        {{ $chat->getLastMessage()->created_at->diffForHumans() }}</small>
                                </p>
                            </li>
                        @endforeach
                    </ul>
                @elseif(!$chats && !$messages)
                    <p>No one has ever reached out to you.</p>
                @endif
            </div>
        @endif
    </div>
</main>
@endSection()
