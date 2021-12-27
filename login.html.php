<?php
$pageTitle="Login";
ob_start() ?>

 <h3>Login</h3>

 <form method='post' onsubmit="validateForm();" id = "form">
   <div class="login">
    <label for="username">Username:</label>
    <input name="username" type="text"  class="form-control width" id="username" placeholder="Username"><br>
    <label for="pass1">Password:</label>
    <input name="pass1" type="password"  class="form-control width" id="pass1" placeholder="Password"><br>
    <input type="checkbox" id="myCheck" name="remember"> Stay logged in<br><br>
  <button type="submit" name="loginbutton" class="btn btn-primary">Login</button><br><br>
  <a href='index.php?page=forgotpassword'>Forgot password</a><br><br>
  <h6>Don't have an account?</h6><a href='index.php?page=register'>Register here</a>
</div>
 </form>


 <script>

    function validateForm(){
      var a = document.forms["form"]["username"].value;
      var b= = document.forms["form"]["pass1"].value;

      if(a=="" && b==""){
        event.preventDefault();
        document.getElementById("username").style.backgroundColor = "#3bebff";
        document.getElementById("pass1").style.backgroundColor = "#3bebff";
        return false;
      }
      if(a==""){
        event.preventDefault();
        document.getElementById("username").style.backgroundColor = "#3bebff";
        return false;
      }else if(b==""){
        event.preventDefault();
        document.getElementById("pass1").style.backgroundColor = "#3bebff";
        return false;
      }else{
        document.getElementById("username").style.backgroundColor = "#ffffff";
        document.getElementById("pass1").style.backgroundColor = "#ffffff";
      }
      return true;
    }
 </script>

 <?php
         Login();
 ?>

<?php
$content=ob_get_clean();
require "templates/layout.html.php";

?>
