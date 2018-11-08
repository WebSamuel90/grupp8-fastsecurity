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

   <!--HEADER-->
   <header id="header">
     <a id="logo" href="#">logo</a>
     <nav><a id="menu-icon">&#8801;</a></nav>
   </header>
   <!--/END HEADER-->

   <!--HERO-->
   <section class="hero">
    <header id="header">
      <a id="logo" href="#">logo</a>
      <nav><a id="menu-icon">&#8801;</a></nav>
    </header>
    <header class="hero-header">
      <h1 class="hero-title">The Title of this Hero Module</h1>
    </header>
    <footer class="hero-footer">
      <a class="button button-primary" href="#">button one</a>
      <a class="button" href="#">button two</a>
    </footer>
  </section>
  <!--/END HERO-->

 <?php
 require __DIR__.'/footer.php';
  ?>
