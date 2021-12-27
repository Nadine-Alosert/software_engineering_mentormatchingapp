<!DOCTYPE html>
<html lang="sl">
  <head>
      <meta charset="utf-8">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="templates/styles/reset.css">
    <link rel="stylesheet" href="templates/styles/main.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
  </head>
  <body>
    <!--Navbar-->
<header>
	<div class="header1">
  <nav class="navbar navbar-expand-lg bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item navbar-brand"><a class="nav-link"  style='color:white' href="index.php?page=home">Mentor Matching</a></li>
        </li>
          <?php
                if (isset($_SESSION['username']) && $_SESSION['accounttype'] == '2'){
                  echo "<li style='color:white' class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=menteeprofile'>Profile</a>";
                  echo "</li>";
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=chatee'>Chat</a>";
                  echo "</li>";
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=profilesettings'>Settings</a>";
                  echo "</li>"; 
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=reportuser'>Report</a>";
                  echo "</li>";
          }else if (isset($_SESSION['username']) && $_SESSION['accounttype'] == '1'){
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=mentorprofile'>Profile</a>";
                  echo "</li>";
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=chatee'>Chat</a>";
                  echo "</li>";
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=profilesettings'>Settings</a>";
                  echo "</li>";  
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=reportuser'>Report</a>";
                  echo "</li>";
          }else if (isset($_SESSION['username']) && $_SESSION['accounttype'] == '0'){
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=admin'>Admin</a>";
                  echo "</li>";
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=reports'>Reports</a>";
                  echo "</li>";
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=showadmins'>Show admins</a>";
                  echo "</li>";
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link'  style='color:white' href='index.php?page=mentorrequests'>Mentor requests</a>";
                  echo "</li>";
          }
          ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  style='color:white' href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php
            if (isset($_SESSION['username'])){
              echo "Welcome ";
              echo $_SESSION['username'];
            } else {
              echo "<i class='fa fa-user'></i>";
            }
             ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
            if (isset($_SESSION['username'])){
              echo "<a class='dropdown-item' href='index.php?page=logout'>Logout</a>";
            } else {
              echo "<a class='dropdown-item'  href='index.php?page=register'>Register</a>";
              echo "<a class='dropdown-item'  href='index.php?page=login'>Login</a>";
            }
             ?>
        </li>
      </ul>
    </div>
    <form class="form-inline my-2 my-lg-0" action="" method="get">
      <a href="index.php?page=search" class="btn btn-primary"name="submit">Search</a>
    </form>
  </nav>
</div>
</header>

    <div class="container content">
        <br>
      <?php
      echo $content;
       ?>
       <br>
    </div>

<!-- Contact -->
<div class="Home-Contact container-fluid row text-white bg-primary" style="width: 100%, bottom: 0px;">
        <div class="col-sm ml-5 p-5">
            <h4>Contact Us</h4>
            London <br>
            020 3056 8240 <br>
            Cottons Centre, Cottons Lane <br>
            London, SE1 2QG <br><br>
            <a href="#" class="fa fa-facebook mr-2"></a>
            <a href="#" class="fa fa-twitter mr-2"></a>
            <a href="#" class="fa fa-google mr-2"></a>
            <a href="#" class="fa fa-linkedin mr-2"></a>
            <a href="#" class="fa fa-youtube mr-2"></a>
            <a href="#" class="fa fa-instagram mr-2"></a>
        </div>
        <div class="col-sm p-5 font-weight-bold">
            <div class="row">
                <div class="col">
                    <li class="p-2"><a href="#">Press</a></li>
                    <li class="p-2"><a href="#">Cookie policy</a></li>
                    <li class="p-2"><a href="#">Accessibility</a></li>
                    <li class="p-2"><a href="#">Privacy</a></li>
                </div>
                <div class="col"> 
                    <li class="p-2"><a href="#">Terms & Conditions</a></li>
                    <li class="p-2"><a href="#">Modern Slavery Act</a></li>
                    <li class="p-2"><a href="#">FAQs</a></li>
                    <li class="p-2"><a href="#">Sitemap</a></li>
                </div>
            </div>
        </div>
    </div>
    <!-- END Contact -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
  </body>
</html>
