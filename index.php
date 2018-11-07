<?php
require __DIR__.'/header.php';
 ?>
   <main class="wrapper">
     <sidebar class="sidebar-signup">
       <div class="toggle-signup"></div>
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
     </sidebar>
 </main>
 <?php
 require __DIR__.'/footer.php';
  ?>
