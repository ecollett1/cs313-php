<DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Call It Photography</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      th, td {
        padding: 8px;
      }
    </style>
  </head>
  <body id="mainContainer" class="fade">
    <main>
      <?php
        require("header.php");
      ?>
      <h2>Photos</h2>
      <div class="photo-main-container" border="0" width="90%">
        <a href="photosfamily.php">Family<br><img id="gallery" src="13.jpg"></a>
        <a href="photosengage.php">Engagements<br><img id="gallery" src="7.JPG"></a>
        <a href="photoswedding.php">Wedding<br><img id="gallery" src="29.jpg"></a>
        <a href="photosanimal.php">Animals<br><img id="gallery" src="5.JPG"></a>
        <a href="photosnewborn.php">Newborn<br><img id="gallery" src="2.JPG"></a>
      </div>
      <br>
      <br>

    </main>
    <?php
      require("footer.php");
    ?>
  </body>
</html>
