<DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Call It Photography</title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body id="mainContainer" class="fade">
    <main>
      <?php
        require("header.php");
      ?>

      <h2 class="center">Prices</h2>
      <?php
        try {
          $dbURL = getenv('DATABASE_URL');
          $dbopts = parse_url($dbURL);

          $dbHost = $dbopts["host"];
          $dbPort = $dbopts["port"];
          $dbUser = $dbopts["user"];
          $dbPassword = $dbopts["pass"];
          $dbName = ltrim($dbopts["path"],'/');

          $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
          
          // $user = 'postgres';
          // $password = 'sh0m0mm@';
          // $db = new PDO('pgsql:host=127.0.0.1;dbname=photography', $user, $password);
        }
        catch (PDOException $ex) {
          echo 'Error: ' . $ex->getMessage();
          die();
        }

        echo "<br>";

        foreach ($db->query("SELECT * FROM session WHERE id = 1") as $row) {
            echo "<p class=\"center\">Newborns: " . $row['cost'] . "<br>";
        }
        foreach ($db->query("SELECT * FROM session WHERE id = 2") as $row) {
            echo "<p class=\"center\">Family: " . $row['cost'] . "<br>";
        }
        foreach ($db->query("SELECT * FROM session WHERE id = 3") as $row) {
            echo "<p class=\"center\">Wedding: " . $row['cost'] . "<br>";
        }
        foreach ($db->query("SELECT * FROM session WHERE id = 4") as $row) {
            echo "<p class=\"center\">Engagements: " . $row['cost'] . "<br>";
        }
        foreach ($db->query("SELECT * FROM session WHERE id = 5") as $row) {
            echo "<p class=\"center\">Newborn and Family: " . $row['cost'] . '<br>';
        }
        foreach ($db->query("SELECT * FROM session WHERE id = 6") as $row) {
            echo "<p class=\"center\">Animal: " . $row['cost'] . "<br>";
        }
        
        echo '<br></p>';
      ?>
      <br>
      <br>
    </main>
  </body>
</html>