<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Events\GreetingSent;
use App\Models\User;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function showChat(){
        return view('chat.show');
    }

    public function messageReceived(Request $request){
        $rules = [
            'message' => 'required',
        ];

        $request->validate($rules);

        broadcast(new MessageSent($request->user(), $request->message));

        return response()->json('Message broadcast');
    }

    public function greetReceived(Request $request, User $receiver){
        broadcast(new GreetingSent($receiver, "{$request->user()->name} đã chào bạn"));
        broadcast(new GreetingSent($request->user(), "Bạn đã chào {$receiver->name}"));

        return "Lời chào từ {$request->user()->name} đến {$receiver->name}";
    }
}
