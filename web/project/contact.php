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
      <br>
      <br>
      <h2> Contact Me </h2>
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
        
        foreach ($db->query("SELECT * FROM customer WHERE id = 1") as $row) {
          echo "<p id=\"contactinfo\" class=\"center\">" . $row['firstname'];
          echo ' ' . $row['lastname'];
          echo '<br>' . $row['phone'] . '';
          echo '<br>' . $row['email'];
          echo '<br></p>';
        }
      ?>
      <br>
      <h3 class="center"> About Me </h3>

      
    </main>
  </body>
</html>