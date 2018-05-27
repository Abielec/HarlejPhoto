<?php

use Illuminate\Database\Seeder;
use App\BanerImgs;

class ImagesSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $BanerImg = new BanerImgs();
        $BanerImg->BackgroundURL = 'img/baner.jpg';
        $BanerImg->Position = 0;
        $BanerImg->MainSlogan = "Fotografia to moja pasja";
        $BanerImg->SecondSlogan = "Od zawsze";
        $BanerImg->save();

        $BanerImg = new BanerImgs();
        $BanerImg->BackgroundURL = 'img/baner2.jpg';
        $BanerImg->Position = 1;
        $BanerImg->save();

        $BanerImg = new BanerImgs();
        $BanerImg->BackgroundURL = 'img/baner3.jpg';
        $BanerImg->Position = 2;
        $BanerImg->save();

        $BanerImg = new BanerImgs();
        $BanerImg->BackgroundURL = 'img/baner4.jpg';
        $BanerImg->Position = 3;
        $BanerImg->save();

        $BanerImg = new BanerImgs();
        $BanerImg->BackgroundURL = 'img/baner5.jpg';
        $BanerImg->Position = 4;
        $BanerImg->save();

        $BanerImg = new BanerImgs();
        $BanerImg->BackgroundURL = 'img/baner6.jpg';
        $BanerImg->Position = 5;
        $BanerImg->save();

        $BanerImg = new BanerImgs();
        $BanerImg->BackgroundURL = 'img/baner7.jpg';
        $BanerImg->Position = 6;
        $BanerImg->save();

        $BanerImg = new BanerImgs();
        $BanerImg->BackgroundURL = 'img/baner8.jpg';
        $BanerImg->Position = 7;
        $BanerImg->save();

        $BanerImg = new BanerImgs();
        $BanerImg->BackgroundURL = 'img/baner9.jpg';
        $BanerImg->Position = 8;
        $BanerImg->save();

        $BanerImg = new BanerImgs();
        $BanerImg->BackgroundURL = 'img/baner10.jpg';
        $BanerImg->Position = 9;
        $BanerImg->save();

        $BanerImg = new BanerImgs();
        $BanerImg->BackgroundURL = 'img/baner11.jpg';
        $BanerImg->Position = 10;
        $BanerImg->save();
    }
}
