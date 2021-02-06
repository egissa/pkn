<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PindahController extends Controller
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
    
    public function pindah()
    {
    	return view('user.pemerintahan.pindah');
    }
}