<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Calendar\CalendarView;

class CalendarController extends Controller
{
   public function index()
   {
       return view('calendar');
    }
}
