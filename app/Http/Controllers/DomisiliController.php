<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\User;
use App\Domisili;
use Auth;

class DomisiliController extends Controller
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
    
    public function domisili()
    {
        $user = User::find(auth()->user()->id);
    	return view('user.pemerintahan.domisili', compact('user'));
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'tggl_lhr' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ]);
        $domisili = Domisili::create($request->all());
        $create = Carbon::parse($domisili->created_at)->isoformat('D MMMM Y');
        $ch = curl_init(); 
    $data = array('chat_id' => '630495419', 'text' => "New😃\n\n Surat Keterangan Domisili\n Nama : $domisili->nama\n Nik : $domisili->nik\n Jenis Kelamin : $domisili->kelamin\n\n Kuala Samboja $create");
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1245434228:AAHxu65mWg1B0mVVzoOEhsZqURNnEgrEFHc/sendMessage");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);

        return redirect(route('user.pemerintahan'))->with('success', 'Data berhasil dibuat');
    }
}
