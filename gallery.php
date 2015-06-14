<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Photos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
        <script src="galleria/galleria-1.3.5.min.js"></script>

        <script src="js/gallery.js"></script>

        <style>
            .galleria{ width: 700px; height: 400px; background: #000 }
        </style>

        <script type="text/javascript">

            var jsondata;

            $(function(){
                $("#selectBoxId").change(function(){
                    var selectedValue = $(this).find(":selected").val();
                    //alert("the selected value is: " + selectedValue);
                    $.get("getPicsFromDir.php", {dir: selectedValue}, function(data,status){
                        //alert("Data: " + data + "\nStatus: " + status);
                        jsondata = JSON.parse(data);
                        Galleria.run('#galleria', {
                            dataSource: jsondata
                        });
                    });            

                });

            });        

        </script>

    </head>
    
    <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    
      <?php include 'navigation.php'; ?>

        <!-- List Box dynamically loaded by directories -->
        <?php
            $dir = "pics/Aletheia_Gallery/";
            $dh = openDir($dir);
            $list[] = "Choose a Gallery...";            
            while (($dirname = readDir($dh)) !== false) {                
                if ($dirname != "." && $dirname != ".." && $dirname != ".DS_Store") {
                    $list[] = $dirname;
                }
                
            }
            $array_length = count($list);
        ?>
        <select name="dynamic_data" id="selectBoxId">
        <?php
            for ($i=0;$i<$array_length;$i++){
        ?>
        <option value="<?=$list[$i];?>"><?=$list[$i];?></option>
        <?php
            }
        ?>
        </select>

        <!-- gallery -->
        <div id="galleria" class="galleria">
         
        </div>

        <?php include 'footer.php'; ?>

		<script>
    		Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
    		//Galleria.run('#galleria');
		</script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- <script src="js/vendor/jquery-1.10.1.min.js"></script>         -->
        <script>window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><\/script>')</script>

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