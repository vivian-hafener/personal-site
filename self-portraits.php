<html lang="en">

<head>
    <?php include 'app.php';
        $components = new Components;
        $components->createHead('Home');
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
        <hr style="width: 80%;">
        <h2 class="phototitle">Self Portraits</h2>
        <hr style="width: 80%;">
        <img src="assets/media/katahdin.jpg" style="width: 100%; margin-bottom: 1em;"alt="">
        <img src="assets/media/fishing.jpg" style="width: 100%; margin-bottom: 1em;"alt="">
        <img src="assets/media/darkroad.jpg" style="width: 100%; margin-bottom: 1em;"alt="">
        <img src="assets/media/lookout.jpg" style="width: 100%; margin-bottom: 1em;"alt="">
        <img src="assets/media/pemaquid.jpg" style="width: 100%; margin-bottom: 1em;"alt="">
        <img src="assets/media/radio.jpg" style="width: 100%; margin-bottom: 1em;"alt="">
        <img src="assets/media/milkyway.jpg" style="width: 100%; margin-bottom: 1em;"alt="">
        <img src="assets/media/dock.jpg" style="width: 100%; margin-bottom: 1em;"alt="">
        <img src="assets/media/triptych.jpg" style="width: 100%; margin-bottom: 1em;"alt="">
      </main>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      </body>
<?php $components->createFooter()?>
</html>