<?php

use Illuminate\Database\Seeder;
use App\SessionsImage;
class SessionsImageTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SessionImage = new SessionsImage();
        $SessionImage->SessionId = 1;
        $SessionImage->ImgURL = "img/Sesje/Sznajder1.jpg";
        $SessionImage->save();
        
        $SessionImage = new SessionsImage();
        $SessionImage->SessionId = 1;
        $SessionImage->ImgURL = "img/Sesje/Sznajder2.jpg";
        $SessionImage->save();

        $SessionImage = new SessionsImage();
        $SessionImage->SessionId = 1;
        $SessionImage->ImgURL = "img/Sesje/Sznajder3.jpg";
        $SessionImage->save();
        
        $SessionImage = new SessionsImage();
        $SessionImage->SessionId = 1;
        $SessionImage->ImgURL = "img/Sesje/Sznajder4.jpg";
        $SessionImage->save();

        ///
        $SessionImage = new SessionsImage();
        $SessionImage->SessionId = 2;
        $SessionImage->ImgURL = "img/Sesje/Sznajder1.jpg";
        $SessionImage->save();
        
        $SessionImage = new SessionsImage();
        $SessionImage->SessionId = 2;
        $SessionImage->ImgURL = "img/Sesje/Sznajder2.jpg";
        $SessionImage->save();

        $SessionImage = new SessionsImage();
        $SessionImage->SessionId = 2;
        $SessionImage->ImgURL = "img/Sesje/Sznajder3.jpg";
        $SessionImage->save();
        
        $SessionImage = new SessionsImage();
        $SessionImage->SessionId = 2;
        $SessionImage->ImgURL = "img/Sesje/Sznajder4.jpg";
        $SessionImage->save();
    }
}
