<?php
$pageTitle="Show admins";
  ob_start() ?>
<div class="container">
<h2>Show current admins</h2><br>
<a href="index.php?page=addadmin" class="btn btn-primary">Create an admin</a><br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Date registered</th>
    </tr>
  </thead>
  <tbody>
  <?php ShowAdmins(); ?>
  </tbody>
</table>
</div>
    <?php
$content = ob_get_clean();

include "templates/layout.html.php";
?>