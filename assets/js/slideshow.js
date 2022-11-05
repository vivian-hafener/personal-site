var imageArray = ["assets/media/katahdin.jpg"]

var arraySize = imageArray.length;

var currentImage = 0;

setInterval(runit, 5000);

function runit() {
    document.getElementById("home").style.background="url(" + imageArray[currentImage] + ")  background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center top; color: #fff;";
    currentImage++;
    if (currentImage == arraySize) {
        currentImage = 0;
    }
}