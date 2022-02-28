<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inkcasa dashboard</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Inkcasa</header>
      <a href="/namelist" class='active'>
        <i class="fas fa-qrcode"></i>
        <span>Dashboard</span>
      </a>
      <a href="leads" class=''>
        <i class="fas fa-link"></i>
        <span>Leads</span>
      </a>
      <a href="masterlead" class="">
        <i class="fas fa-stream"></i>
        <span>Master Leads</span>
      </a>
      <a href="attributes">
         <i class="fas fa-plus"></i>
        <span>Add Attributes</span>
      </a>
      <a href="enq">
        <i class="far fa-question-circle"></i>
        <span>About</span>
      </a>
      <a href="#">
        <i class="fas fa-sliders-h"></i>
        <span>Services</span>
      </a>
      <a href="#">
        <i class="far fa-envelope"></i>
        <span>Contact</span>
      </a>
    </div>

  </body>
</html>
