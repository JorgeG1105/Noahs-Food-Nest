<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Noah's Food Nest || Contact</title>
        <!--Required Meta tags for mobile-->
        <meta charset="UTF-8">
	      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	      <!--Bootstrap 4-->
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Sacramento" rel="stylesheet">
	      <!--Custom Stylesheet-->
	      <link rel="stylesheet" href="Assets/Stylesheets/styles.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#noahNav" aria-controls="noahNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="noahNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.html">Menu</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="press.html">Press</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="ordering.php">Online Ordering</a>
              </li>
            </ul>
          </div>
        </nav><!--end nav-->
      <div class="container">
        <div class="contact text-center">
          <div class="row">
            <div class="col">
              <h2>Contact</h2>
              <h4>Want to get in contact with us?</h4>
              <h4>Fill out the form below and we will get back to you as soon as possible.</h4>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                <div class="form-row">
                  <div class="col-lg-3 offset-lg-3">
                    <input type="text" class="form-control" placeholder="First name *" name="firstname" required>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Last name" name="lastname" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-3 offset-lg-3">
                    <input type="text" class="form-control" placeholder="Subject *" name="subject" required>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Email/Phone *" name="email/phone" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 offset-lg-3 col-sm-12">
                    <textarea class="form-control" rows="5" name="message" required></textarea>
                  </div><!--end col-->
                </div><!--end row-->
                <button class="send-btn" type="submit">Send</button>
              </form><!--end form-->
            </div><!--end col-->
          </div><!--end row-->
          <?php
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $subject = $_POST['subject'];
          $emailphone = $_POST['email/phone'];
          $message = $_POST['message'];
          $recipient = "noahsfoodnest@gmail.com";
          $subject = "Noahs Food Nest Contact Form Submission";
          $formcontent = "From:"." ".$firstname." ".$lastname."\n Email/Phone: ".$emailphone." \n Subject: ".$subject." \n  Message:"." ".$message;

          if (isset($_REQUEST['email/phone'])) {
            mail($recipient, $subject, $formcontent);
            echo "<h2>Thanks! we will get back to you shortly!</h2>";
          }
        ?>
        </div><!--end Contact-->
      </div><!--end container-->
      <footer class="text-center">
        <p><strong>Follow Us:</strong></p>
        <div class="social-links">
          <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
          <a href="https://twitter.com/noahsfoodnest" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
          <i class="fa fa-foursquare fa-lg" aria-hidden="true"></i>
          <a href="https://www.instagram.com/noahsfoodnest/" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
        </div>
        <span class="copyright">© 2017 Noah's Food Nest</span>
      </footer><!--end Footer-->
      
        <!--jQuery Slim-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <!--popper.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <!--Bootstrap 4-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <!--Font Awesome-->
	      <script src="https://use.fontawesome.com/d579f311e9.js"></script>
        <!--ScrollReveal.js-->
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        <!--Custom Scripts-->
        <script type="text/javascript" src="Assets/js/script.js"></script>
    </body>
</html>