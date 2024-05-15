<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Workout;

class DashboardController extends Controller
{
    public function index()
    {
        return Auth::user()->role == 'admin' ? view('dashboard.index', ['users' => User::all(), 'programs' => Program::all(), 'workouts' => Workout::all()]) : view('welcome');
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
