<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MenuPosition = new Menu();
        $MenuPosition->title = "Strona Główna";
        $MenuPosition->url = "#Top";
        $MenuPosition->Position = 1;
        $MenuPosition->save();

        $MenuPosition = new Menu();
        $MenuPosition->title = "O mnie";
        $MenuPosition->url = "#Me";
        $MenuPosition->Position = 2;
        $MenuPosition->save();

        $MenuPosition = new Menu();
        $MenuPosition->title = "Sesje zdjęciowe";
        $MenuPosition->url = "#Sessions";
        $MenuPosition->Position = 4;
        $MenuPosition->save();

        $MenuPosition = new Menu();
        $MenuPosition->title = "Kontakt";   
        $MenuPosition->url = "#Contact";
        $MenuPosition->Position = 3;
        $MenuPosition->save();
    }
}
