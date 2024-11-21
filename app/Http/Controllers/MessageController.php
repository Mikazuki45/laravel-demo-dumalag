<?php

namespace App\Http\Controllers;

use App\Models\Message; // Assuming you have a Message model
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Show a list of messages
    public function index()
    {
        // Get all messages for the authenticated user
        $messages = Message::where('user_id', auth()->id())->get();
        
        return view('messages', compact('messages')); // Pass messages to the Blade view
    }

    // Show a single message's details
    public function show($id)
    {
        // Retrieve the specific message by ID
        $message = Message::findOrFail($id);
        
        return view('messages.show', compact('message')); // Show message details
    }
}
