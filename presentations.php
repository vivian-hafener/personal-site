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
            <h2>Presentations</h2>
        </div>
        <iframe src="https://viv-codes.github.io" style="width: 100%; height: 40em; border: none;"></iframe>

      </main>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      </body>
<?php $components->createFooter()?>
</html>