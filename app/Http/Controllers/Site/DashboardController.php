<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class DashboardController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        return view('app.dashboard.index', compact('user'));
    }
}
