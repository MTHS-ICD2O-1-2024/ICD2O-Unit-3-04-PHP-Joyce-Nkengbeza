<!DOCTYPE html>
<!-- ICS2O-Unit3-04PHP-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Fahrenheit to Celsius, PHP " />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Joyce Nkengbeza" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-iconnew.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32new.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16new.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Fahrenheit to Celsius, PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Fahrenheit to Celsius, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/celsius-to-fahrenheit.png" alt="Fahrenheit to celsius Image" />
      </div>
      <div class="page-content-php">
        <div id="temperature">
          <?php
          $fahrenheit = $_GET["fahrenheit"];
          // process
          $celsius = ($fahrenheit - 32) * 5/9;

          // output 
          echo "If temp. in fahrenheit is " . $fahrenheit . "°";
          echo "<br />";
          echo " Then temp. in celsius is " . $celsius . "°";
          ?>
        </div>
        <div class="page-content-answer">
          <a href="./index.php">Return ...</a>
        </div>
      </div>
    </main>
  </div>
</body>

</html>