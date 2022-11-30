<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use  Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        return view('brand.dashboard.dashboard');
    }
}
