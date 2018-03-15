<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Retirement Calculator |</title>
    <link rel="stylesheet" href="http://sofab1.com/lm_2018/public/stylesheets/styles.css?modified=20012009">
    <style>
    .owe {color: red; }
    .refund { color: green; }
    </style>
  </head>

  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Retirement</span> Calculator</h1>
        </div>
        <nav>
          <ul>
            <li <?php if ($current == 'home') {echo 'class="current"';} ?>><a href="<?php echo WWW_ROOT?>/home.php">Home</a></li>
            <li <?php if ($current == 'user') {echo 'class="current"';} ?>><a href="<?php echo WWW_ROOT?>/user/index.php">Users</a></li>
            <li <?php if ($current == 'bank') {echo 'class="current"';} ?>><a href="<?php echo WWW_ROOT?>/bank/index.php">Banks</a></li>
            <li <?php if ($current == 'report') {echo 'class="current"';} ?>><a href="<?php echo WWW_ROOT?>/reports/index.php">Reports</a></li>
            <li <?php if ($current == 'logout') {echo 'class="current"';} ?>><a href="<?php echo WWW_ROOT?>/logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>
