<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Show the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Optional: Fetch data to pass to the view
        $user = Auth::user(); // Example of retrieving the authenticated user

        // Pass the data to the view
        return view('dashboard.index', compact('user'));
    }
}
