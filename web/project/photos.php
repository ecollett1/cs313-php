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
      <h2>Photos</h2>
      <table border="0" width="75%">
        <tr>
          <th class="center"><a href="photosfamily.php">Family<br><img id="gallery" src="13.jpg"></a></th>
          <th class="center"><a href="photosengage.php">Engagements<br><img id="gallery" src="7.JPG"></a></th>
          <th class="center"><a href="photoswedding.php">Wedding<br><img id="gallery" src="29.jpg"></a></th>
        </tr>
        <tr>
          <th class="center"><a href="photosanimal.php">Animals<br><img id="gallery" src="5.JPG"></a></th>
          <th class="center"><a href="photosnewborn.php">Newborn<br><img id="gallery" src="2.JPG"></a></th>
        </tr>
      </table>
      <br>
      <br>

    </main>
    <?php
      require("footer.php");
    ?>
  </body>
</html>
