<?php

namespace App\Exports;

use App\Kematian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KematianExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kematian::all();
    }

    public function map($kematian): array
    {
        return [
            $kematian->nama,
            $kematian->kelamin,
            $kematian->tggl_lhr,
            $kematian->agama,
            $kematian->pekerjaan,
            $kematian->nik,
            $kematian->alamat,
            $kematian->keterangan,
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
            'Keterangan',
        ];
    }
}
