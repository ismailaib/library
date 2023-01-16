var containers = document.getElementsByClassName("container-active"); // get all containers
var currentContainer = 0; // keep track of the current container

containers[currentContainer].classList.add("active"); // set the first container as active

document.getElementById("next").addEventListener("click", function() {
    containers[currentContainer].classList.remove("active"); // hide the current container
    currentContainer = (currentContainer + 1) % containers.length; // increment the current container
    containers[currentContainer].classList.add("active"); // show the new container
});

document.getElementById("prev").addEventListener("click", function() {
    containers[currentContainer].classList.remove("active"); // hide the current container
    currentContainer = (currentContainer - 1 + containers.length) % containers.length; // decrement the current container
    containers[currentContainer].classList.add("active"); // show the new container
});
