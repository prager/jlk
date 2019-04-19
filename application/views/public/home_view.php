<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<meta property="og:title" content="JLK" />
	<meta property="og:url" content="http://jlkconsulting.info" />
	<meta property="og:image" content="http://files.kulisek.org/jlk-og.png" />
	<meta property="og:description" content="Technology Consulting and Web Applications Development" />
	
    <title>JLK Consulting</title>

	<link rel="icon" type="image/png" sizes="96x96"  href="<?php echo base_url() ;?>/assets/img/ico.png">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ;?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ;?>assets/css/styles.css" rel="stylesheet">

  </head>

<body> 
  
 <!-- <div style="background-color: #D3D3D3; padding-top: 25px; padding-bottom: 25px;"> -->
 <div class="container fixed-top">
 <div id="bannerbg">
 <div class="row">
 <div class="col-lg-12">
  <h1>JLK Consulting</h1>
  <p class="lead">Web applications development</p>
  <hr class="my-4">
  <!-- <a href="#contact" class="btn btn-light">Contact the JLK Team</a> -->
</div>  
</div>
</div>
</div>
    <!-- Page Content -->
    <div style="padding-top: 180px;"></div>
    <div class="container">
	<?php 
	if($msg != '') {?>
	<div class="row">
	<span style="color: red;"><?php echo $msg; ?></span>
	</div>
	<div class="row">&nbsp;</div>
	<?php }?>
      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Technology</h2>
          <p>Current technology features that are commonly included in JLK projects:</p>
          <ul>
            <li>Simple and powerful front end; usually Bootstrap</li>
            <li>PHP Framework CodeIgniter</li>
            <li>MySQL database</li>
            <li>LAMP Stack (Linux OS, Apache Web Server, MySQL Database, PHP environment)</li>
            <li>CMS (Content Mangement System) such as Wordpress</li>
          </ul>
          <p>The above are the mostly used technologies by JLK Consulting. However, it doesn't mean that alternatives will not be used if 
          a customer desires different options.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="<?php echo base_url() ;?>assets/img/app1.jpg" alt="">
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>Current Projects</h2>

      <div class="row">
        <div class="col-md-4 col-sm-12 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="<?php echo base_url() ;?>assets/img/proj1.png" alt="">
            <div class="card-body">
              <h4 class="card-title">
                <?php echo anchor_popup('http://fair-ball.jlkconsulting.info/index.php/Public_ctl', 'Fair-Ball'); ?>

              </h4>
              <p class="card-text">Fair-Ball solves the issues of dramas that plague many youth baseball teams.
              It is not only baseball stats program, but using unique formulas also creates ideal team lineups for upcoming games.</p>
		    </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="<?php echo base_url() ;?>assets/img/proj2.png" alt="">
            <div class="card-body">
              <h4 class="card-title">
                <?php echo anchor_popup('http://arrleb.org', 'ARRL EB Section'); ?>
              </h4>
              <p class="card-text">This is a portal for ARRL Eeast Bay Section that provides information for Ham Radio Amateurs
              in San Francisco East Bay area.</p>
              
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="<?php echo base_url() ;?>assets/img/proj3.png" alt="">
            <div class="card-body">
              <h4 class="card-title">
                <?php echo anchor_popup('http://birotaryengine.com', 'Birotary Engine'); ?>
              </h4>
              <p class="card-text">Birotary Engine is a unique invention by a brilliant engineer from Czech Republic. It involves
              a true revolution in internal combustion engine designs.</p>
			</div>
          </div>
        </div>
      </div>

      <div class="row" id="contact">
        <div class="col-lg-7 mb-3">
          <h3>Send JLK a Message</h3>
          <?php 
            $rand_int = rand(1, 999);
            echo form_open('public_ctl/msg/' . $rand_int);?>
            <div class="control-group form-group">
              <div class="controls">
                <?php $name_arr = array(
				'name'  => 'name',
				'id' => 'name',
				'value' =>'',
				'maxlength' => '50',
				'size' => '50',
                'class'	=> 'form-control',
       			'placeholder' => 'Your Full Name',
                'required data-validation-required-message' => 'Please, enter your full name'
                );?>
        	<span style="color: red;"><?php echo form_error('name'); ?></span>
        	<?php echo form_input($name_arr); ?>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <?php $phone_arr = array(
				'name'  => 'phone',
				'id' => 'phone',
				'value' => '',
				'maxlength' => '50',
				'size' => '50',
                'class'	=> 'form-control',
                'placeholder' => 'Phone Number',
                'required data-validation-required-message' => 'Please, enter your phone number');?>
            	<span style="color: red;"><?php echo form_error('subj'); ?></span>
            	<?php echo form_input($phone_arr); ?>
			  </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <?php $email_arr = array(
				'name'  => 'email',
				'id' => 'email',
				'value' => '',
				'maxlength' => '50',
				'size' => '50',
                'class'	=> 'form-control',
                'placeholder' => 'Your Email',
                'required data-validation-required-message' => 'Please, enter your email');?>
          		<span style="color: red;"><?php echo form_error('email'); ?></span>
          		<?php echo form_input($email_arr); ?>
          		
          		<?php $email_honey = array(
				'name'  => 'test_email-' . $rand_int,
				'id' => 'test_email',
				'value' => '',
				'maxlength' => '50',
				'size' => '50',
                'class'	=> 'form-control');
          		echo form_input($email_honey); ?>
			  </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <?php $text_arr = array(
				'name'  => 'msg',
				'id' => 'msg',
				'value' => '',
				'rows' => '5',
                'class'	=> 'form-control',
                'placeholder' => 'Message',
                 'required data-validation-required-message' => 'Please, enter your message');?>
      			<span style="color: red;"><?php echo form_error('msg'); ?></span>
      			<?php echo form_textarea($text_arr); ?></div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <?php
        	echo form_submit('submit', ' Send Message', 'class="btn btn-primary"');
        	echo form_close();?>
        </div>
        <div class="col-lg-5">
        	<br>
        	<p>Located in: Concord, CA</p>
        	<div id="googleMap" style="height: 280px;">&nbsp;</div>
            <script>
            function myMap() {
            var myCenter = new google.maps.LatLng(37.9736091445683, -122.03391736377816);
            var mapProp = {center:myCenter, zoom:9, scrollwheel:true, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker = new google.maps.Marker(
              {   position:myCenter,
                  title:"JLK Consulting \n Concord, CA" 
              });
            marker.setMap(map);
            }
            </script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeOLEmQMnt6O2kEXJ7llYr1xw2y-BEm6M&callback=myMap"></script>
        </div>
      </div>
	<br><br>
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
    <script src="<?php echo base_url() ;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
