<?php

namespace App\Exports;

use App\Models\Survey;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class RequestFormulary implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $rows = DB::connection()
            ->table('surveys as srv')
            ->selectRaw('srv.request_date, usr.name, usr.email,srv.option1 as hola,srv.option2,srv.option3,srv.option4,srv.option5,srv.option6,srv.option7,srv.option8,srv.option9,srv.option10,srv.option11,srv.option12,srv.option13,srv.option14,srv.option15,srv.option16,srv.option17,srv.option18,srv.option19,srv.option20,srv.option21,srv.option22,srv.option23,srv.option24,srv.option25,srv.option26,srv.option27,srv.option28')
            ->join('users as usr', 'usr.id', '=', 'srv.user_id')
            ->get();
        return $rows;
    }
}
