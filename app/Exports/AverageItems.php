<?php

namespace App\Exports;

use App\Models\Survey;
use Maatwebsite\Excel\Row;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class AverageItems implements FromCollection, WithHeadings, WithTitle
{
    /**
     * @return \Illuminate\Support\Collection
     * 
     */
    public function title(): string
    {
        return 'Resultados en base 10 por tipo de Escucha';
    }

    public function headings(): array
    {
        return [
            'Escucha Previa',
            'Escucha Enfocada',
            'Escucha Global',
            'Escucha Integrativa',
        ];
    }

    public function collection()
    {
        $rows = DB::connection()
            ->table('surveys as srv')
            ->select(
                '(option2 + option4 + option6 + option10 + option15 + option19),(option1 + option3 + option7 + option11 + option16 + option22),(option8 + option12+ option18+ option20+ option23+ option13),(option5 + option9 + option14 + option24 + option17 + option21)'
            )
            ->join('users as usr', 'usr.id', '=', 'srv.user_id')
            ->dd();
        return $rows;
    }
}
