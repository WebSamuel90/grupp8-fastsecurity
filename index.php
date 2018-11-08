<?php
require __DIR__.'/header.php';
 ?>

 <body>
     <!--TOGGLE EMAILFORM-->
     <sidebar class="sidebar-signup">
       <div class="toggle-signup"><i class="fas fa-plus"></i><i class="far fa-envelope"></i></div>
       <div class="scroll-signup">
       <h2>Sign up for newsletter</h2>
       <form>
         <label for="Name">Name:</label>
         <input type="text" name="" placeholder="Name" id="Name" />
         <label for="Email">Email:</label>
         <input type="email" name="" placeholder="Email" id="Email" />
         <label for="Message">Message:</label>
         <textarea name="name" placeholder="Message (optional)" id="Message"></textarea>
         <input type="submit" value="Send" />
       </form>
     </div>
     </sidebar>
   <!--END TOGGLE EMAILFORM-->
   <!-- PROGRESSBAR -->
   <sidebar class="progressbar-side">
     <progress id="progressbar" value="0" max="100"></progress>
   </sidebar>
   <!-- END PROGRESSBAR -->

   <!--HERO-->
   <section class="hero">
     <!--NAVBAR-->
     <div id="navbar">
       <a href="#home">Home</a>
       <div class="downArrow">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
         <span></span>
       </div>
       <a href="#contact">Contact</a>
     </div>
    <!--/END NAVBAR-->
  </section>
  <!--/END HERO-->
   
  <!-- SECOND FRAME -->
  <section class="second-frame">
    <div class="scd-text">
      
    </div>
  </section>
  <!-- END SECOND FRAME -->
   
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
