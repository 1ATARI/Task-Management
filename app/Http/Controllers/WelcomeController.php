<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $task = Task::count();
        $Dtask = Task::whereDate('created_at', Carbon::today())->get();
        $users = User::count();
        $online = User::select("*")
            ->whereNotNull('last_seen')
            ->orderBy('last_seen', 'DESC')
            ->paginate(10);

        $mycount = 0;

        return view('dashboard.index' , compact('task' ,'Dtask' , 'users' , 'online'  , 'mycount'));

    }
}
