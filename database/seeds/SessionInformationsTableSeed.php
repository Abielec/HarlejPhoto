<?php

use Illuminate\Database\Seeder;
use App\SessionInformations;
class SessionInformationsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SessionInformation = new SessionInformations();
        $SessionInformation->SessionDate = "2018.04.04";
        $SessionInformation->SessionTitle = "Sznajder wśród lasu";
        $SessionInformation->Client = 1;
        $SessionInformation->Thumb = 3;
        $SessionInformation->save();

        $SessionInformation = new SessionInformations();
        $SessionInformation->SessionDate = "2018.06.04";
        $SessionInformation->SessionTitle = "Bolec wśród lasu";
        $SessionInformation->Client = 2;
        $SessionInformation->Thumb = 6;
        $SessionInformation->save();
    }
}
