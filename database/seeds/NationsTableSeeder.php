<?php

use Illuminate\Database\Seeder;
use App\Nation;

class NationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('discipline');

        $nations_list = $data['countries'];

        foreach ($nations_list as $nation) {
            $new_nation = new Nation();
            $new_nation->name = $nation['name'];
            $new_nation->sigla = $nation['acronym'];
            $new_nation->save();
        }
    }
}
