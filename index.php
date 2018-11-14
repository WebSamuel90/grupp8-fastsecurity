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
   <div class="toggle-signup"><img src="images/icons_plus.svg" /><img src="images/icons_mail.svg"/></div>
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
   <div id="navbar">
     <a href="#home">Home</a>
     <a href="#contact">Contact</a>
   </div>
   <!--/END NAVBAR-->

   <!--HERO-->
   <section class="hero">

     <!-- ROTATING TEXT -->
     <h2 class="sentence">Ex
         <div class="slidingVertical">
         <span>pedience defined</span>
         <span>pand your horizons</span>
         <span>perience aeromotive perfection</span>
       </div>
     </h2>
     <!-- END ROTATING TEXT -->

   </section>
  <!--/END HERO-->

  <!-- SECTION ONE -->
  <section class="section-one">
    <img src="images/Render_10.jpg" />
    <p><?= $lang['sectionOne01']; ?></p>
    <p><?= $lang['sectionOne02']; ?></p>
  </section>
  <!-- END SECTION ONE -->

  <!-- TRANSLATE -->
  <form class="language">
    <input type="submit" name="language" value="Sv">
    <input type="submit" name="language" value="En">
  </form>
  <!-- END TRANSLATE -->

  <!-- GALLERY-->
  <section class="gallery">
    <div class="big picture-one"></div>
    <div class="under">
      <div class="small picture-two"></div>
      <div class="small picture-three"></div>
    </div>
  </section>
  <!--END GALLERY-->


  <!-- BOTTOM CARDS -->
  <section class="cards">
    <div class="card rain">
      <i class="fas fa-cloud-rain"></i>
      <h2>RAIN</h2>
      <p>Many Pepole still think Saab makes cars, and that is correct. We are
      on the go for the future. Saab is very much alive and well.</p>
    </div>
    <div class="card start">
      <i class="far fa-flag"></i>
      <h2>START</h2>
      <p>Many Pepole still think Saab makes cars, and that is correct. We are
      on the go for the future. Saab is very much alive and well.</p>
    </div>
    <div class="card on">
      <i class="fas fa-toggle-on"></i>
      <h2>ON</h2>
      <p>Many Pepole still think Saab makes cars, and that is correct. We are
      on the go for the future. Saab is very much alive and well.</p>
    </div>
  </section>

 <?php
 require __DIR__.'/footer.php';
  ?>
