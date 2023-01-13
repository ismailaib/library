let nextButton = document.getElementById("next-button");
let start = document.getElementById("start");
let bullet1 = document.getElementById("bullet1");
let bullet2 = document.getElementById("bullet2");
let bullet3 = document.getElementById("bullet3");
let bullet4 = document.getElementById("bullet4");
let content1 = document.getElementById("content1");
let content2 = document.getElementById("content2");
let content3 = document.getElementById("content3");
let content4 = document.getElementById("content4");
let currentDiv = 0;
let clickCount = 0;

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
    clickCount++;
    if (clickCount === 3) {
        nextButton.style.display = 'none';
    }
});

var imageIndex = 0;
var images = ['../img/35.jpg','../img/39.jpg','../img/51.jpg','../img/93.jpg'];

setInterval(function() {
    document.getElementById("content-img").style.backgroundImage = `url(${images[imageIndex]})`;
    imageIndex = (imageIndex + 1) % images.length;
}, 5000);

function select1() {
    document.getElementById("cat1").style.backgroundColor = "#e4e4f7";
}
function select2() {
    document.getElementById("cat2").style.backgroundColor = "#e4e4f7";
}
function select3() {
    document.getElementById("cat3").style.backgroundColor = "#e4e4f7";
}
function select4() {
    document.getElementById("cat4").style.backgroundColor = "#e4e4f7";
}

$(document).ready(function() {
    $("#name").on("input", function() {
      if ($(this).val().length === 0) {
        $("#next-button").prop("disabled", true);
        message.innerHTML = "This is a top message";
      } else {
        $("#next-button").prop("disabled", false);
      }
    });
  });
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
start.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}