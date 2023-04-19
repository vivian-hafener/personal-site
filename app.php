<?php
class Components
{

    public function createHead(string $title)
    {
        echo '<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Im Vivian Hafener, a researcher, student, and photographer.">
    <meta name="author" content="Vivian Hafener">
    <title>Vivian Hafener</title>
    <script src="assets/js/slideshow.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>';
    }
    public function createNav()
    {
        echo '<nav style="width: 280px;" id="navbar-desktop">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 100%;">
          <img width="248px" height="248px" src="assets/media/vivi.jpg" style="border-radius: 50%;">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <h1 style="text-align: center; margin: auto; font-size: 1.8em; padding-top: 1em;">Vivian Hafener</h1>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto" id="mainNav">
            <li class="nav-item">
              <a href="index.php" class="nav-link text-white" aria-current="page">
                <img class="bi me-2" width="16" height="16" src="assets/svg/home.svg" style="filter: invert(100%);"/>
                Home
              </a>
            </li>
            <li class="nav-item">
              <a href="photos.php" class="nav-link text-white" aria-current="page">
                <img class="bi me-2" width="16" height="16" src="assets/svg/camera.svg" style="filter: invert(100%);"/>
                Photos
              </a>
            </li>
            <!-- <li>
              <a href="blog.php" class="nav-link text-white">
                <img class="bi me-2" width="16" height="16" src="assets/svg/terminal.svg" style="filter: invert(100%);"/>
                Blog
              </a>
            </li> -->
            <li>
              <a href="presentations.php" class="nav-link text-white">
                <img class="bi me-2" width="16" height="16" src="assets/svg/presentation-board.svg" style="filter: invert(100%);"/>
                Presentations
              </a>
            </li>
          </ul>
          <hr>
        </div>
    </nav>
    <nav id="navbar-mobile" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Vivian Hafener</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="photos.php">Photography</a>
          <!-- <a class="nav-item nav-link" href="blog.php">Blog</a> -->
          <a class="nav-item nav-link" href="presentations.php">Presentations</a>
    
        </div>
      </div>
    </nav>';
    }
    public function createFooter()
    {
        echo '<div class="container">
    <footer class="d-flex py-3 my-4 border-top" style="justify-content: center; flex-direction: column; align-items: center;">
        <span class="text-muted" style="flex-basis: 100%;">&copy; Vivian Hafener 2022</span>
        <span class="text-muted" style="flex-basis: 100%;"><a href="https://github.com/viv-codes/personal-site/tree/rewrite3">Source code</a></span>
        <span class="text-muted" style="flex-basis: 100%;">Icons from Iconscout</span>
    </footer>
  </div>';
    }
    public function createPhotoPage($directoryName) {
	$statement = file_get_contents('assets/media/'.$directoryName.'/statement.txt');
        echo '<div class="container">
        <p style="font-family: monospace">I only photograph for fun. All images copyright Vivian Hafener.</p>
    </div>
    <hr style="width: 80%;">
    <h2 class="phototitle">'.$directoryName.'</h2>';
    if ($statement != NULL) {
	    echo '<hr style="width: 80%;"><h4 class="phototitle">Statement:</h4>
	<p class="statement" style="text-align: center; width: 80%; margin: auto;">'.$statement.'</p>';
    }
    echo '<hr style="width: 80%;">';
        $directory = "assets/media/".$directoryName;
            $images = glob($directory . "/*.jpg");
            $i = 0;
            foreach($images as $image)
            {
                echo '<img class="photo" src="'.$image.'" style="width: 100%; margin-bottom: 1em;"alt="">';
                $i++;
	    }
	    $pngs = glob($directory . "/*.png");
	    foreach($pngs as $png) 
	    {
		    echo '<img class="photo" src="'.$png.'"style="width: 100%; margin-bottom: 1em;"alt="">';
		    $i++;
	    }
            if ($i == 0) {
                echo '<h3 style="text-align: center;">Coming soon!</h3>';
            }
    }
    public function createPhotoGallery() {
        echo '<div class="container">
        <h2 class="phototitle">Photography</h2>
        <p style="font-family: monospace">I only photograph for fun. All images copyright Vivian Hafener.</p>
    </div>
    <!-- <div class="divider"></div> -->
    <hr style="width: 80%;">
    <h2 class="phototitle">Bodies of work</h2>
    <hr style="width: 80%;">
    <div class="gallery_title">
      <h3>Breathe (2020-2021)</h3>
      <h3>Something of a home (2023)</h3>
    </div>
    <div class="gallery">
      <div class="album">
        <div class="album_cover" style="background: url(\'/assets/media/Breathe/Hafener-09.jpg\') 50% 50% no-repeat; background-size:900px 600px;"><a href="photos.php?album=Breathe"></a></div>
        <div class="album_cover" style="background: url(\'/assets/media/Something/0001.png\') 50% 50% no-repeat; background-size:900px 600px;"><a href="photos.php?album=Something"></a></div>
      </div>
    </div>
    
  </div>'
    ;
    }
}
?>

<!-- Places gallery html -->
<!-- <hr style="width: 80%;">
    <h2 class="phototitle">Places</h2>
    <hr style="width: 80%;">
    <div class="gallery_title">
      <h3>Maine</h3>
      <h3>Toronto</h3>
      <h3>Boston</h3>
    </div>
    <div class="gallery">
    <div class="album">
    <div class="album_cover" style="background: url(\'/assets/media/Landscapes/1.jpg\') 50% 50% no-repeat; background-size:900px 600px;"><a href="photos.php?album=Landscapes"></a></div>
    <div class="album_cover" style="background: url(\'/assets/media/Landscapes/2.jpg\') 50% 50% no-repeat; background-size:900px 600px;"><a href="photos.php?album=2022"></a></div>
    <div class="album_cover" style="background: url(\'/assets/media/Landscapes/3.jpg\') 50% 50% no-repeat; background-size:900px 600px;"><a href="photos.php?album=Self Portraits"></a></div> -->
