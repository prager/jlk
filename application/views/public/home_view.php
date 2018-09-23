<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JLK Consulting</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ;?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ;?>/assets/css/modern-business.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
      <div class="jumbotron">
  <h1 class="display-4">JLK Consulting</h1>
  <p class="lead">Web applications development</p>
  <hr class="my-4">

</div>
</div>

    <!-- Page Content -->
    <div class="container">

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Technology Used</h2>
          <p>Current technology features are commonly included in JLK projects:</p>
          <ul>
            <li>Simple and powerful front end; usually Bootstrap</li>
            <li>PHP Framework CodeIgniter</li>
            <li>MySQL database</li>
            <li>LAMP Stack (Linux OS, Apache Web Server, MySQL Database, PHP environment)</li>
          </ul>
          <p>The above are the mostly used technologies by JLK Consulting. However, it doesn't mean that we will not use alternatives if customer desires
          a different option.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="<?php echo base_url() ;?>assets/img/app1.jpg" alt="">
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>Current Projects</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo base_url() ;?>assets/img/proj1.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Fair-Ball</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo base_url() ;?>assets/img/proj2.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">ARRL EB Section</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo base_url() ;?>assets/img/proj3.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Birotary Engine</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send JLK a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="4" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &nbsp;&copy;&nbsp; 2003-<script type="text/javascript">
        var today = new Date();
        document.write(today.getFullYear() );
     </script> &nbsp;&nbsp;&nbsp;&nbsp; JLK Consulting &nbsp;&nbsp;&nbsp;&nbsp; All Rights Reserved</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ;?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ;?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
