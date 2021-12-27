<?php
$pageTitle="Chat";
  ob_start() ?>

<div class="container">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Profile Setting</h4>
      <ul>
        <h2><?php
            if (isset($_SESSION['username'])){
              echo $_SESSION['username'];
            } ?></h2>
        <h4><?php
            if (isset($_SESSION['username'])){
              echo $_SESSION['subject'];
            } ?></h4>
        <br>
      </ul>
    </div>

    <div class="col-sm-9">
      <h4><small>Edit Settings</small></h4>

      <br>

      <label for="myfile">Upload photo:</label>
      <input type="file" id="myfile" name="myfile"></h2>
      <br> <br>

      <form class="form group">
        <div class="row">
          <div class="col-lg-6">
            <label>First Name:</label>
            <input type="text" name="username" class="form-control">
          </div>

          <div class="col-lg-6">
            <label>Last Name:</label>
            <input type="text" name="username" class="form-control">
          </div>
        </div>

      <br>


      <label>Birthday:</label>
      <input type="date" id="birthday" name="birthday" class="form-control">

      <br><br>

      <div class="row">
        <div class="col-lg-6">
          <label>Email Address</label>
          <input type="email" name="email" class="form-control">
        </div>

        <div class="col-lg-6">
          <label for="phone">Enter your phone number:</label>
          <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control">
        </div>
      </div>

      <br><br>

      <label>Address:</label>
      <input type="text" id="address" name="address" class="form-control">

      <br><br>

      <div class="row">
        <div class="col-lg-6">
          <label>City</label>
          <input type="text" name="city" class="form-control">
        </div>

        <div class="col-lg-6">
          <label>State</label>
          <input type="text" name="state" class="form-control">
        </div>
      </div>

      <br><br>

      <div class="row">
        <div class="col-lg-6">
          <label>Zip Code</label>
          <input type="text" name="zip" class="form-control">
        </div>

        <div class="col-lg-6">
          <label>Country</label>
          <input type="text" name="country" class="form-control">
        </div>
      </div>

      <br><br>

      <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
</div>
</div>
</div>
      <?php

$content = ob_get_clean();

include "templates/layout.html.php";
?>
