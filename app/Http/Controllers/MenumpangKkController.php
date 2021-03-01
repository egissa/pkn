<?php


namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Menumpangkk;
use App\Admin;
use Auth;
use Illuminate\Support\Carbon;

class MenumpangKkController extends Controller
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

    public function KKmenumpang()
    {
    	$user = User::find(auth()->user()->id);
        //dd($user);
    	return view('user.pemerintahan.KKmenumpang', compact('user'));
    }

    public function create(Request $request)
    {
        $this->validate($request,[
           'nama_kk_lama' => 'required',
            'no_kk_lama' => 'required',
            'nik_kk_lama' => 'required',
            'nama_kk_ditempati' => 'required',
            'no_kk_ditempati' => 'required',
            'nik_kk_ditempati' => 'required',
            'alamat_kk_ditempati' => 'required',
            'kelurahan' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'provinsi'=> 'required',
            'no_hp'=> 'required',
            'alasan_menumpang'=> 'required',
            'jumlah_anggota_menumpang'=> 'required',
            'daftar_anggota_nik'=> 'required',
            'daftar_nama_anggota'=> 'required',
            
        ]);
        $Menumpangkk = Menumpangkk::create($request->all());

        $create = Carbon::parse($Menumpangkk->created_at)->isoformat('D MMMM Y');
        $ch = curl_init(); 
    $data = array('chat_id' => '630495419', 'text' => "New😃\n\n Surat Permohonan kartu menumpang KK  nama : $Menumpangkk->nama_kk_ditempati\n\n Nama : $Menumpangkk->alamat_kk_ditempati\n alasan : $Menumpangkk->alasan_menumpang\n \\ jumlah : $Menumpangkk->jumlah_anggota_menumpang\n\n Kuala Samboja $create");
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1245434228:AAHxu65mWg1B0mVVzoOEhsZqURNnEgrEFHc/sendMessage");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);

        return redirect(route('user.pemerintahan'))->with('success', 'Data berhasil dibuat');
    }
}
