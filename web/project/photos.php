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
    $query = "SELECT * FROM photos";

    $db->prepare($query);
    $db->execute();
    $db->fetchAll(PDO::FETCH_ASSOC);
  }
  catch (PDOException $ex) {
    echo 'Error: ' . $ex->getMessage();
    die();
  }
?>
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
      <ul>
      <?php
        foreach ($db as $row) {
          echo "<li><p>" . $row['link_name'] . "<\p><\li>";
        }
      ?>
      </ul>
      <br>
      <br>
    
    </main>
  </body>
</html>