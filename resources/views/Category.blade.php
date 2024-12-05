<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/regular.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/solid.min.css">
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5; /* Light background for Facebook-like feel */
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
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .navbar-links {
            display: flex;
            gap: 20px;
        }

        .navbar-links a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
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
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 20px;
            width: 100%;
            max-width: 1200px;
        }

        h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        /* Centering the Table */
        .table-wrapper {
            width: 100%;
            display: flex;
            justify-content: center; /* Center the table horizontally */
        }

        table {
            width: 100%;
            max-width: 800px; /* Restrict the table width */
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #1877f2;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td i {
            cursor: pointer;
            margin-right: 10px;
            transition: color 0.3s ease;
        }

        td i:hover {
            color: #1877f2;
        }

        /* Button Styles */
        .btn-login {
            background-color: #1877f2;
            color: white;
            padding: 12px 25px;
            border-radius: 4px;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: inline-block;
            margin-top: 20px;
        }

        .btn-login:hover {
            background-color: #166fe5;
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
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
            color: #333;
        }

        .modal-body {
            margin-top: 20px;
        }

        .modal input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        .modal button {
            width: 100%;
            padding: 12px;
            background-color: #1877f2;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .modal button:hover {
            background-color: #166fe5;
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

<body>

    @if (session('success'))
        <x-sweetalert type="success" :message="session('success')" />
    @endif

    @if (session('info'))
        <x-sweetalert type="info" :message="session('info')" />
    @endif

    @if (session('error'))
        <x-sweetalert type="error" :message="session('error')" />
    @endif

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

    <!-- Table of Events -->
    <div class="main-content">
        <h2>Events List</h2>
        <button onclick="openModal()" class="btn-login bg-black font-bold z-50">
            Add Category
        </button>

        <!-- Modal -->
        <div id="modal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Add Event</h2>
                    <button onclick="closeModal()" class="modal-close">X</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.add_category') }}" method="POST" class="mt-5">
                        @csrf
                        <select name="event_id" id="event_id">
                            @if($events->isEmpty())
                                <option value="">No Events Available</option>   
                            @else
                                @foreach($events as $event)
                                    <option value="{{$event->id}}">{{$event->event_name}}</option>
                                @endforeach
                            @endif
                        </select>
                        <div>
                            <label for="category_name">Category Name</label>
                            <input type="text" name="category_name" id="category_name" value="{{ old('category_name') }}" required>
                        </div>
                        <div>
                            <label for="category_description">category Description</label>
                            <input type="text" name="category_description" id="category_description" value="{{ old('category_description') }}" required>
                        </div>
                        <button type="submit">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Event ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($catrgories->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center">No Categories available</td>
                        </tr>
                    @else
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->category_description }}</td>
                                <td>{{ $category->event_id }}</td>
                                <td><i class="fa-regular fa-pen-to-square"></i> | <i class="fa-solid fa-trash-can"></i></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
