<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class JadwalTOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<20; $i++)
        {
            DB::table('jadwaltos')->insert([
                'namato' => 'Tryout Go 2021',
                'organizer' => 'FK ITS',
                'rumpunmapel' => 'Saintek',
                'tanggalto' => '2021-04-09'
            ]);
        }
    }
}
