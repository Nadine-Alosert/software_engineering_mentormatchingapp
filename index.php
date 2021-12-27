<?php
//front controller
session_start();
include "functions.php";
AutoLogin();
if (isset($_GET['page'])){
  if ($_GET['page'] == "registermentee"){
    include "templates/registermentee.html.php";
  }
    else if($_GET['page'] == "registermentor"){
    include "templates/registermentor.html.php";
  }
  else if($_GET['page'] == "register"){
  include "templates/register.html.php";
}
    else if ($_GET['page']=="login"){
    include "templates/login.html.php";
  }
  else if ($_GET['page']=="home"){
  include "templates/home.html.php";
}
else if ($_GET['page']=="admin"){
  include "templates/admin.html.php";
}
else if ($_GET['page']=="menteeprofile"){
include "templates/menteeprofile.html.php";
}
else if ($_GET['page']=="chatee"){
  include "templates/chatee.html.php";
}
else if ($_GET['page']=="booking"){
  include "templates/booking.html.php";
}
else if ($_GET['page']=="search"){
  include "templates/search.html.php";
}
else if ($_GET['page']=="reportuser"){
  include "templates/reportuser.html.php";
}
else if ($_GET['page']=="mentee"){
  include "templates/mentee.html.php";
}
else if ($_GET['page']=="showadmins"){
  include "templates/showadmins.html.php";
}
else if ($_GET['page']=="mentorprofile"){
  include "templates/mentorprofile.html.php";
}
else if ($_GET['page']=="forgotpassword"){
  include "templates/forgotpassword.html.php";
}
else if ($_GET['page']=="profilesettings"){
  include "templates/profilesettings.html.php";
}
  else if ($_GET['page']=="login" && !(isset($_SESSION['username'])) && !(isset($_COOKIE['cookiesss']))){
    include "templates/login.html.php";
  }
  else if ($_GET['page']=="logout" && (isset($_SESSION['username']))){
    Logout();
  }
  else if ($_GET['page']=="addadmin"){
    include "templates/addadmins.html.php";
  }
  else if ($_GET['page']=="reports"){
    include "templates/reports.html.php";
  }
  else if ($_GET['page']=="mentorrequests"){
    include "templates/mentorrequests.html.php";
  }
  else if ($_GET['page']=="searchresults"){
    include "templates/searchresults.html.php";
  }

  else {
    include "templates/error.html.php";
  }
  }
  else {
    include "templates/home.html.php";
  }
  ?>
