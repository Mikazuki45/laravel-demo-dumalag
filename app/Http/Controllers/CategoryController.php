<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $events = Event::all();
        return view('.Category', compact('categories', 'events'));
    }
}