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
    if (clickCount ===3 ) {
        nextButton.style.display = 'none';
    }
});

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
function select5() {
  document.getElementById("cat5").style.backgroundColor = "#e4e4f7";
}
function select6() {
  document.getElementById("cat6").style.backgroundColor = "#e4e4f7";
}
function select7() {
  document.getElementById("cat7").style.backgroundColor = "#e4e4f7";
}
function select8() {
  document.getElementById("cat8").style.backgroundColor = "#e4e4f7";
}
function submitForms() {
    document.getElementsByTagName("form")[0].submit();
}

