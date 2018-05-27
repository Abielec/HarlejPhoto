<?php $__env->startSection('content'); ?>
<?php
$BanerImgs = DB::TABLE('baner_imgs')
->select('BackgroundURL','MainSlogan','SecondSlogan')
->OrderBy('Position')
->get();

function SessionAlbum($Cols,$Date,$Url)
{
    if(!File::exists(public_path("$Url")))
    {
        $Url = 'img/Sesje/error.jpg';
        $Date = "Brak zdjęcia !!!";
    }
switch($Cols)
{
    case 1:{
ECHO<<<END
<div class="col-xl-12 col-lg-12 col-sm-12 col-12 Session_album_div">
    <div class="Session_album--img" style="background:url('$Url');"></div>
    <div class="Sessions_album_information">
		<span class="Sessions_album_information-date">$Date</span>
	</div>
</div>
END;
    }break;
    case 2:{
        ECHO<<<END
    <div class="col-xl-6 col-lg-6 col-sm-6 col-12 Session_album_div">
        <div class="Session_album--img" style="background:url('$Url');"></div>
        <div class="Sessions_album_information">
		<span class="Sessions_album_information-date">$Date</span>
	</div>
</div>
END;
    }break;
    case 3:{
        ECHO<<<END
    <div class="col-xl-4 col-lg-4 col-sm-12 col-12 Session_album_div">
    <div class="Session_album--img" style="background:url('$Url');"></div>
    <div class="Sessions_album_information">
		<span class="Sessions_album_information-date">$Date</span>
	</div>
</div>
END;
    }break;

}
}
?>
    <header class="Baner" id="Top">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $__currentLoopData = $BanerImgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $BanerImg => $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($loop->first): ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <?php else: ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($BanerImg); ?>"></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            <div class="carousel-inner">
                <?php $__currentLoopData = $BanerImgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $BanerImg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->first): ?>
                        <div class="carousel-item active">
                                <div class="carosel__div--background" style="background: url(<?php echo e($BanerImg->BackgroundURL); ?>);'"></div>
                                <?php if($BanerImg->MainSlogan != '' || $BanerImg->SecondSlogan != ''): ?>
                    
                                    <div class="Slogan">
                                        <?php if($BanerImg->MainSlogan != ''): ?>
                                            <h1 class="MainSlogan" id="Slogan"><?php echo e($BanerImg->MainSlogan); ?></h1>
                                        <?php endif; ?>
                                        <?php if($BanerImg->SecondSlogan != ''): ?>
                                        <h3 class="SecondSlogan" ><?php echo e($BanerImg->SecondSlogan); ?></h3>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                        </div>
                    <?php else: ?>
                    <div class="carousel-item">
                            <div class="carosel__div--background" style="background: url(<?php echo e($BanerImg->BackgroundURL); ?>);'"></div>
                            <?php if($BanerImg->MainSlogan != '' || $BanerImg->SecondSlogan != ''): ?>
                
                                <div class="Slogan">
                                    <?php if($BanerImg->MainSlogan != ''): ?>
                                        <h1 class="MainSlogan" id="Slogan"><?php echo e($BanerImg->MainSlogan); ?></h1>
                                    <?php endif; ?>
                                    <?php if($BanerImg->SecondSlogan != ''): ?>
                                    <h3 class="SecondSlogan" ><?php echo e($BanerImg->SecondSlogan); ?></h3>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                    </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
            <?php
            $Motto = DB::Table('generals')
            ->select('OptionValue')
            ->where('OptionName','=','AboutMotto')
            ->get();
            $Name = DB::Table('generals')
            ->select('OptionValue')
            ->where('OptionName','=','MyName')
            ->get();
            $LastName = DB::Table('generals')
            ->select('OptionValue')
            ->where('OptionName','=','MyLastName')
            ->get();
            $Employ = DB::Table('generals')
            ->select('OptionValue')
            ->where('OptionName','=','MyEmploy')
            ->get();
            $AboutMe = DB::Table('generals')
            ->select('OptionValue')
            ->where('OptionName','=','Aboutme')
            ->get();
            $MyPhoto = DB::Table('generals')
            ->select('OptionValue')
            ->where('OptionName','=','Photo')
            ->get();
        ?>
    <main>
        <div class="container-fluid" id="Me">
            <h2 class="text-center display-4 Motto"><?php echo e($Motto[0]->OptionValue); ?></h2>
        </div>
        <div class="container AboutMe">
            <div class="row AboutMe__div">
                <div class="col-sm">
                    <p class="lead AboutMe__div--p">
                        <?php echo $AboutMe[0]->OptionValue; ?>

                    </p>
                </div>
                <div class="col-sm">
                    <h3 class="AboutMe__div--h3 text-center"><?php echo e($Name[0]->OptionValue); ?> <?php echo e($LastName[0]->OptionValue); ?></h3>
                    <h4 class="AboutMe__div--h4 text-center"><?php echo e($Employ[0]->OptionValue); ?></h4>
                    <img src=<?php echo e($MyPhoto[0]->OptionValue); ?> class="AboutMe__div--img" />
                </div>
            </div>
        </div>
    </main>
    <section>
        <div id="Contact" class="Contact">
            <div class="container p-5">
            <article>  
                <header> 
                    <h3 class="display-3 text-center font-weight-bold p-5 text-white">Skontaktuj się ze mną</h3>
                </header>
                <section class="Contact__section text-white">
                    <form>
                        <div class="form-group">
                            <label for="PersonEmail">Podaj swój adres E-mail</label>
                            <input type="email" class="form-control" id="PersonEmail" placeholder="Wprowadź swój email" />
                        </div>
                        <div class="form-group">
                            <label for="Name">Podaj swoje imię i nazwisko</label>
                            <input type="text" class="form-control" id="Name" placeholder="Wprowadź imię i nazwisko" />
                        </div>
                        <div class="form-group">
                            <label for="text">Twoja wiadomość</label>
                            <textarea id="text" class="form-control" ></textarea>
                        </div>
                        <div class="row text-center">
                            <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                            <input type="submit" class="btn btn-primary p-4 mt-5 w-100" value="Wyślij" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                            <input type="reset" class="btn btn-primary p-4 mt-5 w-100" value="Wyczyść" />
                            </div>
                        </div>
                    </form>
                </section>
            </article>
        </div>
        </div>
        <div class="container-fluid Sessions" id="Sessions">
            <div class="Session-introduction text-center">
                <h2 class="Sessions--h2 text-black">Ostatnie sesje fotograficzne</h2>
            </div>
            <?php
                $NumberOfSessions = DB::TABLE('session_informations')
                ->select('session_informations.SessionDate','session_informations.SessionTitle','sessions_images.ImgURL')
                ->join('sessions_images','sessions_images.ImageId','=','session_informations.Thumb')
                ->count();
                $Sessions = DB::TABLE('session_informations')
                ->select('session_informations.SessionDate','session_informations.SessionTitle','sessions_images.ImgURL')
                ->join('sessions_images','sessions_images.ImageId','=','session_informations.Thumb')
                ->limit(2)
                ->get();
            echo '<div class="row Session_album">';
               foreach($Sessions as $Session => $value)
               {
                  switch($NumberOfSessions)
                  {
                      case 1:{
                        SessionAlbum(1,$value->SessionDate,$value->ImgURL);
                      }break;
                      case 2:{
                        SessionAlbum(2,$value->SessionDate,$value->ImgURL);
                      }break;
                      case 3:{
                        SessionAlbum(3,$value->SessionDate,$value->ImgURL);
                      }break;
                      case 4:{
                        if($Session !=4)
                         SessionAlbum(3,$value->SessionDate,$value->ImgURL);
                        else {
                         SessionAlbum(1,$value->SessionDate,$value->ImgURL);
                        }
                      }break;
                      case 5:{
                          if($Session== 1 || $Session ==2 || $Session == 3)
                          {
                            SessionAlbum(3,$value->SessionDate,$value->ImgURL);
                          }
                          else {
                            SessionAlbum(2,$value->SessionDate,$value->ImgURL);
                          }
                      }break;
                      case 6:{
                          if($Session== 1 || $Session ==2 || $Session == 3)
                          {
                            SessionAlbum(3,$value->SessionDate,$value->ImgURL);
                          }
                          else if($Session==6)
                          {
                            SessionAlbum(1,$value->SessionDate,$value->ImgURL);
                          }
                          else {
                            SessionAlbum(2,$value->SessionDate,$value->ImgURL);
                          }
                      }break;
                      case 7:{
                          if($Session== 1 || $Session ==2 || $Session == 3)
                          {
                            SessionAlbum(3,$value->SessionDate,$value->ImgURL);
                          }
                          else if($Session == 5 ||$Session==6 || $Session == 7  )
                          {
                            SessionAlbum(3,$value->SessionDate,$value->ImgURL);
                          }
                          else {
                            SessionAlbum(2,$value->SessionDate,$value->ImgURL);
                          }
                      }break;
                      case 8:{
                          if($Session== 1 || $Session ==2 || $Session == 3)
                          {
                            SessionAlbum(3,$value->SessionDate,$value->ImgURL);
                          }
                          else if($Session == 8 ||$Session==6 || $Session == 7  )
                          {
                            SessionAlbum(3,$value->SessionDate,$value->ImgURL);
                          }
                          else {
                            SessionAlbum(2,$value->SessionDate,$value->ImgURL);
                          }
                      }break;
                  }
               }
              
     
            ?>
        </div>
    </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
setInterval(function(){document.getElementById("Slogan").classList.add("active");},100)

</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('Layouts.KryptosLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>