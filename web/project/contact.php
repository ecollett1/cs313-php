<DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Call It Photography</title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body id="mainContainer" class="fade-out">
    <main>
      <?php
        require("header.php");
      ?>
      <br>
      <br>
      <h2> Contact Me </h2>
      <?php
        try {
          $user = 'postgres';
          $password = 'sh0m0mm@';
          $db = new PDO('pgsql:host=127.0.0.1;dbname=photography', $user, $password);
        }
        catch (PDOException $ex) {
          echo 'Error: ' . $ex->getMessage();
          die();
        }
        
        foreach ($db->query("SELECT * FROM customer WHERE firstname = 'Emily'") as $row) {
          echo '<p><strong>Name: </strong>' . $row['firstname'];
          echo ' ' . $row['lastname'];
          echo '<br><strong>Phone: </strong>' . $row['phone'] . '';
          echo '<br><strong>Email: </strong>' . $row['email'];
          echo '<br></p>';
        }
      ?>

      
    </main>
  </body>
</html>