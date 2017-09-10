<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Aletheia Ministries</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    </head>
    
    <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    
      <?php include 'navigation.php'; ?>
      
    <!-- Carousel -->

    <div id="carousel-example-generic" class="carousel slide caro" data-ride="carousel">
    <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/Aletheia_banner.png" alt="Welcome!" class="carouselSize">
      </div>      
      <!-- <div class="item">
        <img src="img/Pray-for-France.jpg" alt="Pray" class="carouselSize">
      </div> -->
    </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<!-- end Carousel -->

    <div class="container caro">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Are You New?</h2>
          <p>Thank you for visiting Aletheia Ministries! Take a look around to connect with our ministry areas, access recent sermons, and to find out more about us. The best way to experience Aletheia Ministries is to join us for worship, and we would love to visit with you in person.</p>
          <p><button id="location1" type="button" class="btn btn-primary" data-container="body" data-toggle="clickover" data-placement="right" data-trigger="hover" data-original-title="Worship Times and Location" data-content="Sunday Service: 2:00 PM <br> First Friday Service (first Friday of every month): 7:30 PM <br> Location: <a href='https://www.google.com/maps/place/260+Walnut+Ave/@37.91961,-122.030773' target='_blank'>260 Walnut Ave. Walnut Creek, CA 94598</a>">Worship Times &raquo;</button></p>
        </div>

        <div class="col-lg-4">
          <h2>Upcoming Events</h2>
          <ul>
            <li>Fall Retreat: September 29 - October 1</li>
          </ul>
          <p><a class="btn btn-default" href="events.php">More Details &raquo;</a></p>
        </div>

        <div class="col-lg-4">
          <h2>Recent Sermons</h2>
          <h3><a href="files/sermonaudio/2017.08.27 Aletheia Sunday Service.mp3" target="_blank">August 27th 2017 Sermon</a></h3> 
          <p>The passage is from <a href="https://www.biblegateway.com/passage/?search=1+Corinthians+13:4-8" target="_blank">1 Corinthians 13:4-8</a></p>
          <br>

          <p><a class="btn btn-default" href="sermon-audio.php">More Sermons &raquo;</a></p>
        </div>
      </div>

    </div> <!-- /container -->        

    <hr>
    
    <?php include 'footer.php'; ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <!-- <script src="js/vendor/jquery-1.10.1.min.js"></script>         -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script src="js/vendor/bootstrapx-clickover.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

    </body>
</html>
