<?php
$display_name = 'Carimu';
?>

<!DOCTYPE html>
<html>

<!--adding a head section for title and css link-->
<head>
  <meta charset=utf-8>
  <title>PHP Basics by <?php echo $display_name; ?></title>
  <link href="CSS/style.css" rel="stylesheet"/>
  <!-- extermal link to css-->
</head>

<body>
  <div id="wrap">
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="IMG/logo.png" alt="frog">
      </div>
      <h1><?php echo $display_name; ?><h1>
        <p>Contact:<br />
          <a href="mailto:mickey@aol">EMAIL</a></p>
          <hr />
          <ul class="social">
            <li><a href=""><span class="icon twitter"></span></a></li>
          </ul>
          <hr/>
          <p>Today: D, d M Y</P>

          </section>
          <section class="main">
            <h1> My First PHP Page</h1>
            <h2>Echo</h2>
            <?php include 'INC/echo.php'; ?>
            <hr/>
            <h2>Echo2</h2>
            <?php include 'INC/echo2.php'; ?>
            <hr/>
            <h2>addition</h2>
            <?php include 'INC/Addition.php'; ?>
            <hr/>
            <h2>Syntax</h2>
            <?php include 'INC/symtax.php'; ?>
            <hr/>
            <h2>Condition</h2>
            <?php include 'INC/condition.php'; ?>
            <hr/>
            <h2>Strings</h2>
            <?php include 'INC/Strings.php'; ?>
          </section>
        </div>

        <section class="footer text-center">
        &copy; <?php
          echo date('Y');
          echo " ", $display_name . ".";
          // outputs e.g 'Last' modified: October 2018 20:43:59.'
          echo "Last modified: " . date ("F d Y H:i:s.",) getlastmod());
          ?>
        </section>
      </body>
          </html>
