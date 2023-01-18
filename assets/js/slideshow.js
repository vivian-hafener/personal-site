var imageArray = ["assets/media/Landscapes/0.jpg","assets/media/Landscapes/6.jpg", "assets/media/Landscapes/3.jpg", "assets/media/Landscapes/4.jpg", "assets/media/Landscapes/3.jpg", "assets/media/Landscapes/7.jpg", "assets/media/Landscapes/8.jpg"]

var arraySize = imageArray.length;

function cacheImageArray() {
    preloadImages(imageArray);
}

var currentImage = 0;

setInterval(runit, 5000);

function runit() {
    document.getElementById("home").style.backgroundImage="url(" + imageArray[currentImage] + ")";
    document.getElementById("home").style.backgroundSize="cover";
    if (imageArray[currentImage] == "assets/media/Landscapes/radio.jpg") {
        document.getElementById("home").style.backgroundPosition="center bottom";

    }
    else {
        document.getElementById("home").style.backgroundPosition="center";

    }
    document.getElementById("home").style.backgroundRepeat="no-repeat";
    document.getElementById("home").style.backgroundAttachment="fixed";

    // document.getElementById("home").style="background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center top; color: #fff;";
    // ="url(" + imageArray[currentImage] + ")  background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center top; color: #fff;";
    console.log("Changed image to "+imageArray[currentImage]);
    currentImage++;
    if (currentImage == arraySize) {
        currentImage = 0;
    }
};

function preloadImages(array) {
    if (!preloadImages.list) {
        preloadImages.list = [];
    }
    var list = preloadImages.list;
    for (var i = 0; i < array.length; i++) {
        var img = new Image();
        img.onload = function() {
            var index = list.indexOf(this);
            if (index !== -1) {
                // remove image from the array once it's loaded
                // for memory consumption reasons
                list.splice(index, 1);
            }
        }
        list.push(img);
        img.src = array[i];
    }
}