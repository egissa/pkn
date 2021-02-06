<?php

namespace App\Exports;

use App\Kehilangan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KehilanganExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kehilangan::all();
    }

    public function map($kehilangan): array
    {
        return [
            $kehilangan->nama,
            $kehilangan->kelamin,
            $kehilangan->tggl_lhr,
            $kehilangan->agama,
            $kehilangan->pekerjaan,
            $kehilangan->nik,
            $kehilangan->alamat,
        ];
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Jenis Kelamin',
            'Tanggal Lahir',
            'Agama',
            'Pekerjaan',
            'No KTP',
            'Alamat',
        ];
    }
}
