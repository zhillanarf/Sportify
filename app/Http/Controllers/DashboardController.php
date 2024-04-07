<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            return view('dashboard.admin');
        } else {
            return view('welcome');
        }
        return Auth::user()->role == 'admin' ? view('dashboard.admin') : view('welcome');
    }

    public function users()
    {
        return view('dashboard.users');
    }
    public function programs()
    {
        return view('dashboard.programs');
    }
    public function workouts()
    {
        return view('dashboard.workouts');
    }
}
