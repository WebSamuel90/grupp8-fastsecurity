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
    <a href="#" download="broschyr-fastsecurity.pdf"><img src="images/Download-button-01.svg" class="download-button"/></a>
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
     <img src="images/icons_menu_arrow.svg" alt="Fast Security Logo" width="35px;">
   </div>
   <div class="mobile-navbar-container">
     <div class="mobile-navbar-left">
       <a href="#">HOME</a>
       <a href="#">COMPANY</a>
       <hr class="mobile-navbar-left-line">
          <div class="mobile-navbar-left-style2">
            <a href="#">PHILOSOPHY</a>
            <a href="#">LEADERSHIP</a>
          </div>
       <a href="#">STORIES</a>
       <a href="#">RESERVE</a>

     </div>
     <div class="mobile-navbar-right">
       <a href="#">VESSEL</a>
       <hr class="mobile-navbar-right-line">
          <div class="mobile-navbar-right-style2">
            <a href="#">GALLERY</a>
            <a href="#">HOOVER</a>
            <a href="#">ENERGY</a>
            <a href="#">FUEL</a>
            <a href="#">DETAILS</a>
          </div>
          <div class="mobile-language-selector">
            <form class="language">
              <input type="submit" name="language" value="Sv">
              <input type="submit" name="language" value="En">
            </form>
          </div>
     </div>
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
       <input type="submit" name="language" value="Sv">
       <input type="submit" name="language" value="En">
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
          <img src="images/Preview_19.png" />
        </footer>
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
      <div class="button details">
        <input type="submit" value="<?= $lang['details-button']; ?>" />
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
          <img src="images/Render_05.jpg" alt="">
        </div>
        <div class="box">
          <img  src="images/Render_06.jpg" alt="">
        </div>
        <div class="box">
          <img src="images/Render_08.jpg" alt="">
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

    <!-- SECOND GALLERY-->
  <section class="second-gallery">
    <div class="box big">
      <img src="images/Render_05.jpg" alt="">
    </div>
    <div class="box">
      <img  src="images/Render_06.jpg" alt="">
    </div>
    <div class="box">
      <img src="images/Render_08.jpg" alt="">
    </div>
  </section>
    <!--END SECOND GALLERY-->

    <!-- END 01 NEW ERA DESIGN -->


  <!-- TRANSLATE -->
  <form class="language">
    <input type="submit" name="language" value="Sv">
    <input type="submit" name="language" value="En">
  </form>
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
          <img src="images/Preview_09.jpg" alt="">
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
          <img src="images/Preview_12.jpg" alt="">
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
        <img src="images/Preview_06.jpg" alt="">
      </article>
      <article class="title">
        <h5><?= $lang['03'][3] ?></h5>
        <hr />
      </article>
      <article class="article left">
        <p><?= $lang['03'][4] ?></p>
      </article>
      <article class="picture right">
        <img src="images/Preview_05.jpg" alt="">
      </article>
    </section>
  </section>
  <!-- END 03 FLY -->

  <!-- FOOTER -->
  <footer class="footer-of-page">
    <div class="footer-row-one">
      <div class="whiteLine"></div>
    </div>
    <div class="footer-row-two">
      <div class="stroke-left">
        <div class="line"></div>
      </div>
      <div class="center-logo">
        <img src="images/Emanuel_Mardsjo_WU_Logo_design_BT.png" alt="">
        <p>FAST SECURITY</p>
      </div>
      <div class="stroke-right">
        <div class="line"></div>
      </div>
    </div>
    <div class="footer-row-three">
      <div class="footer-left">
      <form class="footer-form" action="index.html" method="post">
        <p>Receive the Latest FS News</p>
        <input type="email" name="" placeholder="Email" id="Email" />
        <br><br>
        <button type="submit" name="button">SUBSCRIBE</button>
      </form>
      </div>
      <div class="footer-center">
        <a href="">+46 131 800 00</a>
        <br>
        <a href="">info@fsproject.com</a>
        <br>
        <div class="social-media">
          <img src="images/facebook-logo.svg" alt="">
          <img src="images/instagram-logo.svg" alt="">
          <img src="images/twitter-logo.svg" alt="">
        </div>
      </div>
      <div class="footer-right">
        <p>(SAAB)</p>
      </div>
    </div>
  </footer>
 <?php
 require __DIR__.'/footer.php';
  ?>
