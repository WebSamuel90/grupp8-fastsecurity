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

   <!-- PROGRESSBAR -->
   <sidebar class="progressbar-side">
     <progress class="progressbar" value="0" max="100"></progress>
   </sidebar>
   <!-- END PROGRESSBAR -->

   <!--NAVBAR-->
   <div class="stickyMenuTextBar">
     <p class="menuText">Menu</p>
   </div>
   <!--NAV ICON-->
   <div class="stickyArrowBar">
     <p><i class="down arrow"></i></p>
   </div>
   <!--END NAV ICON-->

   <!--MENU-->
   <div class="menuContainer">
     <div class="menu">
       <div class="homeDiv">
         <ul>
           <li><b>HOME</b></li>
           <li><b>COMPANY</b></li>
           <li></li>
         </ul>
       </div>
       <div class="vesselDiv">
         <li></li>
         <li></li>
         <li></li>
       </div>
     </div>
   </div>
    <!--END MENU-->
    <!--NAVBAR-->
  <div class="navbarContainer">
     <div class="stickyMenuTextBar">
      <p class="menuText">Menu</p>
     </div>
     <!--NAV ICON-->
     <div class="stickyArrowBar">
       <p><i class="down arrow"></i></p>
     </div>
   </div>
   <!--END NAV ICON-->
   <!--/END NAVBAR-->

   <!--HERO-->
   <section class="hero">

     <!-- ROTATING TEXT -->
     <h2 class="sentence">Ex
         <div class="sliding-vertical">
         <span>pedience defined</span>
         <span>pand your horizons</span>
         <span>perience aeromotive perfection</span>
       </div>
     </h2>
     <!-- END ROTATING TEXT -->

   </section>

  <!--/END HERO-->


    <!-- 01 NEW ERA DESIGN-->
    <section class="section">
      <article class="article">
        <h5>An epoch in the making</h5>
        <p>Many people still think Saab makes cars, and that is correct.
          We are on the go for the future. Saab is very much alive and well,
          as one of the world’s most innovative companies. And now we are
          proud to present our car for the future: FastSecurity, FS.</p>
      </article>
      <article class="header">
        <h3>01</h3>
        <h5>new era design</h5>
      </article>
      <article class="footer">
        <img src="images/Preview_19.png" />
      </article>
      <article class="footer-info">
        <div class="over">
          <p>over</p>
          <h6>900</h6>
          <p>Mile range (epa)</p>
        </div>
        <div class="under">
          <p>over</p>
          <h6>900</h6>
          <p>Mile range (epa)</p>
        </div>
        <div class="over">
          <p>over</p>
          <h6>900</h6>
          <p>Mile range (epa)</p>
        </div>
      </article>
      <article class="button">
        <input type="submit" value="Details" />
      </article>

      <section class="content">
        <article class="header">
          <h5>Aeromotive Luxury</h5>
          <hr />
        </article>
        <article class="article">
          <p>A stunning view deserves sublime first class comfort.
            The interior’s masterpiece-like proportions of the FS 0.1
            are sculpted to deliver expansive convenience to driver and
            passenger alike. </p>
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
          <article class="header">
            <h5>Commune. Drive</h5>
            <hr />
          </article>
          <article class="article">
            <p>Designed for you, is the on-board assistant
              Artemys that not only tracks personal usage
              patterns and behaviors but naturally communicates
              your everyday digital life. Have a talk and the
              smart AI will soon adjust, queuing the right track,
              setting up the right temperature or
              shifting color scheme.</p>
            </article>
          <article class="picture">
            <img src="images/Preview_16.jpg" alt="">
          </article>
        </section>

    </section>

    <!-- END 01 NEW ERA DESIGN -->

  <!-- SECTION ONE -->
  <!-- <section class="section-one">
    <img src="images/Render_10.jpg" />
    <p><?= $lang['sectionOne01']; ?></p>
    <p><?= $lang['sectionOne02']; ?></p>
  </section> -->
  <!-- END SECTION ONE -->

  <!-- TRANSLATE -->
  <form class="language">
    <input type="submit" name="language" value="Sv">
    <input type="submit" name="language" value="En">
  </form>
  <!-- END TRANSLATE -->

  <!-- 02 ENERGY -->
  <section class="section">
    <article class="header">
      <h3>02</h3>
      <h5>energy</h5>
    </article>
    <article class="article">
      <h5>Engines powered by cellava</h5>
      <p>Fast Security’s proprietary fuel changes
        performance standards by means unmeasurable.
        The pure bio-mass enforces an unparalleled
        engine capacity with little environmental
        strain.</p>
    </article>

    <section class="content">
      <article class="header">
        <h5>Cellava Unleashed</h5>
        <hr />
      </article>
      <article class="article">
        <p>FS 0.1’s top-class engines house unrivaled energy
          capacity. The integrated core reactor, developed
          entirely in-house, fuse the very elements of existence
          using Cellava — a supreme source of energy. To put it
          short: a system that turns impossibilities into possibilities.</p>
        </article>
        <article class="picture">
          <img src="images/Preview_09.jpg" alt="">
        </article>
      </section>

      <section class="content">
        <article class="header">
          <h5>Fly far, far away</h5>
          <hr />
        </article>
        <article class="article">
          <p>The next level engine technology developed for the FS 0.1 enables
            1000 miles of flying range. Take wing and go wherever the winds may
            guide you — running dry on gas is a vague prospect with the FS 0.1.</p>
        </article>
        <article class="picture">
          <img src="images/Preview_12.jpg" alt="">
        </article>
      </section>
  </section>
  <!-- END 02 ENERGY -->

  <!-- 03 FLY -->
  <section class="section">
    <article class="fly">
      <article class="header">
        <h3>03</h3>
        <h5>fly</h5>
        </article>
    </article>
    <section class="content white">
      <article class="header">
        <h5>Challenge the Gales</h5>
        <hr />
      </article>
      <article class="article">
          <p>Hugging the wind currents is not a risk thanks
            to FS 0.1’s perfectly calibrated air glide turbine.
            Swiftly reaching top speeds, the FS 0.1’s advanced
            accelerator appendage, meticulous wind sheering dimensions,
            lightweight composition and gravity defying air pressure
            technology deliver accurate steering and a smooth ride.</p>
      </article>
      <article class="picture">
        <img src="images/Preview_06.jpg" alt="">
      </article>
    </section>
    <section class="content gray">
      <article class="header">
        <h5>Guardian Angel</h5>
        <hr />
      </article>
      <article class="article">
        <p>Artemys, the seamlessly integrated AI to FS
          0.1’s security system, keeps you safe and acts
          like a real-time guardian. The practically
          neuron-like AI connection comes with all round
          vision-tracking, GPS monitoring and  sensor
          based safety-measures. Artemys provides comfort
          on levels way beyond the tangible.</p>
      </article>
      <article class="picture">
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
