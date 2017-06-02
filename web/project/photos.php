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

        try {
          $dbURL = getenv('DATABASE_URL');
          $dbopts = parse_url($dbURL);

          $dbHost = $dbopts["host"];
          $dbPort = $dbopts["port"];
          $dbUser = $dbopts["user"];
          $dbPassword = $dbopts["pass"];
          $dbName = ltrim($dbopts["path"],'/');

          $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
          $query = "SELECT link_name FROM photos";

          $db->prepare($query);
          $db->execute();
          $results = $db->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex) {
          echo 'Error: ' . $ex->getMessage();
          die();
        }
        
        foreach ($results as $row) {
          echo $row['link_name'];
        }
      ?>
      
      <br>
      <br>
    
    </main>
  </body>
</html>