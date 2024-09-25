<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Optionally, you can fetch user-related data if needed
        $user = Auth::user();

        return view('dashboard', compact('user')); // Pass user data to the view
    }
}
