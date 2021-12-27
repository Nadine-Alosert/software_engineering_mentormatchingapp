<?php
$pageTitle="Search";
  ob_start() ?>

<div class="container">
  <div>
    <h2>Search</h2><br>
    <input type="text" id="mySearch" class="form-control mr-sm-2" onkeyup="myFunction()" placeholder="Search" title="Type in a category">
    <br>
    <ul id="myMenu" class="list-group">
    <?php DisplayAllMentors(); ?>

    </ul>
  </div>
  <br>
</div>
<br><br><br><br>

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

  <?php

$content = ob_get_clean();

include "templates/layout.html.php";
?>
