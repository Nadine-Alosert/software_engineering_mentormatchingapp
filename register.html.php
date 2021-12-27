<?php
$pageTitle="Register";
  ob_start() ?>


<div class="row justify-content-around text-center">
    <div class="col-4 alert-primary">
      <br>
      <h3>MENTEE</h3>
      <hr style="border: 1px #0275d8 solid">
      <ul class="list-group">
        <li class="list-group-item">Match with a mentor</li>
        <li class="list-group-item">Gain new skills</li>
        <li class="list-group-item">Learn</li>
        <li class="list-group-item">Get help</li>
        <li class="list-group-item">Be productive</li>
      </ul><br><br>
      <a class="btn btn-primary" href="index.php?page=registermentee">Become a mentee</a><br><br>
    </div>
    <div class="col-4 alert-primary">
      <br>
      <h3>MENTOR</h3>
      <hr style="border: 1px #0275d8 solid">
      <ul class="list-group">
        <li class="list-group-item">Connect with mentees</li>
        <li class="list-group-item">Help those in need</li>
        <li class="list-group-item">Share your knowledge</li>
        <li class="list-group-item">Gain experience</li>
        <li class="list-group-item">Expand your skills</li>
      </ul><br><br>
      <a  class="btn btn-primary" href="index.php?page=registermentor">Become a mentor</a>
      <p style="font-size: 15px">Note: admin has to confirm the account.<p>
      <br>
    </div>
  </div>

  <?php

  $content = ob_get_clean();

  include "templates/layout.html.php";
  ?>
