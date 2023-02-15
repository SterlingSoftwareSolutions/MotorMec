<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', ['role' => 'admin']);

    }
}
