<?php
   require __DIR__.'/header.php';
    ?>
<body>
   <!--TOGGLE EMAILFORM-->
   <div class="popup">
      <sidebar class="popup-signup">
         <img src="images/icons_menu_arrow.svg" />
         <h2><?= $lang['popup'][0]; ?></h2>
         <form>
            <input type="text" name="" placeholder="<?= $lang['popup'][1]; ?>" id="Name" />
            <input type="email" name="" placeholder="<?= $lang['popup'][2]; ?>" id="Email" />
            <textarea name="message" placeholder="<?= $lang['popup'][3]; ?>" id="Message"></textarea>
            <input type="submit" value="<?= $lang['popup'][4]; ?>" />
         </form>
      </sidebar>
   </div>
   <div class="toggle-signup">
      <img class="plus" src="images/icons_plus_02.svg" />
      <img class="mail" src="images/icons_mail_02.svg"/>
   </div>
   <!--END TOGGLE EMAILFORM-->
   <!-- DETAILS -->
   <div class="details popup">
      <sidebar class="popup-details">
         <img src="images/icons_menu_arrow_active.svg" class="arrow-close" />
         <h2><?= $lang['popup-details']; ?></h2>
         <a href="brochure/Brochure_project_FS_Webb.pdf" download="broschyr-fastsecurity.pdf"><img src="images/Download-button-01.svg" class="download-button"/></a>
      </sidebar>
   </div>
   <!--END DETIALS-->

   <!-- PROGRESSBAR -->
   <sidebar class="progressbar-side">
      <progress class="progressbar" value="0" max="300"></progress>
   </sidebar>
   <!-- END PROGRESSBAR -->
   <!--MOBILE NAVBAR-->
   <div class="mobile-logo">
      <p>MENU</p>
      <img src="images/arrow down-mobile.svg" alt="Fast Security Logo" width="35px;">
   </div>
   <div class="mobile-navbar-container">
      <div class="mobile-navbar-left">
         <a href="#"><?=$lang['mobile-navbar'][0];?></a>
         <a href="#"><?=$lang['mobile-navbar'][1];?></a>
         <hr class="mobile-navbar-left-line">
         <div class="mobile-navbar-left-style2">
            <a href="#"><?=$lang['mobile-navbar'][2];?></a>
            <a href="#"><?=$lang['mobile-navbar'][3];?></a>
         </div>
         <a href="#"><?=$lang['mobile-navbar'][4];?></a>
         <a href="#"><?=$lang['mobile-navbar'][5];?></a>
      </div>
      <div class="mobile-navbar-right">
         <a href="#"><?=$lang['mobile-navbar'][6];?></a>
         <hr class="mobile-navbar-right-line">
         <div class="mobile-navbar-right-style2">
            <a href="#"><?=$lang['mobile-navbar'][7];?></a>
            <a href="#"><?=$lang['mobile-navbar'][8];?></a>
            <a href="#"><?=$lang['mobile-navbar'][9];?></a>
            <a href="#"><?=$lang['mobile-navbar'][10];?></a>
            <a href="#"><?=$lang['mobile-navbar'][11];?></a>
         </div>
         <div class="mobile-language-selector">
            <form class="language">
              <input class="<?= $language === 'Sv' ? 'active-lang' : '' ?>" type="submit" name="language" value="Sv">
              <input class="<?= $language === 'En' ? 'active-lang' : '' ?>" type="submit" name="language" value="En">
            </form>
         </div>
      </div>
      <img src="images/icons_menu_arrow_blue.svg" class="mobile-closing-arrow" alt="Close arrow">
   </div>
   <!--END MOBILE NAVBAR-->
   <!--DESKTOP NAVBAR-->
   <div class="desktop-logo">
      <img src="images/Emanuel_Mardsjo_WU_Logo_design_WT.png" alt="Fast Security Logo" width="95px;">
   </div>
   <div class="desktop-navbar-container">
      <div class="desktop-navbar">
         <a href="#"><?=$lang['desktop-navbar'][0];?></a>
         <a href="#"><?=$lang['desktop-navbar'][1];?></a>
         <a href="#"><?=$lang['desktop-navbar'][2];?></a>
         <a href="#"><?=$lang['desktop-navbar'][3];?></a>
         <a href="#"><?=$lang['desktop-navbar'][4];?></a>
      </div>
   </div>
   <div class="desktop-language-selector">
     <form class="language">
       <input class="<?= $language === 'Sv' ? 'active-lang' : '' ?>" type="submit" name="language" value="Sv">
       <input class="<?= $language === 'En' ? 'active-lang' : '' ?>" type="submit" name="language" value="En">
     </form>
   </div>
   <!--END DESKTOP NAVBAR-->

   <!--HERO-->
   <section class="hero">
     <!-- ROTATING TEXT -->
     <h2 class="sentence"><?= $lang['hero'][0]; ?>
         <div class="sliding-vertical">
         <span><?= $lang['hero'][1]; ?></span>
         <span><?= $lang['hero'][2]; ?></span>
         <span><?= $lang['hero'][3]; ?></span>
       </div>
     </h2>
     <!-- END ROTATING TEXT -->
   </section>
  <!--/END HERO-->

    <!-- 01 NEW ERA DESIGN-->
    <section class="section one">
      <article class="a one">
         <div class="article one">
            <img src="images/Logo_design_WT_text.png" />
            <h5><?= $lang['01'][0][0] ?></h5>
            <p><?= $lang['01'][0][1] ?></p>
         </div>
         <div class="header">
            <h3>01</h3>
            <h5><?= $lang['01'][0][2] ?></h5>
         </div>
         <footer class="footer">
            <img class="desktop" src="images/desktop_images/01_Neon_intro.png" />
            <img class="mobile" src="images/mobile_images/mobile_01_neon_intro.png" />
         </footer>
         <div class="button details desktop">
            <input type="submit" class="show" value="<?= $lang['details-button'][0]; ?>" />
            <input type="submit" class="hover" value="<?= $lang['details-button'][1]; ?>" />
         </div>
      </article>
      <div class="footer-info">
         <div class="over">
            <p><?= $lang['01'][0][3] ?></p>
            <h6>900</h6>
            <p><?= $lang['01'][0][4] ?></p>
         </div>
         <div class="under">
            <p><?= $lang['01'][0][5] ?></p>
            <h6>2,5</h6>
            <p><?= $lang['01'][0][6] ?></p>
         </div>
         <div class="over">
            <p><?= $lang['01'][0][7] ?></p>
            <h6>200</h6>
            <p><?= $lang['01'][0][8] ?></p>
         </div>
      </div>
      <div class="button details mobile">
         <input type="submit" class="show" value="<?= $lang['details-button'][0]; ?>" />
         <input type="submit" class="hover" value="<?= $lang['details-button'][1]; ?>" />
      </div>
      <article class="content">
         <div class="title right">
            <h5><?= $lang['01'][1][0] ?></h5>
            <hr />
         </div>
         <div class="article right">
            <p><?= $lang['01'][1][1] ?></p>
         </div>
      </article>
      <!-- GALLERY-->
      <section class="gallery">
        <div class="box big">
          <img class="gallery-desktop" src="images/desktop_images/detail_view_1.png" alt="">
          <img class="gallery-mobile" src="images/mobile_images/mobile_detail_view_1.png" alt="">
        </div>
        <div class="box">
          <img class="gallery-desktop" src="images/desktop_images/detail_view_2.png" alt="">
          <img class="gallery-mobile" src="images/mobile_images/mobile_detail_view_2.png" alt="">
        </div>
        <div class="box">
          <img class="gallery-desktop" src="images/desktop_images/detail_view_3.png" alt="">
          <img class="gallery-mobile" src="images/mobile_images/mobile_detail_view_3.png" alt="">
        </div>
        <div class="enlarge-arrow-one">
          <img src="images/enlarge.svg" alt="">
        </div>
        <div class="enlarge-arrow-two">
          <img src="images/enlarge.svg" alt="">
        </div>
      </section>
      <!--END GALLERY-->
      <article class="content">
         <div class="title">
            <h5><?= $lang['01'][2][0] ?></h5>
            <hr />
         </div>
         <div class="article left">
            <p><?= $lang['01'][2][1] ?><br /><?= $lang['01'][2][2] ?></p>
            <p><?= $lang['01'][2][3] ?><br /><?= $lang['01'][2][4] ?></p>
         </div>
      </article>
    </section>

    <!--GALLERY SLIDER-->
  <section class="gallery-slider">
    <div class="slider-desktop">
      <div><img src="images/desktop_images/interior_view_1.png" alt=""></div>
      <div><img src="images/desktop_images/interior_view_2.png" alt=""></div>
      <div><img src="images/desktop_images/interior_view_3.png" alt=""></div>
      <div><img src="images/desktop_images/interior_view_4.png" alt=""></div>
    </div>
    <div class="slider-mobile">
      <div><img src="images/mobile_images/mobile_interior_slider_1.png" alt=""></div>
      <div><img src="images/mobile_images/mobile_interior_slider_2.png" alt=""></div>
      <div><img src="images/mobile_images/mobile_interior_slider_3.png" alt=""></div>
      <div><img src="images/mobile_images/mobile_interior_slider_4.png" alt=""></div>
    </div>
  </section>
    <!--END GALLERY SLIDER--->

    <!-- END 01 NEW ERA DESIGN -->


  <!-- TRANSLATE -->
  <!-- <form class="language">
    <input type="submit" name="language" value="Sv">
    <input type="submit" name="language" value="En">
  </form> -->
  <!-- END TRANSLATE -->

  <!-- 02 ENERGY -->
  <section class="section two">
    <article class="bgpic">
      <div class="header">
        <h3>02</h3>
        <h5><?= $lang['02'][0][0] ?></h5>
      </div>
      <div class="article two">
        <h5><?= $lang['02'][0][1] ?></h5>
        <p><?= $lang['02'][0][2] ?></p>
      </div>
   </section>
   <!--END SECOND GALLERY-->
   <!-- END 01 NEW ERA DESIGN -->
   <!-- TRANSLATE -->
   <!-- <form class="language">
      <input type="submit" name="language" value="Sv">
      <input type="submit" name="language" value="En">
      </form> -->
   <!-- END TRANSLATE -->
   <!-- 02 ENERGY -->
   <section class="section two">
      <article class="bgpic">
         <div class="header">
            <h3>02</h3>
            <h5><?= $lang['02'][0][0] ?></h5>
         </div>
         <div class="article two">
            <h5><?= $lang['02'][0][1] ?></h5>
            <p><?= $lang['02'][0][2] ?></p>
         </div>
      </article>
      <section class="content">
         <article class="title right">
            <h5><?= $lang['02'][0][3] ?></h5>
            <hr />
         </article>
         <article class="article right">
            <p><?= $lang['02'][0][4] ?></p>
         </article>
         <article class="picture right">
            <img class="desktop" src="images/desktop_images/energy_image_1.png" alt="">
            <img class="mobile" src="images/mobile_images/mobile_02_energy_image_1.png" alt="">
         </article>
      </section>
      <section class="content">
         <article class="title left">
            <h5><?= $lang['02'][0][5] ?></h5>
            <hr />
         </article>
         <article class="article left">
            <p><?= $lang['02'][0][6] ?></p>
         </article>
         <article class="picture left">
            <img class="desktop"src="images/desktop_images/energy_image_2.png" alt="">
            <img class="mobile" src="images/mobile_images/mobile_02_energy_image_2.png" alt="">
         </article>
      </section>
   </section>
   <!-- END 02 ENERGY -->
   <!-- 03 FLY -->
   <section class="section three">
      <article class="fly">
         <article class="header">
            <h3>03</h3>
            <h5><?= $lang['03'][0] ?></h5>
         </article>
      </article>
     <section class="content white">
         <article class="title">
            <h5><?= $lang['03'][1] ?></h5>
            <hr />
         </article>
         <article class="article left">
            <p><?= $lang['03'][2] ?></p>
         </article>
         <article class="picture">
            <img class="desktop"src="images/desktop_images/avaite_image_1.png" alt="">
            <img class="mobile" src="images/mobile_images/mobile_03_aviate_image_1.png" alt="">
         </article>
         <article class="title">
            <h5><?= $lang['03'][3] ?></h5>
            <hr />
         </article>
         <article class="article left">
            <p><?= $lang['03'][4] ?></p>
         </article>
         <article class="picture right">
            <img class="desktop" src="./images/desktop_images/aviate_image_2.png" alt="">
            <img class="mobile" src="./images/mobile_images/mobile_03_aviate_image_2.png" alt="">
         </article>
      </section>
   </section>
   <!-- END 03 FLY -->

  <!-- FOOTER -->
  <footer class="footer-of-page">
    <div class="footer-row-one">
    </div>
    <div class="footer-row-two">
      <div class="stroke-left">
        <div class="line"></div>
      </div>
      <div class="center-logo">
        <img src="images/FS-logo.png" alt="">
      </div>
      <div class="stroke-right">
        <div class="line"></div>
      </div>
    </div>
    <div class="footer-row-three">
      <div class="footer-left">
      <form class="footer-form" action="index.php" method="post">
        <p>Receive the Latest FS News</p>
        <input type="email" name="" placeholder="E-mail" id="Email" />
        <br><br>
        <input type="submit" name="" value="SUBSCRIBE">
      </form>
      </div>
      <div class="footer-center">
        <a href="">+46 131 800 00</a>
        <br>
        <a href="">info@fsproject.com</a>
        <br>
        <div class="social-media">
          <a href="https://www.facebook.com/"><img src="images/facebook-logo.svg" alt=""></a>
          <a href="https://www.instagram.com/?hl=sv"><img src="images/instagram-logo.svg" alt=""></a>
          <a href="https://twitter.com/"><img src="images/twitter-logo-01.svg" alt=""></a>
          <br>
          <a href="" class="not-active"><img class="saab-logo-mobile" src="images/saab-logo.png" alt=""></a>

        </div>
      </div>
      <div class="footer-right">
        <img src="images/saab-logo.png" alt="">
      </div>
    </div>  
   </footer>
   <?php
      require __DIR__.'/footer.php';
    ?>
