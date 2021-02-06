<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kelahiran;

class KelahiranController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function kelahiran()
    {
        return view('user.pemerintahan.kelahiran');
    }
}
