<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(!Auth::check())
        <h1>You are not authenticated, please login <a href="{{route('login')}}">LOGIN</a></h1>
    @else
        <h1>Welcome to Dashboard, {{ Auth::user()->name }}</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out')}}
            </x-dropdown-link>
        </form>
    @endif
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Dashboard</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5; /* Facebook-like light gray background */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        /* Navbar Styles */
        nav {
            background-color: #1877f2; /* Facebook Blue */
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .navbar-logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
        }

        .navbar-links {
            display: flex;
            gap: 20px;
        }

        .navbar-links a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            padding: 10px;
            border-radius: 4px;
        }

        .navbar-links a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .navbar-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-profile img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Main Content Section */
        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            flex: 1;
        }

        /* Center Container for Login */
        .center-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        p {
            color: #555;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .btn-login {
            background-color: #1877f2; /* Facebook Blue */
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #166fe5;
        }

        /* Dashboard Cards */
        .card {
            width: 100%;
            max-width: 800px;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card p {
            color: #555;
            font-size: 14px;
        }

        .card .btn {
            background-color: #ff0050; /* TikTok Red */
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            width: max-content;
            align-self: flex-start;
            transition: background-color 0.3s ease;
        }

        .card .btn:hover {
            background-color: #e60039;
        }

        /* Footer Styles */
        footer {
            background-color: #3b3b3b;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="navbar-logo">SocialApp</div>
        <div class="navbar-links">
            <a href="#">Home</a>
            <a href="#">Explore</a>
            <a href="#">Messages</a>
            <a href="#">Notifications</a>
        </div>
        <div class="navbar-profile">
            <img src="https://www.w3schools.com/w3images/avatar2.png" alt="User Avatar">
            <span>John Doe</span>
        </div>
    </nav>

    <!-- Main Content Container -->
    <div class="container">
        @if(!Auth::check())
            <h1>You are not authenticated</h1>
            <p>Please login to access the dashboard</p>
            <a href="{{ route('login1') }}" class="btn">Login</a>
        @else
            <h1>Welcome to your Dashboard, {{ Auth::user()->name }}</h1>
            <p>Here's a quick overview of your dashboard.</p>

            <!-- Dashboard Cards -->
            <div class="card">
                <h3>Your Profile</h3>
                <p>Manage your profile settings and update your information.</p>
                <a href="#" class="btn">Go to Profile</a>
            </div>

            <div class="card">
                <h3>Your Messages</h3>
                <p>Check and respond to your recent messages.</p>
                <a href="#" class="btn">View Messages</a>
            </div>

            <div class="card">
                <h3>Account Settings</h3>
                <p>Update your account settings and preferences.</p>
                <a href="#" class="btn">Go to Settings</a>
            </div>

            <!-- Log Out Button -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn" style="background-color: #dc3545; margin-top: 20px;">Log Out</button>
            </form>
        @endif
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
