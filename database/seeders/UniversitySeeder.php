<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $univ = [
            [
                'id'    => 1,
                'univ_name' => 'Universitas Indonesia',
            ],
            [
                'id'    => 2,
                'univ_name' => 'Institut Teknologi Sepuluh Nopember',
            ],
            [
                'id'    => 3,
                'univ_name' => 'Institut Teknologi Bandung',
            ],
            [
                'id'    => 4,
                'univ_name' => 'Universitas Gadjah Mada',
            ],
        ];
    }
}
