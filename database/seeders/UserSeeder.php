<?php

namespace Database\Seeders;

use App\Imports\UsersImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new UsersImport, base_path('database/seeders/data/usersSeeder.xlsx'));
    }
}
