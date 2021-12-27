<?php
$pageTitle="Mentee profile";
  ob_start() ?>

<div>
        <img src="templates/styles/profile.png">
    </div>
    <a type="button" name="report" class="btn btn-primary" href="index.php?page=reportuser">Report user</button><br>
    <div class="about">
      <h3>About: </h3>
    </div>

    <div class="Personal">
      <h3>Personal Details: </h3>
    </div>

    <div class="Qualifications">
      <h3>Qualifications:</h3>
    </div>

    <?php

$content = ob_get_clean();

include "templates/layout.html.php";
?>
