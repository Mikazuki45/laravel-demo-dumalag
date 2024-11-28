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
            overflow-x: hidden;
        }

        /* Navbar Styles */
        nav {
            background-color: #1877f2; /* Facebook Blue */
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
            padding: 10px 15px;
            border-radius: 4px;
            transition: background-color 0.3s;
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
            padding: 40px;
            flex: 1;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 20px;
        }

        /* Center Container for Login */
        .center-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        h1 {
            color: #333;
            font-size: 26px;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .btn-login {
            background-color: #1877f2;
            color: white;
            padding: 12px 25px;
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
            max-width: 900px;
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            color: #333;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .card p {
            color: #555;
            font-size: 14px;
        }

        .card .btn {
            background-color: #ff0050;
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

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 50;
        }

        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            max-width: 500px;
            width: 100%;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-close {
            cursor: pointer;
            font-size: 18px;
            background-color: transparent;
            border: none;
        }

        .modal-body {
            margin-top: 20px;
        }

        /* Footer Styles */
        footer {
            background-color: #3b3b3b;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }

    </style>
</head>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <!-- Navbar -->
    <nav>
        <div class="navbar-logo">School Management</div>
        <div class="navbar-links">
            <a href="#">Home</a>
            <a href="#">Explore</a>
            <a href="#">Messages</a>
            <a href="#">Notifications</a>
        </div>
        <div class="navbar-profile">
            <img src="https://www.w3schools.com/w3images/avatar2.png" alt="User Avatar">
        </div>
    </nav>

    <!-- Main Content Container -->
    <div class="main-content">
        <div class="center-container">
            @if(Auth::user()->hasRole('admin'))
                <h1 class="mb-4">Welcome Admin!, {{ Auth::user()->name }}!</h1>
                <div class="mx-auto">
                    <button onclick="openModal()" class="btn-login mb-4">
                        Add Event
                    </button>
                    <!-- Modal -->
                    <div id="modal" class="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Add Event</h2>
                                <button onclick="closeModal()" class="modal-close">X</button>
                            </div>
                            <div class="modal-body">
                                <h1>This is the modal body content!</h1>
                                    <form action="{{ route('admin.add_event') }}" method="POST">
                                    @csrf
                                    <div>
                                        <label for="event_name" class="text justify-start">Event</label>
                                        <input type="text"
                                                name="event_name"
                                                id="event_name"
                                                value="{{old('event_name')}}"
                                                class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700
                                                        leading-tight focus:outline-none focus::shadow-outline
                                                        @error('event_name') is-invalid @enderror" required>
                                    </div>
                                    <div>
                                        <label for="event_description" class="text justify-start">Event Description</label>
                                        <input type="text"
                                                name="event_description"
                                                id="event_description"
                                                value="{{old('event_description')}}"
                                                class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700
                                                        leading-tight focus:outline-none focus::shadow-outline
                                                        @error('event_description') is-invalid @enderror" required>
                                    </div>
                                    <button type="submit" class="mt-3 mb-3 bg-blue-500 text-white w-full px-2 py-2">
                                        Add Event
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <h1>Welcome!, {{ Auth::user()->name }}!</h1>
            @endif
            <p>Here's a quick overview of your dashboard.</p>

            <!-- Dashboard Cards -->
            <div class="card">
                <h2>Your Profile</h2>
                <p>Manage your profile settings and update your information.</p>
                <a href="#" class="btn">Go to Profile</a>
            </div>

            <div class="card">
                <h2>Your Messages</h2>
                <p>Check and respond to your recent messages.</p>
                <a href="{{ route('messages.index') }}" class="btn">View Messages</a>
            </div>

            <div class="card">
                <h2>Account Settings</h2>
                <p>Update your account settings and preferences.</p>
                <a href="#" class="btn">Go to Settings</a>
            </div>

            <!-- Log Out Button -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn" style="background-color: #dc3545; margin-top: 20px;">Log Out</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>

    <script>
        // Modal JavaScript
        function openModal() {
            document.getElementById('modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>

</body>
</html>
