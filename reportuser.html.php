<?php
$pageTitle="Report user";
  ob_start() ?>
<h2>Report user</h2>
    <form method='post'>
      <div class="form-group">
      <label for="exampleInputEmail1">Your username</label>
       <input name="username1" type="text"  class="form-control width" id="username1" placeholder="Your username"><br>
       <label for="exampleInputEmail1">Their username</label>
       <input name="username2" type="text"  class="form-control width" id="username2" placeholder="Their username"><br>
       <label for="exampleFormControlTextarea1">Explanation</label>
      <input class="form-control width" name="explanation"id="explanation" placeholder="Explanation">
       <br>
 <button type="submit" name="reportuser" class="btn btn-primary">Report user</button>
</div>
 <?php
      Report();
       ?>
 <?php

$content = ob_get_clean();

include "templates/layout.html.php";
?>

