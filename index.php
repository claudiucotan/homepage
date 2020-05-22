<!DOCTYPE html>
<!-- Calling the config file -->
<?php require('homepage/config.php'); ?>
<!-- ----------------------- -->
<html>
    <head>
        <title>homepage</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="homepage/css/style.css" />
    </head>
    <body>
        <div class="container">
            <h1>Sites List</h1>
            <p>Here you can see your sites list</p>
            
            <ul>
            <?php 
               /* If the path of $directory (under config.php) exists and is a folder, we list all the sub-folders of that path. */           
               if (is_dir($directory)){

                foreach (glob ($recursively, GLOB_ONLYDIR) as $file) {
                    $dirname = basename($file);
                    printf( '<li>'.$dirname.'</li>' );

                };

               }
               /* -------------------------------------------------------------------------------------------------- */
               /* If the path of $directory (under config.php) do not exists, or is not a folder : */
               else {
                
                echo 'There are no sites ! <br> Or <br> You have to change the "directory" path in the config.php file.';

               }
               /* ------------------------------------------------------------------------------- */
                

            ?>
            </ul>
        </container>
        <footer>
            <p><a href="https://github.com/claudiucotan/homepage">Fork me</a> on Github</p>
        
        </footer>
    </body>

</html>