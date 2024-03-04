<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Chapters;
use App\Models\User;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Log;
use DB;

class GeneralController extends Controller
{
    public function homepage(){
        $chapter = Chapters::all();
        return view('index', compact('chapter'));
    }

    public function index()
    {
        $userLogs = UserLog::with('user')->orderByDesc('created_at')->paginate(20);

        return view('admin.dashboard', compact('userLogs'));
    }
}
