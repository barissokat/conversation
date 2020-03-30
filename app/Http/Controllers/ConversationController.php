<?php

namespace App\Http\Controllers;

use App\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('conversations.index', [
            'conversations' => Conversation::latest()->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Conversation $conversation)
    {
        return view('conversations.show', [
            'conversation' => $conversation
        ]);
    }

    public function edit(Conversation $conversation)
    {
        //
    }

    public function update(Request $request, Conversation $conversation)
    {
        //
    }

    public function destroy(Conversation $conversation)
    {
        //
    }
}
