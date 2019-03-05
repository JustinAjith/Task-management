<?php

namespace App\Http\Controllers\Auther;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function master()
    {
        return view('auther.auther');
    }
}
