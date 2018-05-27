<?php

use Illuminate\Database\Seeder;
use App\Generals;

class GeneralValuesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Option = new Generals();
        $Option->OptionName = "AboutMotto";
        $Option->OptionValue = "Skromny człowiek, robię wszystko z pasji i miłości.";
        $Option->OptionCategory = 1;
        $Option->save();

        $Option = new Generals();
        $Option->OptionName = "MyName";
        $Option->OptionValue = "Krystian";
        $Option->OptionCategory = 1;
        $Option->save();

        $Option = new Generals();
        $Option->OptionName = "MyLastName";
        $Option->OptionValue = "Harlej";
        $Option->OptionCategory = 1;
        $Option->save();

        $Option = new Generals();
        $Option->OptionName = "MyEmploy";
        $Option->OptionValue = "Fotograf";
        $Option->OptionCategory = 1;
        $Option->save();

        $Option = new Generals();
        $Option->OptionName = "Photo";
        $Option->OptionValue = "img/logo.jpg";
        $Option->OptionCategory = 1;
        $Option->save();

        $Option = new Generals();
        $Option->OptionName = "AboutMe";
        $Option->OptionValue = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur enim orci, rutrum vel tempor vitae, porttitor non nunc. Praesent volutpat quis ante id congue. Morbi non diam rhoncus, vulputate urna eget, iaculis tellus. Duis posuere convallis neque, eu lobortis enim convallis sit amet. Donec id sodales massa, non sollicitudin mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse bibendum, libero in gravida luctus, ligula odio porta magna, eget bibendum dolor diam efficitur augue. Vivamus dictum varius turpis id sollicitudin. Sed auctor ultrices pulvinar.
        <br />
        <br />
        In consequat elementum magna eget aliquam. Donec lacinia diam at lacus varius, et rutrum magna finibus. Sed tempus eros a porttitor varius. Pellentesque accumsan, dui id aliquet hendrerit, ligula massa interdum ligula, nec egestas arcu felis eget odio. Aenean bibendum tristique ipsum vel bibendum. Cras egestas malesuada luctus. Nam commodo eu sem et varius. Sed ac elementum felis, eget pellentesque urna. Donec tellus diam, vehicula eget enim non, mattis pulvinar augue. Proin nisi velit, ornare in tristique ut, auctor eu mauris. Quisque id molestie orci. Quisque maximus malesuada augue id maximus. Nunc tempor ipsum sed metus suscipit fringilla.
        ';
        $Option->OptionCategory = 1;
        $Option->save();
    }
}
