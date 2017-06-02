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
    $query = "SELECT * FROM photos p JOIN session s ON p.sessionid = s.id JOIN type t ON s.typeid = t.id WHERE t.family = true";

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
      <table border="0">
      <tr>
          <?php
            $newRow = 0;
            foreach ($results as $row) {
              echo "<th><a href=\"" . $row['link_name'] . "\"><img id=\"gallery\" src=\"" . $row['link_name'] . "\"></a></th>";
              $newRow += 1;
              if ($newRow == 4) {
                echo "</tr><tr>";
                $newRow = 0;
              }
            }
          ?>
        </tr>
      </table>
      <br>
      <br>
    
    </main>
  </body>
</html>