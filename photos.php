<html lang="en">
    <head>
        <?php include 'app.php';
            $components = new Components;
            $components->createHead('Vivian Hafener - Landscapes');
        ?>
    </head>
    <body onload="runit(); cacheImageArray()">
        <nav>
            <?php $components->createNav();?>
        </nav>
        <main>
            <?php
            if (isset($_GET["album"])) {
                $album = $_GET["album"];
                $components->createPhotoPage($album);

            } else {
              $components->createPhotoGallery();
            }
            ?>           

        </main>
        </body>
    <?php $components->createFooter()?>
</html>