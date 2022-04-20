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
            ->selectRaw(
                '(option2 + option4 + option6 + option10 + option15 + option19)*1.66680,
                (option1 + option3 + option7 + option11 + option16 + option22)*1.66680,
                (option8 + option12+ option18+ option20+ option23+ option13)*1.66680,
                (option5 + option9 + option14 + option24 + option17 + option21)*1.66680'
            )
            ->join('users as usr', 'usr.id', '=', 'srv.user_id')
            ->get();
        return $rows;
    }
}
