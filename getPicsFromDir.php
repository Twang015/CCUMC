<?php
            class Picture {
                public $image = "";
            }            
        // path to directory
            //$directory = "pics/Aletheia_Gallery/Apr 22, 2014 - Earth Day/";
            $directory = "pics/Aletheia_Gallery/" . htmlspecialchars($_GET["dir"]) . "/";
            //$return_array = array();
            $handle = openDir($directory); // open the directory
            while (($file = readDir($handle)) !== false) { // Read the directory
            // filter the directory
                if ($file != "." && $file != ".." && !is_dir($file)) {
                // Allow only images (filter)
                    if (strstr($file, ".gif") ||
                        strstr($file, ".png") ||
                        strstr($file, ".jpg")) {
                        // Path to the actual file
                            $directory_file = $directory . $file;
                            // Get image information (width, height)
                            $info = getImageSize($directory_file);        
                            // add the pic to the gallery
                            $pic = new Picture();
                            $pic->image = $directory_file;
                            $pics[] = $pic;
                
                    }
                }
            }
        closeDir($handle); // Close the directory
        echo json_encode($pics);
?> 