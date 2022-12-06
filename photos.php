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
                echo '<div class="container">
                <h2>Photography</h2>
                <p style="font-family: monospace">This is not a portfolio. I only photograph for fun. All images are licensed under the Creative Commons <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/">CC BY-NC-ND 4.0</a> license.</p>
            </div>
            <!-- <div class="divider"></div> -->
            <hr style="width: 80%;">
            <div class="gallery_title">
              <h3>Landscapes</h3>
              <h3>2022-2023</h3>
              <h3>Self Portraits</h3>
            </div>
            <div class="gallery">
              <div class="album">
                <div class="album_cover" style="background: url(\'/assets/media/Landscapes/katahdin.jpg\') 50% 50% no-repeat; background-size: 450px 300px;"><a href="photos.php?album=Landscapes"></a></div>
                <div class="album_cover" style="background: url(\'/assets/media/Landscapes/darkroad.jpg\') 50% 50% no-repeat; background-size: 450px 300px;"><a href="photos.php?album=2022-2023"></a></div>
                <div class="album_cover" style="background: url(\'/assets/media/Landscapes/dock.jpg\') 50% 50% no-repeat; background-size: 450px 300px;"><a href="photos.php?album=Self Portraits"></a></div>
              </div>
            </div>
            <hr style="width: 80%;">

            <div class="gallery_title">
              <h3>Maine</h3>
              <h3>Toronto</h3>
              <h3>Boston</h3>
            </div>
            <div class="gallery">
              <div class="album">
                <div class="album_cover" style="background: url(\'/assets/media/Landscapes/katahdin.jpg\') 50% 50% no-repeat; background-size: 450px 300px;"><a href="photos.php?album=Maine"></a></div>
                <div class="album_cover" style="background: url(\'/assets/media/Landscapes/darkroad.jpg\') 50% 50% no-repeat; background-size: 450px 300px;"><a href="photos.php?album=Toronto"></a></div>
                <div class="album_cover" style="background: url(\'/assets/media/Landscapes/dock.jpg\') 50% 50% no-repeat; background-size: 450px 300px;"><a href="photos.php?album=New Mexico"></a></div>
              </div>'
            ;
            }
            ?>           

        </main>
        </body>
    <?php $components->createFooter()?>
</html>