<?php

use Illuminate\Database\Seeder;
use App\Athlete;

class AthletesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $athletes = config('discipline');

        $athletes_list = $athletes['athlets'];

        foreach ($athletes_list as $athlete) {
            $new_athlete = new Athlete();
            $new_athlete->name = $athlete['name'];
            $new_athlete->genere = $athlete['genre'];
            $new_athlete->save();
        }
    }
}
