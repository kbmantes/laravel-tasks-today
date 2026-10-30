<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\View\View;

class PageController extends Controller
{
    public function welcome(): View
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('status')
            ->get();

        return view('welcome', [
            'title' => 'Welcome',
            'tasks' => $tasks,
        ]);
    }

    public function profile(): View
    {
        $user = User::first();

        return view('profile', [
            'title' => 'Profile',
            'user' => $user,
        ]);
    }

    public function about(): View
    {
        return view('about', [
            'title' => 'About',
        ]);
    }
}
