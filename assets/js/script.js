let nextButton = document.getElementById("next-button");
let prevButton = document.getElementById("prev-button");
let div1 = document.getElementById("div1");
let div2 = document.getElementById("div2");
let div3 = document.getElementById("div3");
let div4 = document.getElementById("div4");
let currentDiv = 0;

div1.style.display = "block";

nextButton.addEventListener("click", function() {
    let current = document.getElementsByClassName("content-div")[currentDiv];
    current.style.display = "none";
    currentDiv = (currentDiv + 1) % 4;
    current = document.getElementsByClassName("content-div")[currentDiv];
    current.style.display = "block";
});
prevButton.addEventListener("click", function() {
    let current = document.getElementsByClassName("content-div")[currentDiv];
    current.style.display = "none";
    currentDiv = (currentDiv - 1 + 4) % 4;
    current = document.getElementsByClassName("content-div")[currentDiv];
    current.style.display = "block";
});
