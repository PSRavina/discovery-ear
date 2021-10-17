<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return null|\Illuminate\Database\Eloquent\Model
     */
    public function model(array $row)
    {
        return new User([
            'email' => $row[0],
            'password' => Hash::make($row[1]),
            'name' => $row[2]
        ]);
    }
}
