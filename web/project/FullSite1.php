<!DOCTYPE html>
<html>
  <head>
    <style>
      .normal {                    <!--These are all the original styles for the page, not included in the .css stylesheet-->
         font-size: 12px;
         color: black;
         background: white;
         padding-left: 15px;
      }
      
      .fade-out {
        opacity: 0;
        transition: none;
      }
      
      span {
         display: block;
      }
      
      div.relative {
        position: relative;
        left: 30px;
      }
      
      .center {
         text-align: center;
      }
                                   <!--Down to this point.-->
    </style>
    <title>Coilett Industries</title>
    <link rel="stylesheet" type="text/css" href="Styles.css">
    
    <script>
      function draw()
      {
        var canvas = document.getElementById("canvas");
           var ctx = canvas.getContext('2d');
        ctx.beginPath();
        ctx.arc(75,75,40,0,Math.PI*2,true); // Outer circle
        ctx.moveTo(107,75);
        ctx.arc(75,75,33,0,Math.PI,false);  // Mouth (clockwise)
        ctx.moveTo(63,65);
        ctx.arc(60,63,3,0,Math.PI*2,true);  // Left eye
        ctx.moveTo(92,65);
        ctx.arc(90,63,3,0,Math.PI*2,true);  // Right eye
        
        ctx.moveTo(75, 70);
        ctx.lineTo(70, 80);                 // Nose
        ctx.lineTo(80, 80);
        ctx.lineTo(75, 70);
        
        ctx.moveTo(75, 115);
        ctx.lineTo(75, 300);                // Body
        
        ctx.moveTo(75, 175);
        ctx.lineTo(175, 125);               // Right Hand
        
        ctx.moveTo(75, 175);
        ctx.lineTo(0, 175);                 // Left Hand
        
        ctx.moveTo(75, 300);
        ctx.lineTo(115, 375);               // Right Foot
        
        ctx.moveTo(75, 300);
        ctx.lineTo(35, 375);                // Left Foot
        
        ctx.moveTo(100, 125);
        ctx.lineTo(250, 125);               // Tray
        ctx.lineTo(260, 115);
        ctx.lineTo(90, 115);
        ctx.lineTo(100, 125);
        
        ctx.moveTo(165, 115);
        ctx.lineTo(155, 50);                // Fry box
        ctx.moveTo(205, 50);
        ctx.arc(180,50,25,0,Math.PI,false);
        ctx.moveTo(205, 50);
        ctx.lineTo(195, 115);
        
        ctx.moveTo(155, 50);
        ctx.lineTo(157, 50);                //Fries
        ctx.lineTo(157, 45);
        ctx.lineTo(160, 65);
        ctx.moveTo(157,45);
        ctx.lineTo(160, 43);
        ctx.lineTo(165, 70);
        ctx.lineTo(170, 40);
        ctx.moveTo(161, 50);
        ctx.lineTo(169, 50);
        ctx.moveTo(170, 40);
        ctx.lineTo(175, 42);
        ctx.lineTo(173, 75);
        ctx.lineTo(183, 35);
        ctx.lineTo(188, 35);
        ctx.lineTo(178, 75);
        ctx.lineTo(185, 50);
        ctx.lineTo(189, 48);
        ctx.lineTo(183, 75);
        ctx.moveTo(189, 73);
        ctx.lineTo(189, 35);
        ctx.lineTo(194, 32);
        ctx.lineTo(194, 70);
        ctx.moveTo(194, 60);
        ctx.lineTo(197, 45);
        ctx.lineTo(202, 48);
        ctx.lineTo(195, 65);
        ctx.moveTo(175, 50);
        ctx.lineTo(180, 50);
        ctx.moveTo(201, 50);
        ctx.lineTo(205, 50);
        
        ctx.moveTo(220, 115);
        ctx.lineTo(210, 30);                // Drink
        ctx.moveTo(255, 30);
        ctx.arc(233,30,22,0,Math.PI*2,false);
        ctx.moveTo(255, 30);
        ctx.lineTo(245, 115);
        ctx.moveTo(228, 30);
        ctx.lineTo(238, 30);
        ctx.moveTo(230, 30);
        ctx.lineTo(230, 0);
        ctx.lineTo(235, 0);
        ctx.lineTo(235, 30);
        ctx.moveTo(235, 25);
        ctx.lineTo(230, 25);
        ctx.moveTo(230, 20);
        ctx.lineTo(235, 20);
        ctx.moveTo(235, 15);
        ctx.lineTo(230, 15);
        ctx.moveTo(230, 10);
        ctx.lineTo(235, 10);
        ctx.moveTo(235, 5);
        ctx.lineTo(230, 5);
        
        ctx.moveTo(150, 150);
        ctx.lineTo(275, 150);               // Message Board
        ctx.lineTo(275, 275);
        ctx.lineTo(150, 275);
        ctx.lineTo(150, 150);
        
        ctx.moveTo(165, 165);
        ctx.lineTo(170, 180);               // WANT FRIES?
        ctx.lineTo(175, 165);
        ctx.lineTo(180, 180);
        ctx.lineTo(185, 165);
        ctx.moveTo(190, 180);
        ctx.lineTo(195, 165);
        ctx.lineTo(200, 180);
        ctx.moveTo(192, 175);
        ctx.lineTo(198, 175);
        ctx.moveTo(205, 180);
        ctx.lineTo(205, 165);
        ctx.lineTo(215, 180);
        ctx.lineTo(215, 165);
        ctx.moveTo(220, 166);
        ctx.lineTo(235, 166);
        ctx.moveTo(228, 166);
        ctx.lineTo(228, 181);
        ctx.moveTo(185, 205);
        ctx.lineTo(185, 190);
        ctx.lineTo(195, 190);
        ctx.moveTo(185, 198);
        ctx.lineTo(190, 198);
        ctx.moveTo(200, 205);
        ctx.lineTo(200, 190);
        ctx.lineTo(210, 190);
        ctx.lineTo(210, 198);
        ctx.lineTo(200, 198);
        ctx.lineTo(210, 205);
        ctx.moveTo(215, 205);
        ctx.lineTo(215, 190);
        ctx.moveTo(230, 205);
        ctx.lineTo(220, 205);
        ctx.lineTo(220, 190);
        ctx.lineTo(230, 190);
        ctx.moveTo(220, 197.5);
        ctx.lineTo(225, 197.5);
        ctx.moveTo(235, 205);
        ctx.lineTo(245, 205);
        ctx.lineTo(245, 197.5);
        ctx.lineTo(235, 197.5);
        ctx.lineTo(235, 190);
        ctx.lineTo(245, 190);
        ctx.moveTo(250, 195);
        ctx.lineTo(250, 190);
        ctx.lineTo(260, 190);
        ctx.lineTo(260, 198);
        ctx.lineTo(255, 198);
        ctx.lineTo(255, 201);
        ctx.moveTo(255, 205);
        ctx.lineTo(255.5, 205);
        ctx.stroke();
      }
    </script>
    
    <script>
      var randomColor = Math.floor(Math.random()*16777215).toString(16);
    </script>
    
    <script>   //Page Fade in
      
      function load() {
        var opacity = 0.0;
        document.body.style.opacity = 1;
        document.body.style.transition = '1s opacity';
        draw();
      }
      
      window.onload = load;
    </script>
  </head>
  <body id="mainContainer" class="fade-out">
    <main>
      
    <h1 id="large">Coilett Industries</h1>
    <h2>Introduction</h2>
    <p id="p1">Coilett Industries is a company made to help people who have disabilities or problems mentally.  We strive
    to find out why the brain is working the way it is, and want to learn how we can better fix it.</p>
    
    <script>
      document.getElementById("p1").style.color = "red";
      document.getElementById("p1").style.backgroundColor = "randomColor";
      document.getElementById("p1").style.border = "medium solid black";
    </script>
    
    <button type="button" onclick="document.getElementById('p1').style.color = 'blue'">
      Change the CSS!</button>
    <br>
    <br>
    <span class="normal">Since there are so many different opinions on the different subjects of the brain</span>
    <span class="normal">we feel it's important to post an article written by one of our own:</span>
    <br>
    <br>
    <a class="center" id="large" href="How Psychotherapy Changes the Brain.docx">How Psychotherapy Changes the Brain</a>
    <br><br><br>
    <button type="button" onclick="document.querySelector('#mainContainer').style.backgroundColor = 'orange'">Change the page</button>
    <br>
    
    <h3>Canvas API</h3>
    <h4>Now Serving: </h4>
    <div class="relative">
      <canvas id="canvas" width="350" height="400"></canvas>
    </div>
      
      <progress id="progress" value="0" max="100">
      </progress>
      <script>
	      var progress = 0;
          moveForward();
    
          function moveForward() {
    	      var x = document.getElementById("progress");
              progress++;
             if (progress > 100) { progress = 0;}
             x.value = progress;
        
             setTimeout(moveForward, 100);
         }
      </script>
    <div style="margin-left: auto;margin-right: auto;">
      <br>
      <iframe width="854" height="480" src="https://www.youtube.com/embed/StTqXEQ2l-Y" frameborder="0" allowfullscreen></iframe>
      <br>
    </div>
    <p>This whole section other than the headers was done using Canvas API, here's where I learned how:
    <a href="https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial/Drawing_shapes">Drawing shapes</a>
    </p>

    <br><br>
    <!-- All of the DOM manipulations -->
	<h7 id="large">DOM</h7>
	<p><strong>DOM Manipulation</strong></p>
    <form action="" id="form1">
 	  <table>
        <tr>
	  <td><p id="createNode">This is the first parent node.</p></td>
	  <td><p id="secondNode">Second text to work with others.</p></td>
	</tr>
	    </table>
    <form>
	<table>
	<tr>
          <td><button onmousedown="domCreateChild()" style='color:blue'>Create Child</button></td>
	  <td><button onmousedown="domInsertBefore()" style='color:green'>Insert Before</button></td>
	  <td><button onmousedown="domRemoveChild()" style='color:red'>Remove Child</button></td>
	  <td><button onmousedown="domReplaceChild()" style='color:brown'>Replace Child</button></td>
        </tr>
		</table>
	    </form>
	</form>
    <script>   //DOM Manipulation
	function domCreateChild() {
	   var newChild = document.createElement("p");
	   var newNode = document.createTextNode("This is the child node of the one above");
	   newChild.appendChild(newNode);
		
	   var parentText = document.getElementById("createNode");
	   parentText.appendChild(newChild);
	}

	function domInsertBefore() {
	   var newChild = document.createElement("p");
	   var newNode = document.createTextNode("This is the child node of the one below");
	   newChild.appendChild(newNode);
		
	   var parentText = document.getElementById("createNode");
	   var childText = document.getElementById("secondNode");
	   parentText.appendChild(childText);
	   parentText.insertBefore(newChild, childText);
	}
	    
	function domRemoveChild() {
	   var parentText = document.getElementById("createNode");
	   parentText.appendChild(document.getElementById("secondNode"));
	   parentText.removeChild(document.getElementById("secondNode"));	
	}
	 
	function domReplaceChild() {
	   var newChild = document.createElement("p");
	   var newNode = document.createTextNode("Replaced the text!");
	   newChild.appendChild(newNode);
		
	   var parentText = document.getElementById("createNode");
	   var childText = document.getElementById("secondNode");
	   parentText.appendChild(childText);
	   parentText.replaceChild(newChild, childText);
	}
    </script>
	<br><br>
	<h10>Local Storage Testing!</h10>
	<input id="inputbox" type="text" value="type here" onkeypress="localS()"/>
	<p id="result">Watch this text change!</p>

	<script>
	function localS() {
	  if (typeof(Storage) !== "undefined") {
    	    localStorage.setItem("text", document.getElementById("inputbox").value);

    	    document.getElementById("result").innerHTML = localStorage.getItem("text");
	  }
	  else {
	    alert("Your browser doesn't support local storage...");
	  }
	}
	</script>
	<br>
	    <button type="button" onclick="localS()">Same Thing</button>
	 <br><br><br>
    <h1>End Of Page</h1>
    <p class="important">If you really want to go to the next page just make sure you click on the link for page 2.
    The "Home Directory" link will bring you back to the original page, and the "Week 03 Team assignment" will bring
    you do the team activity for this week.</p>
    
    <a class="page2" href="https://maxgeras.github.io/story.html">Continue to page 2 >> (It's loud!) </a>
    <hr>
    <a href="home.php">Home Directory</a>
    <br>
    </main>
  </body>
</html>
