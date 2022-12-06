<html lang="en">

<head>
    <?php include 'app.php';
        $components = new Components;
        $components->createHead('Vivian Hafener - Photos');
    ?>
</head>
<body onload="runit(); cacheImageArray()">
    <nav>
        <?php $components->createNav();?>
    </nav>
      <main>
        <div class="container">
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
            <div class="album_cover" style="background: url('/assets/media/Landscapes/katahdin.jpg') 50% 50% no-repeat; background-size: 450px 300px;"><a href="photos.php?album=Landscapes"></a></div>
            <div class="album_cover" style="background: url('/assets/media/Landscapes/darkroad.jpg') 50% 50% no-repeat; background-size: 450px 300px;"><a href="2223.php"></a></div>
            <div class="album_cover" style="background: url('/assets/media/Landscapes/dock.jpg') 50% 50% no-repeat; background-size: 450px 300px;"><a href="self-portraits.php"></a></div>
          </div>
        </div>
      </main>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      </body>
<?php $components->createFooter()?>
</html>