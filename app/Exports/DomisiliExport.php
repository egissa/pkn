<?php

namespace App\Exports;

use App\Domisili;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DomisiliExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Domisili::all();
    }

    public function map($domisili): array
    {
        return [
            $domisili->nama,
            $domisili->kelamin,
            $domisili->tggl_lhr,
            $domisili->agama,
            $domisili->pekerjaan,
            $domisili->nik,
            $domisili->alamat,
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
