<?php

namespace App\Exports;

use App\ktp;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KTPExport implements FromCollection,WithMapping, WithHeadings, ShouldAutoSize
{ /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ktp::all();
    }
   public function map($ktp): array
    {
        return [
            $ktp->id,
            $ktp->permohonan,
            $ktp->nama,
            $ktp->no_kk,
            $ktp->no_nik,
            $ktp->alamat,
            $ktp->no_rt,
            $ktp->kode_pos,
            $ktp->no_hp,
        ];
    }



    public function headings(): array
    {
        return [
            'id',
            ' permohonan',
            ' nama',
            'no_kk',
            'no_nik',
            'alamat',
            'no_rt',
            'kode_pos',
            'no_hp',
            
        ];
    }
}

