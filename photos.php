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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
        </body>
    <?php $components->createFooter()?>
</html>
