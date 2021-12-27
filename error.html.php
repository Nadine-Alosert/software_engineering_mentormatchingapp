<?php
$pageTitle="Error";
  ob_start() ?>

  <body>
    <h1>Sorry!</<h1>

    <h2>  Error - Page doesn't exist please revisit another Page</h2>

    <a href="homepage.html">Go back to homepage!</a>

  </body


<?php

$content = ob_get_clean();

include "./layout.html.php";

?>
    <style type="text/css">
    img{
    background-image: url("sad.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-color: #E6FBFC;

    }

    body{
      display: block;
      text-align: center;
      padding: 100px;
      font-style: oblique;
      font-family: monospace;
    }

    a{
      font-family: cursive;
      font-weight:bold;
    }
    </style>
