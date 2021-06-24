<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $major = [

        /**
         * Informatika
         */
            [
                'major_name' => 'Informatika',
                'cluster_id' => 1,
                'university'=> 'Universitas Indonesia',
                'passing_grade' => '65'
            ],

            [
                'major_name' => 'Informatika',
                'cluster_id' => 1,
                'university'=> 'Institut Teknologi Bandung',
                'passing_grade' => '65'
            ],

            [
                'major_name' => 'Informatika',
                'cluster_id' => 1,
                'university'=> 'Institut Teknologi Sepuluh Nopember',
                'passing_grade' => '65'
            ],

            /**
             * Teknik Mesin
             */

            [
                'major_name' => 'Teknik Mesin',
                'cluster_id' => 1,
                'university'=> 'Universitas Indonesia',
                'passing_grade' => '60'
            ],

            [
                'major_name' => 'Teknik Mesin',
                'cluster_id' => 1,
                'university'=> 'Institut Teknologi Bandung',
                'passing_grade' => '60'
            ],

            [
                'major_name' => 'Teknik Mesin',
                'cluster_id' => 1,
                'university'=> 'Institut Teknologi Sepuluh Nopember',
                'passing_grade' => '60'
            ],

            /**
             * Teknik Perkapalan
             */
            [
                'major_name' => 'Teknik Perkapalan',
                'cluster_id' => 1,
                'university'=> 'Institut Teknologi Sepuluh Nopember',
                'passing_grade' => '50'
            ],

            [
                'major_name' => 'Teknik Perkapalan',
                'cluster_id' => 1,
                'university'=> 'Universitas Indonesia',
                'passing_grade' => '50'
            ],

            [
                'major_name' => 'Teknik Perkapalan',
                'cluster_id' => 1,
                'university'=> 'Institut Teknologi Bandung',
                'passing_grade' => '50'
            ],

            /**
             * Arsitektur
             */

            [
                'major_name' => 'Arsitektur',
                'cluster_id' => 1,
                'university'=> 'Institut Teknologi Bandung',
                'passing_grade' => '50'
            ],

            [
                'major_name' => 'Arsitektur',
                'cluster_id' => 1,
                'university'=> 'Universitas Indonesia',
                'passing_grade' => '50'
            ],

            [
                'major_name' => 'Arsitektur',
                'cluster_id' => 1,
                'university'=> 'Institut Teknologi Sepuluh Nopember',
                'passing_grade' => '50'
            ],

            /**
             * Hukum
             */
            [
                'major_name' => 'Hukum',
                'cluster_id' => 2,
                'university'=> 'Institut Teknologi Sepuluh Nopember',
                'passing_grade' => '50'
            ],

            [
                'major_name' => 'Hukum',
                'cluster_id' => 2,
                'university'=> 'Universitas Indonesia',
                'passing_grade' => '50'
            ],

            [
                'major_name' => 'Hukum',
                'cluster_id' => 2,
                'university'=> 'Institut Teknologi Bandung',
                'passing_grade' => '50'
            ],

            /**
             * Hubungan Internasional
             */

            [
                'major_name' => 'Hubungan Internasional',
                'cluster_id' => 2,
                'university'=> 'Institut Teknologi Bandung',
                'passing_grade' => '50'
            ],

            [
                'major_name' => 'Hubungan Internasional',
                'cluster_id' => 2,
                'university'=> 'Institut Teknologi Sepuluh Nopember',
                'passing_grade' => '50'
            ],

            [
                'major_name' => 'Hubungan Internasional',
                'cluster_id' => 2,
                'university'=> 'Universitas Indonesia',
                'passing_grade' => '50'
            ],

            /**
             * Psikologi
             */
            [
                'major_name' => 'Psikologi',
                'cluster_id' => 2,
                'university'=> 'Universitas Indonesia',
                'passing_grade' => '50'
            ],

            [
                'major_name' => 'Psikologi',
                'cluster_id' => 2,
                'university'=> 'Institut Teknologi Sepuluh Nopember',
                'passing_grade' => '50'
            ],

            [
                'major_name' => 'Psikologi',
                'cluster_id' => 2,
                 'university'=> 'Institut Teknologi Bandung',
                'passing_grade' => '50'
            ],
        ];

        Major::insert($major);

    }
}
