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
      <p class="center">I'm married and am currently in college working on my major in Child Development.  I've been doing photography for over 5 years now on and off just for fun.  I enjoy being outside and love taking pictures, even though I don't get to do it as often as I'd like.  Feel free to contact me by text, call, or email.  I'll try to respond as quickly as possible!</p>

      
    </main>
  </body>
</html>