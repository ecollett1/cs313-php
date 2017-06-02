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

    $stmt = $db->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
      <div id="pictures">
        <?php
          foreach ($results as $row) {
            echo "<a href=\"" . $row['link_name'] . "\"><img id=\"images\" src=\"" . $row['link_name'] . "\"></a>";
          }
        ?>
      </div>
      <br>
      <br>
    
    </main>
  </body>
</html>