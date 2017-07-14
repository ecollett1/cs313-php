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
      /* PHP code to send email provided graciously by https://www.123contactform.com/html-contact-form/
      All other PHP was made by the owner of this file (Eric Collett).*/
        $action = $_REQUEST['action'];

        if ($action=="")    /* display the contact form */
            {
            ?>

      <div class="center"><form id="contactMessage" action="#" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label><br />
        <input id="name" class="input" name="name" type="text" value="" size="30">
          <br>
        <label for="email">Email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="30">
          <br>
        <label for="message">Message:</label><br />
        <textarea id="message" class="input" name="message" rows="10" cols="40"></textarea>
          <br>
        <input id="submit_button" class="" type="submit" value="Send email">
      </form>
      </div>

      <?php
            }
        else                /* send the submitted data */
            {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $message = $_REQUEST['message'];
            if ($name == "" || $email == "" || $message == "")
                {
                echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                }
            else{
                $from = "From: $name<$email>\r\nReturn-path: $email";
                $subject = "Message sent using your contact form";
                mail("callitphotography@gmail.com", $subject, $message, $from);
                echo "Email sent!";
                }
            }
      ?>

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
          echo '<br><a href="tel:' . $row['phone'] . '">' . $row['phone'] . '</a>';
          echo '<br><a href="' . $row['email'] . '">' . $row['email'] . '</a>';
          echo '<br></p>';
        }
      ?>
      <br>
      <h3 class="center"> About Me </h3>
      <div id="pictures" >
        <img id="images" src="23.JPG">
      </div>
      <p class="center">I'm married and am currently in college working on my major in Child Development.  I've been doing photography for over 5 years now on and off just for fun.  I enjoy being outside and love taking pictures, even though I don't get to do it as often as I'd like.  Feel free to contact me by text, call, or email.  I'll try to respond as quickly as possible!</p>

      <?php
        require("footer.php");
      ?>
    </main>
  </body>
</html>
