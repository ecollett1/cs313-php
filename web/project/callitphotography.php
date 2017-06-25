<!DOCTYPE html>
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
	<button id="myBtn">Open Modal</button>

	<div id="myModal" class="modal" style="display: none">
	  <div class="modal-content">
        <span class="close">&times;</span>
        <input type="radio" name="choice" value="family">Family <br>
		<input type="radio" name="choice" value="engagement">Engagements <br>
		<input type="radio" name="choice" value="animal">Animal <br>
		<input type="radio" name="choice" value="newborn">Newborn <br>
		<input type="radio" name="choice" value="wedding">Wedding <br>
    </div>

</div>
	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on the button, open the modal 
		btn.onclick = function () {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function () {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function (event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		</script>

    <div id="pictures">
      <div class="slides fade">
        <img id="images" src="1.JPG" alt="First Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="2.JPG" alt="Second Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="3.JPG" alt="Third Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="4.JPG" alt="Fourth Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="5.JPG" alt="Fifth Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="6.JPG" alt="Sixth Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="7.JPG" alt="Seventh Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="8.JPG" alt="Eighth Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="9.JPG" alt="Ninth Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="10.jpg" alt="Tenth Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="11.JPG" alt="11 Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="12.jpg" alt="12 Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="13.jpg" alt="13 Picture">
        </div>
      <div class="slides fade">
        <img id="images" src="14.JPG" alt="14 Picture">
        </div>
      <?php
        require("footer.php");
      ?>
    </div>
    </main>
    <script rel="stylesheet" type="text/javascript" src="javascript.js" defer></script>
      
  </body>
</html>
