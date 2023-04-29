<html lang="en">

<head>
    <?php include 'app.php';
        $components = new Components;
        $components->createHead('Vivian Hafener');
    ?>
</head>
<body onload="runit(); cacheImageArray()">
    <nav>
        <?php $components->createNav();?>
    </nav>
    <div id="home"class= "main-div"style="margin-right: 0px; background: url(assets/media/katahdin.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center top; color: #fff;" alt="A slideshow of landscape photographs. For more detailed alt text, the photos page has text for each picture.">
  <div class="container" height="">
    <div id="nameplate" style="background:radial-gradient(rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 0%);">
      <img class="headline-alt" src="assets/svg/down.svg" width="200px" height="200px" style="color: #f2f2f2;"/>
    </div> 
  </div>
</div>

<div class="container">
  <main style="margin-right: 0px; ">
    <hr class="featurette-divider">
    <code class="codeHead">[you @ vivi's site ~]$ whoami</code><br>
    <code class="codeBody">
      Hey! I'm vivian.<br>
      I love learning by tinkering and trying new things.<br>
      I do science, computers, ham radio, photography, and whatever else interests me at the moment.<br>
      I also hike, longboard, climb, and read.
    </code><br>
    <hr class="featurette-divider">

    <code class="codeHead">[you @ vivi's site ~]$ ls ~/science</code><br>
    <code class="codeBody">
      I research ways to increase the efficiency of HPC clusters and supercomputers. I am primarily focused on methods of visualizing the HPC queue, to enable better decision-making and increase heuristic understanding of the concepts surrounding HPC scheduling.<br>
    </code><br>
    <hr class="featurette-divider">
    <code class="codeHead">[you @ vivi's site ~]$ ls ~/photography</code><br>
    <code class="codeBody">
      I am a photographer. Photography enables me to share the beauty I see in the world with others. I primarily take pictures of landscapes, but also love taking photos of my friends. There's something really special to me about being able to give people nice photos of themselves.
    </code><br>
    <code class="codeHead">[you @ vivi's site ~]$ <a href="photos.php">more ~/photography</a></code><br>
    <hr class="featurette-divider">
    <code class="codeHead">[you @ vivi's site ~]$ cat /dev/random</code><br>
    <code class="codeBody">
      I also do other stuff. I'm a technican-class ham radio operator. I climb and boulder. Sometimes I bike, hike, or longboard. I also love reading. I maintain a reading list <a href="reading.html">here</a>.
    </code><br>
    <hr class="featurette-divider">
    <code class="codeHead">[you @ vivi's site ~]$ ls ~/friends</code><br>
    <code class="codeBody">
      I have some amazing friends who do really cool stuff. Check out their pages here:
    </code><br>
    <a class="friends" href="index.html"><img src="assets/8831/vivi.png"></a>
    <a class="friends" href="https://adryd.com/"><img src="assets/8831/adryd.png"></a>
    <a class="friends" href="https://mstrodl.com/"><img src="assets/8831/mary.png"></a>
    <a class="friends" href="https://breq.dev"><img src="assets/8831/breq.png"></a>
    <h4 style="display: inline;"><span class="badge badge-pill badge-info"><a style=" color: #f2f2f2;"href="https://philo.gay/">philo</a></span></h4>
    <h4 style="display: inline;"><span class="badge badge-pill badge-info"><a style=" color: #f2f2f2;"href="https://galenguyer.com/">galen</a></span></h4>

</main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
<?php $components->createFooter()?>
</html>
