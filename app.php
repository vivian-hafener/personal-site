<?php
class Components
{


    public function createPageComponent($size, $header, $content, $path, $img_path = null, $img_alt = null, $sub_tag = null)
    {

        switch ($size) {
            case 'small':
                echo '<div class="smallComponent" onclick="route(\'' . $path . '\')">
            <div class="pageComponentContent">
            <h2>' . $header . '</h2>
                <p>' . $content . '</p>
            </div></div>';
                break;
            case 'medium':
                echo '<div class="mediumComponent" onclick="route(\'' . $path . '\')">
            <div class="pageComponentContent">
            <h2>' . $header . '</h2>
                <p>' . $content . '</p>
            </div>
            <div class="pageComponentImage">
                <img src="' . $img_path . '" alt="' . $img_alt . '">
            </div></div>';
                break;
            case 'large':
                echo '<div class="largeComponent">
            <div class="pageComponentContent">
            <h3>// ' . $sub_tag . ' //</h3>
            <h2>' . $header . '</h2>
                <p>' . $content . '</p>
            <a href="' . $path . '">
                <div class="button">
                    <div><img src="images/mind.png" alt="play button" height="40" width="40"></div>
                    <div>Start Learning Now</div>
                </div>    
            </a> 
            </div>
            <div class="pageComponentImage">
                <img src="' . $img_path . '" alt="' . $img_alt . '">
            </div> </div>';
                break;
            case 'mini':
                echo '<div class="miniComponent" onclick="route(\'' . $path . '\')">
                <div class="pageComponentContent">
                <h2>' . $header . '</h2>
                    <p>' . $content . '</p>
               
                </div>
                 </div>';
                break;
            default:
                # code...
                break;
        }
    }

    public function createHead(string $title)
    {
        echo '<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
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
}
?>

