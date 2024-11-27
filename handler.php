<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>
  <!-- Always shows a header, even in smaller screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Gregory-Leibniz series</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content">
        <!-- Your content goes here -->
        <center>
          <h1>Here's your answer!</h1>
          <?php
          $digits = "";
          $pi = 0;
          if (isset($_POST['digits'])) {
            $digits = $_POST['digits'];
          }
          $digits = (int)$digits;
          for ($x = 0; $x <= $digits; $x++) {
            $pi += (4 * ((-1.0) ** $x / (2.0 * $x + 1.0)));
          }
          echo "<p>" . $pi . "</p>\n";
          ?>
          <a href="index.html"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
              Enter another number?
            </button></a>
        </center>
      </div>
    </main>
  </div>

</body>

</html>