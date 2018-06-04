<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Noah's Food Nest || Online Ordering</title>
        <!--Required Meta tags for mobile-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Sacramento" rel="stylesheet">
        <!--Custom Stylesheet-->
        <link rel="stylesheet" href="../Assets/Stylesheets/styles.css">
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
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.html">Menu</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="press.html">Press</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="ordering.php">Online Ordering</a>
              </li>
            </ul>
          </div>
        </nav><!--end nav-->
      <section class="foods">
        <div class="row">
          <div class="col meals-showcase">
            <figure class="meal-photo">
              <img src="Assets/images/food/food9.jpg" alt="Variety of Tomatoes">
            </figure>
          </div>
          <div class="col meals-showcase">
            <figure class="meal-photo">
              <img src="Assets/images/food/food10.jpg" alt="Variety of Tomatoes">
            </figure>
          </div>
          <div class="col meals-showcase">
            <figure class="meal-photo">
              <img src="Assets/images/food/food11.jpg" alt="Variety of Tomatoes">
            </figure>
          </div>
          <div class="col meals-showcase">
            <figure class="meal-photo">
              <img src="Assets/images/food/food12.jpg" alt="Variety of Tomatoes">
            </figure>
          </div>
        </div>
      </section><!--end foods section-->
      <div class="container">
        <div class="ordering text-center">
          <div class="row">
            <div class="col">
              <h2>Order Form</h2>
              <h4>Before submitting please make sure all items are accurately listed.</h4>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" id="order-form">
                <div class="form-group row">
                  <div class="col-sm-12 col-md-6">
                    <label for="firstname" class="col-form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <label for="firstname" class="col-form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div><!--end form-group row-->
                <div class="form-group row">
                  <div class="col-sm-12 col-md-6">
                    <label for="phone" class="col-form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" required>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <label for="address" class="col-form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" required>
                  </div>
                </div><!--end-form group row-->
                <div class="form-group row">
                  <div class="col-sm-12 col-md-4">
                    <label for="city" class="col-form-label">City</label>
                    <input type="text" class="form-control" name="city" id="city" required>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <label for="state" class="col-form-label">State</label>
                    <input type="text" class="form-control" name="state" id="state" required>
                  </div><div class="col-sm-12 col-md-4">
                    <label for="zipcode" class="col-form-label">Zipcode</label>
                    <input type="text" class="form-control" name="zipcode" id="zipcode" required>
                  </div>
                </div><!--end form-group row-->
                <div class="row">
                  <div class="col">
                    <textarea rows="10" class="form-control" id="groceries" name="groceries" placeholder="LIST SPECIFIC ITEMS (eg: Publix brand gallon of milk or Winn Dixie brand eggs)" required></textarea>
                  </div>
                </div>
                <button id="submit-btn" class="send-btn" type="submit">Order Now!</button>
              </form>
            </div><!--end col-->
          </div><!--end row-->
          <?php
          $name = $_POST['name'];
          $subject = $_POST['subject'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $address = $_POST['address'];
          $city = $_POST['city'];
          $state = $_POST['state'];
          $zipcode = $_POST['zipcode'];
          $message = $_POST['groceries'];
          $recipient = "noahsfoodnest@gmail.com";
          $subject = "You Have an Order From Noahs Food Nest!";
          $formcontent = "From:"." ".$name."\n Address: ".$address." \n City: ".$city." \n State: ".$state." Zipcode: ".$zipcode." \nSubject: ".$subject." \n  Message:"." ".$message;
          if (isset($_REQUEST['email'])) {
            mail($recipient, $subject, $formcontent);
            echo "<script>window.location = 'https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=A7LL7LKGPJBAU'</script>";
          }
        ?>
        </div><!--end ordering-->
      </div><!--end container-->
      <section class="foods">
        <div class="row">
          <div class="col meals-showcase">
            <figure class="meal-photo">
              <img src="Assets/images/food/food13.jpg" alt="Variety of Tomatoes">
            </figure>
          </div>
          <div class="col meals-showcase">
            <figure class="meal-photo">
              <img src="Assets/images/food/food14.jpg" alt="Variety of Tomatoes">
            </figure>
          </div>
          <div class="col meals-showcase">
            <figure class="meal-photo">
              <img src="Assets/images/food/food15.jpg" alt="Variety of Tomatoes">
            </figure>
          </div>
          <div class="col meals-showcase">
            <figure class="meal-photo">
              <img src="Assets/images/food/food16.jpg" alt="Variety of Tomatoes">
            </figure>
          </div>
        </div>
      </section><!--end foods section-->
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
        <!--BrainTree Drop In-->
        <script src="https://js.braintreegateway.com/web/dropin/1.9.4/js/dropin.min.js"></script>
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