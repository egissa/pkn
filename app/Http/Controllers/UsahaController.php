<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Usaha;
use App\Admin;
use Auth;
use Illuminate\Support\Carbon;
class UsahaController extends Controller
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

    public function usaha()
    {
    	$user = User::find(auth()->user()->id);
    	return view('user.pembangunan.usaha', compact('user'));
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'kewarganegaraan' => 'required',
            'tggl_lhr' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'perkawinan' => 'required',
            'alamat' => 'required',
            'nama_usaha' => 'required',
            'mulai_usaha' => 'required',
            'jenis_usaha' => 'required',
            'alamat_usaha' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
        ]);
        $usaha = Usaha::create($request->all());

        $create = Carbon::parse($usaha->created_at)->isoformat('D MMMM Y');
        $ch = curl_init(); 
    $data = array('chat_id' => '630495419', 'text' => "New😃\n\n Surat Keterangan usaha\n Nama : $usaha->nama\n Nik : $usaha->nik\n Jenis Kelamin : $usaha->kelamin\n\n Kuala Samboja $create");
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1245434228:AAHxu65mWg1B0mVVzoOEhsZqURNnEgrEFHc/sendMessage");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);

        return redirect(route('user.pembangunan'))->with('success', 'Data berhasil dibuat');
    }
}
