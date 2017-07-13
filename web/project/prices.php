<DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Call It Photography</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      th, td {
        padding: 4px;
        border-bottom: 1px solid #ddd;
      }
    </style>
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

        $type = Array('Newborns', 'Family', 'Wedding', 'Engagements', 'Newborn and Family', 'Animal');
        $info = Array('1 hour session + 30 edited photos',
         '1 hour session + 30 edited photos',
         '2 hour session + 40 edited photos',
         '1 hour session + 30 edited photos',
         '1 hour session + 30 edited photos',
         'Half hour session + 20 or more edited photos');

        echo '<table border="0" width="60%" align="center"><tr>
        <th align="left">Type</th>
        <th align="left">Cost</th>
        <th align="right">What You Pay for</th>
        </tr>';

        foreach ($db->query("SELECT * FROM session") as $index => $row) {
          echo '<tr><td>' . $type[$index] . '</td><td>' . $row['cost']
          . '</td><td style="text-align: right;">' . $info[$index] . '</td></tr>';
        }

        echo '</table>';
      ?>
      <br>
      <br>
    </main>
    <?php
      require("footer.php");
    ?>
  </body>
</html>
