<?php

namespace App\Http\Controllers;

use App\Models\User; // Add the User model for user management
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Constructor to ensure only admins can access the dashboard
    public function __construct()
    {
        $this->middleware('admin');  // This middleware ensures only admins can access the dashboard
    }

    // Show the admin dashboard
    public function index()
    {
        // You can fetch data to display on the admin dashboard, like user stats
        $userCount = User::count(); // Example: total number of users
        $recentUsers = User::latest()->take(5)->get(); // Example: show the 5 most recent users

        return view('admin.dashboard', compact('userCount', 'recentUsers'));
    }

    // Manage users: Show a list of all users (you can add functionality to delete, update, etc.)
    public function manageUsers()
    {
        $users = User::all(); // Get all users

        return view('admin.manage-users', compact('users'));
    }

    // Add more methods to handle other admin-related actions (e.g., view reports, settings)
}
