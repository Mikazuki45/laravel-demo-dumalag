@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="message-card">
            <h2 class="message-title">{{ $message->sender_name }}</h2>
            <p class="message-content">{{ $message->content }}</p>
            
            <!-- Back Button -->
            <a href="{{ route('messages.index') }}" class="btn-back">Back to Messages</a>
        </div>

        <!-- Floating Action Button -->
        <a href="{{ route('messages.index') }}" class="fab">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
@endsection

@section('styles')
    <style>
        /* General Styles */
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background: linear-gradient(135deg, #f0f0f0 0%, #f9f9f9 100%);
            padding: 20px;
        }

        .message-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .message-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .message-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .message-content {
            color: #555;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .btn-back {
            display: inline-block;
            background: linear-gradient(45deg, #FF6F61, #ff9966);
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 16px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .btn-back:hover {
            background: linear-gradient(45deg, #ff9966, #FF6F61);
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Floating Action Button */
        .fab {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #1877f2;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .fab:hover {
            background-color: #166fe5;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        /* Icons */
        .fab i {
            font-size: 24px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .message-card {
                max-width: 100%;
                padding: 20px;
            }
            .message-title {
                font-size: 1.5rem;
            }
        }
    </style>
@endsection
