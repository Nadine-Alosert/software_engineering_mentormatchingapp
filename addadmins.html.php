<?php
$pageTitle="Add admins";
  ob_start() ?>


<h1>Create a new admin</h1>
    <form method='post'>
      <div class="form-group">
      <label for="fname">First name:</label>
       <input name="fname" type="text"  class="form-control width" id="fname" placeholder="First name"><br>
       <label for="lname">Last name:</label>
       <input name="lname" type="text"  class="form-control width" id="lname" placeholder="Last name"><br>
       <label for="email">Email:</label>
       <input name="email" type="text"  class="form-control width" id="email" placeholder="Email"><br>
       <label for="username">Username:</label>
       <input name="username" type="text"  class="form-control width" id="username" placeholder="Username"><br>
       <label for="pass1">Password:</label>
       <input name="pass1" type="password"  class="form-control width" id="pass1" placeholder="Password"><br>
       <label for="pass2">Repeat password:</label>
       <input name="pass2" type="password"  class="form-control width" id="pass2" placeholder="Repeat password">
      <br>
     </div><br>
     <button type="submit" name="registerbuttonadmin" class="btn btn-primary">Create an admin</button>
     <?php
      RegisterAdmin();
       ?>
    <?php

$content = ob_get_clean();

include "templates/layout.html.php";
?>
