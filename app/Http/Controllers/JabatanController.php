<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;
class JabatanController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$jabatan = Jabatan::all();

    	return view('admin.jabatan.index', compact('jabatan'));
    }

    public function create(Request $request)
    {
    	$this->validate($request,[
    		'nip' => 'required',
    		'nama' => 'required',
    		'jabatan' => 'required',
    	]);
    	Jabatan::create([
		    'nip' => $request->nip,
		    'nama' => $request->nama,
		    'jabatan' => $request->jabatan,
		    'jabatan2' => $request->jabatan2,
		]);

		return redirect()->back();
    }
}
