let nextButton = document.getElementById("next-button");
let prevButton = document.getElementById("prev-button");
let bullet1 = document.getElementById("bullet1");
let bullet2 = document.getElementById("bullet2");
let bullet3 = document.getElementById("bullet3");
let bullet4 = document.getElementById("bullet4");
let content1 = document.getElementById("content1");
let content2 = document.getElementById("content2");
let content3 = document.getElementById("content3");
let content4 = document.getElementById("content4");
let currentDiv = 0;

bullet1.style.backgroundColor = "#673AB7";
content1.style.display = "block";

nextButton.addEventListener("click", function() {
    let current = document.getElementsByClassName("content-div")[currentDiv];
    current.style.display = "none";
    let currentBullet = document.getElementsByClassName("bullet")[currentDiv];
    currentBullet.style.backgroundColor = "#673AB7";
    currentDiv = (currentDiv + 1) % 4;
    current = document.getElementsByClassName("content-div")[currentDiv];
    current.style.display = "block";
    currentBullet = document.getElementsByClassName("bullet")[currentDiv];
    currentBullet.style.backgroundColor = "#673AB7";
});

var imageIndex = 0;
var images = ["/assets/img/35.jpg", "/assets/img/93.jpg", "/assets/img/39.jpg", "/assets/img/51.jpg"];

setInterval(function() {
    document.getElementById("content-img").style.backgroundImage = `url(${images[imageIndex]})`;
    imageIndex = (imageIndex + 1) % images.length;
}, 5000);
