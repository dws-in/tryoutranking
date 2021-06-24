<?php

namespace Database\Seeders;

use App\Models\Cluster;
use Illuminate\Database\Seeder;

class ClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cluster = [
            [
                'id'    => 1,
                'cluster_name' => 'Saintek',
            ],
            [
                'id'    => 2,
                'cluster_name' => 'Soshum',
            ],
        ];

        Cluster::insert($cluster);
    }
}
