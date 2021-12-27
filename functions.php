<?php

include "model.php";

function RegisterMentee(){
  if (isset($_POST['registerbuttonmentee'])){
    $username = strip_tags(trim($_POST['username']));
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];
   $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $location = $_POST['location'];

    if($username  == "" || $password1 == "" || $password2 == ""|| $email == "" || $fname == ""|| $lname == "" || $subject == "" || $location == ""){
      echo '<script language="javascript">';
      echo 'alert("All fields are required.")';
      echo '</script>';
    } else {
      if ($password1 != $password2){
        echo '<script language="javascript">';
        echo 'alert("Passwords do not match")';
        echo '</script>';      }else
      if (strlen($password1)<5) {

        echo '<script language="javascript">';
        echo 'alert("The password is too short. It has to be minimum 5 characters long.")';
        echo '</script>';

      } else {
        //vpisemo v bazo
        //1. povezemo se z
          $link=open_database_connection(); //povežemo se z bazo
          //2. kodiramo geslo
          $encpass = sha1($password1); //zakodiramo geslo
          //3. vstavimo podatke v tabelo
          $sql="INSERT INTO users (fname, lname, email, username, password, subject, location, accounttype) VALUES ('$fname','$lname', '$email','$username', '$encpass', '$subject', '$location',2)";
      		if (!mysqli_query($link,$sql))
      		{
      				echo("Error description: " . mysqli_error($link));
      		} else {
            echo '<script language="javascript">';
            echo 'alert("Registration successful. You will be redirected to the login page.")';
            echo '</script>';
            header('Location: index.php?page=login');
      		}
          //4. zapremo povezavo z bazo
          close_database_connection($link); //zapremo povezavo z bazo
      }

    }

  }
}

function RegisterMentor(){
  if (isset($_POST['registerbuttonmentor'])){
    $username = strip_tags(trim($_POST['username']));
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];
   $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $location = $_POST['location'];

    if($username  == "" || $password1 == "" || $password2 == ""|| $email == "" || $fname == ""|| $lname == "" || $subject == "" || $location == ""){
      echo '<script language="javascript">';
      echo 'alert("All fields are required.")';
      echo '</script>';
    } else {
      if ($password1 != $password2){
        echo '<script language="javascript">';
        echo 'alert("Passwords do not match")';
        echo '</script>';      }else
      if (strlen($password1)<5) {

        echo '<script language="javascript">';
        echo 'alert("The password is too short. It has to be minimum 5 characters long.")';
        echo '</script>';

      } else {
        //vpisemo v bazo
        //1. povezemo se z
          $link=open_database_connection(); //povežemo se z bazo
          //2. kodiramo geslo
          $encpass = sha1($password1); //zakodiramo geslo
          //3. vstavimo podatke v tabelo
          $sql="INSERT INTO users (fname, lname, email, username, password, subject, location, accounttype) VALUES ('$fname','$lname', '$email','$username', '$encpass', '$subject', '$location', 1)";
      		if (!mysqli_query($link,$sql))
      		{
      				echo("Error description: " . mysqli_error($link));
      		} else {
            echo '<script language="javascript">';
            echo 'alert("Registration successful. You will be redirected to the login page.")';
            echo '</script>';
            header('Location: index.php?page=login');
      		}
          //4. zapremo povezavo z bazo
          close_database_connection($link); //zapremo povezavo z bazo
      }

    }

  }
}

function ShowReports(){
  $link=open_database_connection();
  $sql = "SELECT * FROM reports ORDER BY id DESC";

    $result=mysqli_query($link,$sql);

    if($result = $link ->query($sql)){
      while($row=$result->fetch_assoc()){
        echo '<article><div class="card">
        <div class="card-header" id="postHeader">
        <p class="h4 card-text text-left" id="postTitle">'.($row['reporting']).' has reported '.($row['reported']).'</p>
        <p class=" h6 card-text text-right">Date: '.($row['date']).'</p></div>
        <div class="card-body">
        <p class="postContent">'.($row['explanation']).'
        </p></div></div><br></article>';
  }
  close_database_connection($link);
}
}

function ShowAdmins(){
  $link=open_database_connection();
  $sql = "SELECT * FROM users WHERE accounttype = 0 ORDER BY id ASC";

    $result=mysqli_query($link,$sql);

    if($result = $link ->query($sql)){
      while($row=$result->fetch_assoc()){
        echo '
    <tr>
      <th scope="row">'.($row['fname']).'</th>
      <td>'.($row['lname']).'</td>
      <td>'.($row['email']).'</td>
      <td>'.($row['username']).'</td>
      <td>'.($row['regtime']).'</td>
    </tr>';
  }
  close_database_connection($link);
}
}

function RegisterAdmin(){
  if (isset($_POST['registerbuttonadmin'])){
    $username = strip_tags(trim($_POST['username']));
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];
   $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    if($username  == "" || $password1 == "" || $password2 == ""|| $email == "" || $fname == ""|| $lname == ""){
      echo '<script language="javascript">';
      echo 'alert("All fields are required.")';
      echo '</script>';
    } else {
      if ($password1 != $password2){
        echo '<script language="javascript">';
        echo 'alert("Passwords do not match")';
        echo '</script>';      }else
      if (strlen($password1)<5) {

        echo '<script language="javascript">';
        echo 'alert("The password is too short. It has to be minimum 5 characters long.")';
        echo '</script>';

      } else {
        //vpisemo v bazo
        //1. povezemo se z
          $link=open_database_connection(); //povežemo se z bazo
          //2. kodiramo geslo
          $encpass = sha1($password1); //zakodiramo geslo
          //3. vstavimo podatke v tabelo
          $sql="INSERT INTO users (fname, lname, email, username, password, accounttype) VALUES ('$fname','$lname', '$email','$username', '$encpass', 0)";
      		if (!mysqli_query($link,$sql))
      		{
      				echo("Error description: " . mysqli_error($link));
      		} else {
            echo '<script language="javascript">';
            echo 'alert("Registration successful.")';
            echo '</script>';
            header('Location: index.php?page=admin');
      		}
          //4. zapremo povezavo z bazo
          close_database_connection($link); //zapremo povezavo z bazo
      }

    }

  }
}

function Login(){
  if (isset($_POST['loginbutton'])){
      $username = strip_tags(trim($_POST['username']));
      $password = $_POST['pass1'];

      if ($username == "" || $password == ""){
        echo '<script language="javascript">';
            echo 'alert("All fields are required.")';
            echo '</script>';
      } else {
        $link=open_database_connection(); //povežemo se z bazo
        $encpass = sha1($password); //zakodiramo geslo

        $sql = "SELECT id FROM users WHERE username='$username'";
        if (!mysqli_query($link,$sql))
        {
            echo("Error description: " . mysqli_error($link));
        } else {
            $result=mysqli_query($link,$sql);
            $rowcount=mysqli_num_rows($result);
            if ($rowcount == 0){
              echo '<script language="javascript">';
            echo 'alert("The username does not exist.")';
            echo '</script>';
            } else {

              $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
              $id=$row["id"];

              $sql1 = "SELECT * FROM users WHERE password='$encpass' AND id='$id'";

              if (!mysqli_query($link,$sql1))
              {
                  echo("Error description: " . mysqli_error($link));
              } else {
                $result=mysqli_query($link,$sql1);
                $rowcount=mysqli_num_rows($result);
                if ($rowcount == 0){
                  echo '<script language="javascript">';
            echo 'alert("Incorrect password")';
            echo '</script>';
                } else {
                  echo '<script language="javascript">';
            echo 'alert("Login successful")';
            echo '</script>';
                  
                  
                  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                  if (!mysqli_query($link,$sql))
                  {
                    echo("Error description: " . mysqli_error($link));                  
                  }
                  //ustvarimo sejo
                  $_SESSION['username'] = $row['username'];
                  $_SESSION['accounttype'] = $row['accounttype'];
                  if (isset($_SESSION['username']) && $_SESSION['accounttype'] == "2"){
                    header('Location: index.php?page=menteeprofile');                  
                  }
                  else if (isset($_SESSION['username']) && $_SESSION['accounttype'] == "1"){
                    header('Location: index.php?page=mentorprofile');                  
                  }
                  else if (isset($_SESSION['username']) && $_SESSION['accounttype'] == "0"){
                    header('Location: index.php?page=mentorrequests');                  
                  }
                  if (isset($_POST['remember'])){
                  setcookie("cookiesss", $username, time()+86400); //ustvarimo piškotek
                }
                }
              }
            }
        }

        close_database_connection($link); //zapremo povezavo z bazo
      }
  }
}
function Logout(){
  session_destroy();
  setcookie("cookiesss", "", time()-1);
  header('Location: index.php');
}

//cookie
function AutoLogin(){
  if(isset($_COOKIE['cookiesss'])){
    $username = $_COOKIE['cookiesss']; //3r1
    $link=open_database_connection(); //povežemo se z bazo

    $sql = "SELECT username FROM users WHERE username='$username'";
    if (!mysqli_query($link,$sql))
    {
      echo("Error description: " . mysqli_error($link));
    } else {
      $result=mysqli_query($link,$sql);
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      //ustvarimo sejo
      $_SESSION['username'] =  $row['username'];
    }

    close_database_connection($link); //zapremo povezavo z bazo
  }
}

function Report(){
  if (isset($_POST['reportuser'])){
      $username1 = strip_tags(trim($_POST['username1']));
      $username2 = strip_tags(trim($_POST['username2']));
      $explanation = $_POST['explanation'];

      if ($username1 == "" || $username2 == "" || $explanation == ""){
        echo '<script language="javascript">';
            echo 'alert("All fields are required.")';
            echo '</script>';
      } else {
        $link=open_database_connection(); //povežemo se z bazo
        $insert = mysqli_query($link,"INSERT INTO reports (reporting, reported, explanation) VALUES ('$username1', '$username2', '$explanation')");

            echo '<script language="javascript">';
            echo 'alert("Thank you for your report.")';
            echo '</script>';
            close_database_connection($link); //zapremo povezavo z bazo

                }
              }    
}

function Search(){

  $link=open_database_connection(); //povežemo se z bazo

    $sql = "SELECT * FROM users WHERE MATCH(fname,lname,email,username,subject,location) AGAINST ('%" . $search . "%')";

      echo '<article><div class="card">
      <div class="card-header" id="postHeader">
      <p class="h4 card-text text-left" id="postTitle">'.($row['fname']).' '.($row['lname']).'</p>
      <p class=" h6 card-text text-right">Date: '.($row['regtime']).'</p></div>
      <div class="card-body">
      <p class="postContent">Subject:'.($row['subject']).', location: '.($row['location']).'
      </p></div></div><br></article>';
  
close_database_connection($link); //zapremo povezavo z bazo
}

function DisplayAllMentors(){
  $link=open_database_connection();
  $sql = "SELECT * FROM users WHERE accounttype = 1 ORDER BY id ASC";

    $result=mysqli_query($link,$sql);

    if($result = $link ->query($sql)){
      while($row=$result->fetch_assoc()){
        echo'
        <li class="list-group-item"><a href="#"><img src="templates/assets/profile.png" alt="image" width="50px">'.($row['fname']).' '.($row['lname']).', '.($row['subject']).', '.($row['location']).'</a></li>';
  }
  close_database_connection($link);
}
}

function ForgotPassword(){
  if(isset($_POST['forgpass']))
  {
      $email = $_POST['email'];

      if($email=="")
      {
          echo "Enter your email.";
      }
      else
      {
          $link=open_database_connection();
          $uporabnik = mysqli_query($link,"SELECT email FROM users WHERE email='$email'");
          $row_cnt = mysqli_num_rows($uporabnik);
          if($row_cnt != 0 )
          {
              $length = 10;
              $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
              $password = substr( str_shuffle( $chars ), 0, $length );
              $kodirano_geslo = sha1($password);
              $sprememba = mysqli_query($link,"UPDATE users SET password='$kodirano_geslo' WHERE mail='$email' ");
              $to      = $email;
              $subject = 'New password';
              $message = 'Hello, your new password is: '.$password;
              $headers = 'From: mentormatching@gmail.com' . "\r\n" .
                         'Reply-To: webmaster@example.com' . "\r\n" .
                         'X-Mailer: PHP/' . phpversion();

              mail($to, $subject, $message, $headers);
              echo '<script language="javascript">';
            echo 'alert("Your new password has been emailed to you.")';
            echo '</script>';
          }
          else if($row_cnt == 0)
          {
              echo "Email not found!";
          }
          close_database_connection($link);
      }
  }
}

?>
