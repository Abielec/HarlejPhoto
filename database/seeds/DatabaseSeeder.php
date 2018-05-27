<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([MenuTableSeeder::class,
        ImagesSeedTable::class,
        OptionCategoriesTable::class,
        GeneralValuesTable::class,
        ClientsSeedTable::class,
        SessionsImageTableSeed::class,
        SessionInformationsTableSeed::class
        
        ]);
    }
}
