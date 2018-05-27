<?php

use Illuminate\Database\Seeder;
use App\OptionCategories;

class OptionCategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Category = new OptionCategories();
        $Category->CategoryName = "AboutMe";
        $Category->save();
    }
}
