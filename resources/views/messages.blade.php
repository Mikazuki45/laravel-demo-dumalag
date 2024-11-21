@extends('layouts.app')

@section('content')
    <div class="main-content">
        <h1 class="page-title">Your Messages</h1>

        <!-- Back Button -->
        <a href="{{ url()->previous() }}" class="btn-back">
            &larr; Back
        </a>

        <x-card title="Your Messages" class="intro-card">
            <p>Here are your recent messages. You can read and manage them below.</p>
        </x-card>

        <!-- Example of displaying messages dynamically -->
        @if($messages->count() > 0)
            <div class="message-container">
                @foreach($messages as $message)
                    <div class="message-card">
                        <h3 class="message-sender">{{ $message->sender_name }}</h3>
                        <p class="message-preview">{{ Str::limit($message->content, 100) }}</p>
                        <a href="{{ route('messages.show', $message->id) }}" class="btn-view">View Message</a>
                    </div>
                @endforeach
            </div>
        @else
            <p>No messages yet. Check back later!</p>
        @endif
    </div>
@endsection

@section('styles')
    <style>
        /* Page Title */
        .page-title {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Back Button */
        .btn-back {
            display: inline-block;
            background: linear-gradient(45deg, #FF6F61, #ff9966);
            color: white;
            padding: 12px 20px;
            border-radius: 50px;
            font-size: 16px;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .btn-back:hover {
            background: linear-gradient(45deg, #ff9966, #FF6F61);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Intro Card */
        .intro-card {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        /* Message Container */
        .message-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        /* Individual Message Card */
        .message-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .message-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        /* Sender Name */
        .message-sender {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* Message Preview */
        .message-preview {
            color: #555;
            font-size: 14px;
            margin-bottom: 15px;
        }

        /* View Message Button */
        .btn-view {
            background-color: #1877f2; /* Facebook blue */
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 14px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .btn-view:hover {
            background-color: #166fe5;
        }

        /* Responsive Grid for Messages */
        @media (max-width: 768px) {
            .message-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection