<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remind;
use App\Models\Folder;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('user');
    // }
    
    public function index()
    {
        $reminds = Remind::orderByRaw('`deadline` IS NULL ASC')->orderBy('deadline')->get();
        
        $folders = Auth::user()->folders()->get();
        
        return view('user', [
            'reminds' => $reminds,
            'folders' => $folders,
        ]);
    
    
    }
    
    
}
