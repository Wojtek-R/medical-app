<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed admin user
        DB::table('terms')->insert([
            'term' => 'Achlorhydria',
            'definition' => 'A condition in which the stomach produces little or no acid. This can affect digestion, cause stomach pain, and keep the body from absorbing vitamins and nutrients.',
        ]);

        DB::table('terms')->insert([
            'term' => 'Cirrhosis',
            'definition' => 'A chronic disease of the liver that progressively destroys the liver’s ability to aid in digestion and detoxification.',
        ]);

        DB::table('terms')->insert([
            'term' => 'Electrolysis',
            'definition' => 'A permanent hair removal technique that destroys follicles one at a time with a hair-thin needle inserted into the base of the follicle.',
        ]);

        DB::table('terms')->insert([
            'term' => 'Nociceptors',
            'definition' => 'Nerve endings that detect pain and transmit pain information to the brain and spinal cord.',
        ]);

        DB::table('terms')->insert([
            'term' => 'Refraction',
            'definition' => 'The deflection of light as it passes through one medium to another of different density; also refers an eye test to evaluate the eye’s ability to focus.',
        ]);


    }
}
