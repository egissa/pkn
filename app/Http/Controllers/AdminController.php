<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Exports\SkckExport;
use App\Exports\SktmExport;
use App\Exports\DomisiliExport;
use App\Exports\KehilanganExport;
use App\Exports\KematianExport;
use App\Exports\KTPExport;
use App\Exports\KKbaruExport;
use App\Exports\KKMenumpangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Penduduk;
use App\User;
use App\Skck;
use App\Domisili;
use App\Kehilangan;
use App\Kematian;
use App\Jabatan;
use App\Sktm;
use App\Usaha;
use App\ktp;
use App\Kk_baru;
use App\Menumpangkk;
use Auth;
use PDF;

class AdminController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sktm = Sktm::where('status','=','1')->get();
        // $sktm = Sktm::where('created_at','desc')->get();
        $skck = Skck::where('status', '=', '1')->get();
        // $skck = Skck::where('created_at','desc')->get();
        $domisili = Domisili::where('status',1)->get();

        // dd($sktm);
        return view('admin.home', compact('sktm','skck','domisili'));
    }

    public function indexAdmin()
    {
        $user = User::all();
        return view('admin.index', compact('user'));
    }

    public function create()
    {
        return view('admin.create');
    }

        public function store_nik(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required|unique:users',
            // 'password' => 'required',
        ]);
        $user = User::create([
            'nik' => $request->nik,
            'password' => bcrypt('1234'),
        ]);

        return redirect(route('tambah', [$user->id]));
    }

        public function show($id)
    {
        $user = User::find($id);
        return view('admin.tambah', compact('user'));
    }

     public function store(Request $request)
    {
        $this->validate($request,[
            'no_kk' => 'required',
            'nik_kk' => 'required',
            'nama_kk' => 'required',
            'nik' => 'unique:penduduk',
            'nama' => 'required',
            'tggl_lhr' => 'required',
            'nik_ibu' => 'required',
            'nik_ayah' => 'required',
            'kelamin' => 'required',
            'umur' =>'required',
            'pendidikan' => 'required',
            'hub_kel' => 'required',
            'gol_darah' => 'required',
            'perkawinan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'kode_pos' =>'required',
            'pekerjaan' => 'required',
            'kecamatan' => 'required',
            'cacat' => 'required',
            'kelurahan' => 'required',
            'no_rt' => 'required',
        ]);

        $penduduk = Penduduk::create($request->all());
        // $user = User::create([
        //  'nik' => $request->nik,
        //  'password' => $request->nik,
        // ]);

        return redirect(route('penduduk'));
    }

    public function getPenduduk()
    {
        $penduduk = Penduduk::select('penduduk.*');

        return \DataTables::eloquent($penduduk)->toJson();
    }

    public function pemerintahan()
    {
        return view('pelayanan.pemerintahan.index');
    }

    public function pembangunan()
    {
        return view('pelayanan.pembangunan.index');
    }

    public function sosial()
    {
        return view('pelayanan.sosial.index');
    }

    public function skck()
    {
        $skck = Skck::all();
        return view('pelayanan.pemerintahan.skck', compact('skck'));
    }

    public function domisili()
    {
        $domisili = Domisili::all();
        return view('pelayanan.pemerintahan.domisili', compact('domisili'));
    }

    public function kehilangan()
    {
        $kehilangan = Kehilangan::all();
        return view('pelayanan.pemerintahan.kehilangan', compact('kehilangan'));
    }

    public function kematian()
    {
        $kematian = Kematian::all();
        return view('pelayanan.pemerintahan.kematian', compact('kematian'));
    }

    
    public function ktp()
    {
        $ktp = ktp::all();
        return view('pelayanan.pemerintahan.ktp', compact('ktp'));
    }

     public function kk_baru()
    {
        $kk_baru = kk_baru::all();
        return view('pelayanan.pemerintahan.kk_baru', compact('kk_baru'));
    }

 public function Menumpangkk()
    {
        $Menumpangkk = Menumpangkk::all();
        return view('pelayanan.pemerintahan.Menumpangkk', compact('Menumpangkk'));
    }


    public function getSkck()
    {
        $skck = Skck::select('skck.*');

        return DataTables::eloquent($skck)->toJson();
    }

    public function pdfSkck($id)
    {
        $skck = Skck::find($id);
        $pdf = PDF::loadView('print.pdf.skck', ['skck' => $skck])->setPaper('legal');
        return $pdf->download('Pengantar.pdf');
    }

    public function pdfDomisili($id)
    {
        $domisili = Domisili::find($id);
        if ($domisili->jabatan_id == 1) {
            // Print nya punya lurah
            $pdf = PDF::loadView('print.pdf.domisili', ['domisili' => $domisili])->setPaper('legal');
            return $pdf->download('Pengantar.pdf');   
        }else{
            // Print nya puna sekertaris
            $pdf = PDF::loadView('print.pdf.domisili2', ['domisili' => $domisili])->setPaper('legal');
        return $pdf->download('Pengantar.pdf');
        }
    }

    public function pdfKehilangan($id)
    {
        $kehilangan = Kehilangan::find($id);
        $pdf = PDF::loadView('print.pdf.kehilangan', ['kehilangan' => $kehilangan])->setPaper('legal');
        return $pdf->download('Pengantar.pdf');
    }

    public function pdfKematian($id)
    {
        $kematian = Kematian::find($id);
        $pdf = PDF::loadView('print.pdf.kematian', ['kematian' => $kematian])->setPaper('legal');
        return $pdf->download('Pengantar.pdf');
    }

     public function pdfktp($id)
    {
        $ktp = ktp::find($id);
        $pdf = PDF::loadView('print.pdf.pdfktp', ['ktp' => $ktp])->setPaper('legal');
        return $pdf->download('pdfktp.pdf');
    }


     public function pdfkkbaru($id)
    {
        $kkbaru = Kk_baru::find($id);
        $pdf = PDF::loadView('print.pdf.pdfkkbaru', ['ktp' => $kkbaru])->setPaper('legal');
        return $pdf->download('pdfktp.pdf');
    } 


    public function exportSkck()
    {
        return Excel::download(new SkckExport, 'Skck.xlsx');
    }

    public function exportDomisili()
    {
        return Excel::download(new DomisiliExport, 'Domisili.xlsx');
    }

    public function exportKehilangan()
    {
        return Excel::download(new KehilanganExport, 'Kehilangan.xlsx');
    }

    public function exportKematian()
    {
        return Excel::download(new KematianExport, 'Kematian.xlsx');
    }

 public function KtpExport()
    {
        return Excel::download(new KtpExport, 'ktp.xlsx');
    }

    public function KKbaruExport()
    {
        return Excel::download(new KKbaruExport, 'KK_baru.xlsx');
    }

     public function KKMenumpangExport()
    {
        return Excel::download(new KKMenumpangExport, 'KKMenumpang.xlsx');
    }



    // public function edit($id)
    // {
    //     $data = Skck::find($id);
    //     // dd($data);
    //     return view('pelayanan.pemerintahan.edit_skck', compact('data'));
    // }

    // Sosial

    public function sktm()
    {
        $sktm = Sktm::all();
        return view('pelayanan.sosial.sktm', compact('sktm'));
    }

    public function edit($id)
    {
        $sktm = Sktm::find($id);
        $jabatan = Jabatan::all();
        return view('pelayanan.sosial.edit',compact('sktm','jabatan'));
    }

    public function update(Request $request, $id)
    {
        $sktm = Sktm::where(['id' => $id])->first();
        $sktm->update([
            'jabatan_id' => $request->jabatan_id,
            'status' => '0'
        ]);
        // dd($sktm);
        $sktm = Sktm::find($id);
        $create = Carbon::parse($sktm->created_at)->isoformat('D MMMM Y');
        $pdf = PDF::loadView('print.pdf.sktm', compact('sktm','create'))->setPaper('legal');
        return $pdf->download('Pengantar.pdf');
        return redirect()->back()->with('status', 'Sktm updated!');
    }

    public function domisiliupdate(Request $request, $id)
    {
        $domisili = Domisili::where(['id' => $id])->first();
        $domisili->update([
            'jabatan_id' => $request->jabatan_id,
            'status' => '0'
        ]);
        $domisili = Domisili::find($id);
        $create = Carbon::parse($domisili->created_at)->isoformat('D MMMM Y');
        $pdf = PDF::loadView('print.pdf.domisili', ['domisili' => $domisili,'create' => $create])->setPaper('legal');
        return $pdf->download('Pengantar.pdf');
        return redirect()->back()->with('status', 'Domisili updated!');
    }

    // public function pdfSktm($id)
    // {
    //     $sktm = Sktm::find($id);
    //     if ($sktm->jabatan_id == 1) {
    //         // Print nya punya lurah
    //         $pdf = PDF::loadView('print.pdf.sktm', ['sktm' => $sktm])->setPaper('legal');
    //         return $pdf->download('Pengantar.pdf');   
    //     }else{
    //         // Print nya puna sekertaris
    //         $pdf = PDF::loadView('print.pdf.sktm2', ['sktm' => $sktm])->setPaper('legal');
    //     return $pdf->download('Pengantar.pdf');
    //     }
    // }

    public function exportSktm()
    {
        return Excel::download(new SktmExport, 'Sktm.xlsx');
    }

    // public function pdfSktm2($id)
    // {
    //     $sktm = Sktm::find($id);
    //     $pdf = PDF::loadView('print.pdf.sktm2', ['sktm' => $sktm])->setPaper('legal');
    //     return $pdf->download('Pengantar.pdf');
    // }

    // Pembangunan

    public function usaha()
    {
        $usaha = Usaha::all();
        return view('pelayanan.pembangunan.usaha', compact('usaha'));
    }

    public function pdfUsaha($id)
    {
        $usaha = Usaha::find($id);
        $pdf = PDF::loadView('print.pdf.usaha', ['usaha' => $usaha])->setPaper('legal');
        return $pdf->download('Pengantar.pdf');
    }

    public function domisiliedit($id)
    {
        $domisili = Domisili::find($id);
        $jabatan = Jabatan::all();
        return view('pelayanan.pemerintahan.domisiliedit',compact('domisili','jabatan'));
    }

    public function kehilanganedit($id)
    {
        $kehilangan = Kehilangan::find($id);
        $jabatan = Jabatan::all();
        return view('pelayanan.pemerintahan.kehilanganedit', compact('kehilangan','jabatan'));
    }

    public function kehilanganupdate(Request $request, $id)
    {
        $kehilangan = Kehilangan::where(['id' => $id])->first();
        $kehilangan->update([
            'jabatan_id' => $request->jabatan_id,
            'status' => '0'
        ]);
        $kehilangan = kehilangan::find($id);
        $create = Carbon::parse($kehilangan->created_at)->isoformat('D MMMM Y');
        $pdf = PDF::loadView('print.pdf.kehilangan', compact('kehilangan','create'))->setPaper('legal');
        return $pdf->download('Pengantar.pdf');
        return redirect()->back()->with('status', 'Kehilangan updated!');
    }
}
