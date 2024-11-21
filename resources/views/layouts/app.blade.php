@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="message-dashboard">
            <!-- Back Button -->
            <a href="{{ route('main-dashboard') }}" class="btn-back">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
            
            <h1>Your Messages</h1>
            
            <x-card title="Messages Overview" class="overview-card">
                <p>Here are your recent messages. You can read and manage them below.</p>
            </x-card>
            
            @if($messages->count() > 0)
                <div class="message-cards">
                    @foreach($messages as $message)
                        <div class="message-card">
                            <h3>{{ $message->sender_name }}</h3>
                            <p>{{ Str::limit($message->content, 100) }}</p>
                            <a href="{{ route('messages.show', $message->id) }}" class="btn-view">View Message</a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="no-messages">
                    <p>No messages yet. Check back later!</p>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* General Styles */
        .main-content {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            background: #f5f7fa;
            padding: 20px;
            height: 100vh;
        }

        .message-dashboard {
            width: 100%;
            max-width: 900px;
            text-align: center;
        }

        /* Back Button */
        .btn-back {
            display: inline-flex;
            align-items: center;
            background-color: #1877f2;
            color: white;
            padding: 12px 20px;
            border-radius: 30px;
            text-decoration: none;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-back:hover {
            background-color: #166fe5;
            transform: scale(1.05);
        }

        .btn-back i {
            margin-right: 8px;
        }

        /* Title */
        h1 {
            font-size: 2.5rem;
            color: #333;
            margin-top: 40px;
            font-weight: bold;
        }

        /* Card Overview */
        .overview-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
        }

        .overview-card p {
            font-size: 1.2rem;
            color: #555;
        }

        /* Message Cards */
        .message-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 10px;
        }

        .message-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .message-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .message-card h3 {
            font-size: 1.4rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .message-card p {
            font-size: 1rem;
            color: #666;
            line-height: 1.5;
        }

        .btn-view {
            display: inline-block;
            background-color: #ff0050;
            color: white;
            padding: 8px 16px;
            border-radius: 30px;
            text-decoration: none;
            margin-top: 10px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-view:hover {
            background-color: #e60039;
            transform: scale(1.05);
        }

        /* No Messages Message */
        .no-messages p {
            font-size: 1.2rem;
            color: #888;
            margin-top: 50px;
        }
    </style>
@endsection
