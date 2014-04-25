<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Events</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="bootstrap-calendar/css/calendar.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>

        <?php include 'navigation.php'; ?>

        <div class="container">

        <div class="page-header">

        <div class="pull-right form-inline">
            <div class="btn-group">
                <button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
                <button class="btn btn-default" data-calendar-nav="today">Today</button>
                <button class="btn btn-primary" data-calendar-nav="next">Next >></button>
            </div>
            <div class="btn-group">
                <button class="btn btn-warning" data-calendar-view="year">Year</button>
                <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                <button class="btn btn-warning" data-calendar-view="week">Week</button>
                <button class="btn btn-warning" data-calendar-view="day">Day</button>
            </div>

            <h3></h3>
        </div>
        
        </div>

        <div class="row">
        <div class="col-md-9">
            <div id="calendar"></div>
        </div>
        <div class="col-md-3">
            <h4>Events</h4>
            <small>This list is populated with events dynamically</small>
            <ul id="eventlist" class="nav nav-list"></ul>
        </div>

        </div>

        <hr>

        <?php include 'footer.php'; ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

        <script type="text/javascript" src="underscore/underscore-min.js"></script>
        <script type="text/javascript" src="bootstrap-calendar/js/calendar.js"></script>
        <script type="text/javascript" src="js/calendar-app.js"></script>
        <script src="js/vendor/bootstrapx-clickover.js"></script>

    </body>
</html>