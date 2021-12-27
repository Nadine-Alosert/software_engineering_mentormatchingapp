<?php
$pageTitle="Register";
  ob_start() ?>

  <h1>Mentee registration</h1>
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
       <input name="pass2" type="password"  class="form-control width" id="pass2" placeholder="Repeat password"><br>
       <label for="location">Location:</label>
       <input name="location" type="text"  class="form-control width" id="location" placeholder="Location"><br>
       <label for="subject">Subject:</label>
       <input name="subject" type="text"  class="form-control width" id="subject" placeholder="Subject"><br>
      <br>
      <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
      <br>
    <input type="checkbox" id="myCheck" name="test" required> I agree to Mentoring Privacy Policy & Terms

     </div>
     <button type="submit" name="registerbuttonmentee" class="btn btn-primary" onclick="myFunction()">Create Account</button>
     <br><br><h6>Already have an account?</h6><a href='index.php?page=login'>Login here</a>
     <br><a href='index.php?page=registermentor'>Become a mentor</a>
    </form>
    <p id="demo"></p>

    


<script>
function myFunction() {
  var x = document.getElementById("myCheck").required;
  document.getElementById("demo").innerHTML = x;
}
</script>

    <?php
      RegisterMentee();
       ?>

  <?php

  $content = ob_get_clean();

  include "layout.html.php";
  ?>
