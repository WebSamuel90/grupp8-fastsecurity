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
    <img src="images/Download-button-01.svg" class="download-button"/>
   </sidebar>
 </div>

 <!--END DETIALS-->

   <!-- PROGRESSBAR -->
   <sidebar class="progressbar-side">
     <progress class="progressbar" value="0" max="100"></progress>
   </sidebar>
   <!-- END PROGRESSBAR -->


   <!--DESKTOP NAVBAR-->
   <div class="logo">
     <img src="images/Emanuel_Mardsjo_WU_Logo_design_WT.png" alt="Fast Security Logo" width="95px;">
   </div>
   <div class="desktop-navbar-container">
     <!--img src="" alt="TEST"-->
     <div class="desktop-navbar">
       <a href="#">HOME</a>
       <a href="#">COMPANY</a>
       <a href="#">STORIES</a>
       <a href="#">RESERVE</a>
       <a href="#">AEROMOTIVE</a>
     </div>
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
      <article class="article">
        <h5><?= $lang['01'][0][0] ?></h5>
        <p><?= $lang['01'][0][1] ?></p>
      </article>
      <article class="header">
        <h3>01</h3>
        <h5><?= $lang['01'][0][2] ?></h5>
      </article>
      <article class="footer">
        <img src="images/Preview_19.png" />
      </article>
      <article class="footer-info">
        <div class="over">
          <p><?= $lang['01'][0][3] ?></p>
          <h6>900</h6>
          <p><?= $lang['01'][0][4] ?></p>
        </div>
        <div class="under">
          <p>under</p>
          <h6>2,5</h6>
          <p>SEC/O-60 MPH</p>
        </div>
        <div class="over">
          <p>over</p>
          <h6>200</h6>
          <p>MPH</p>
        </div>
      </article>
      <article class="button details">
        <input type="submit" value="<?= $lang['details-button']; ?>" />
      </article>

      <section class="content">
        <article class="title right">
          <h5><?= $lang['01'][1][0] ?></h5>
          <hr />
        </article>
        <article class="article right">
          <p><?= $lang['01'][1][1] ?></p>
        </article>
      </section>

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

      <section class="content">
        <article class="title">
          <h5><?= $lang['01'][2][0] ?></h5>
          <hr />
        </article>
        <article class="article left">
          <p><?= $lang['01'][2][1] ?></p>
        </article>
        <article class="picture">
          <img src="images/Preview_16.jpg" alt="">
        </article>
      </section>
    </section>

    <!-- END 01 NEW ERA DESIGN -->


  <!-- TRANSLATE -->
  <form class="language">
    <input type="submit" name="language" value="Sv">
    <input type="submit" name="language" value="En">
  </form>
  <!-- END TRANSLATE -->

  <!-- 02 ENERGY -->
  <section class="section two">
    <article class="header">
      <h3>02</h3>
      <h5><?= $lang['02'][0][0] ?></h5>
    </article>
    <article class="article">
      <h5><?= $lang['02'][0][1] ?></h5>
      <p><?= $lang['02'][0][2] ?></p>
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
        <article class="title">
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
    <h5>Receive the Latest FS News</h5>
    <form class="">
      <input type="email" name="" placeholder="Email" id="Email" />
      <input type="submit" value="subscribe"/>
    </form>
  </footer>
 <?php
 require __DIR__.'/footer.php';
  ?>
