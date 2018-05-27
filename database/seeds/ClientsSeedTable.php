<?php

use Illuminate\Database\Seeder;
use App\Clients;

class ClientsSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Client = new Clients();
        $Client->Name = "Paulina";
        $Client->LastName = "Sznajder";
        $Client->Phone = "999999999";
        $Client->email = "losowe@wp.pl";
        $Client->save();

        $Client = new Clients();
        $Client->Name = "Adrian";
        $Client->LastName = "Bielec";
        $Client->Phone = "999999999";
        $Client->email = "ss@wp.pl";
        $Client->save();
    }
}
