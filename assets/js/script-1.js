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

let container = document.getElementById("container-1");

for (let i = 1; i <= 12; i++) {
  let card = document.createElement("div");
  card.classList.add("card");
  card.id = "card-" + i;
  container.appendChild(card);
}

for (let i = 1; i <= 12; i++) {
    let card = document.getElementById("card-" + i);
    if(i <= 3) {
      card.style.backgroundImage = "url('assets/img/war-" + i + ".jpg')";
    } else if(i > 3 && i <= 6) {
      card.style.backgroundImage = "url('assets/img/adv-" + (i-3) + ".jpg')";
    } else if(i > 6 && i <= 9) {
      card.style.backgroundImage = "url('assets/img/cla-" + (i-6) + ".jpg')";
    } else if(i > 9 && i <= 12) {
      card.style.backgroundImage = "url('assets/img/cri-" + (i-9) + ".jpg')";
    }
  }



let container2 = document.getElementById("container-2");

for (let i = 13; i <= 24; i++) {
  let card = document.createElement("div");
  card.classList.add("card");
  card.id = "card-" + i;
  container2.appendChild(card);
}

for (let i = 13; i <= 24; i++) {
    let card = document.getElementById("card-" + i);
    if(i <= 15) {
      card.style.backgroundImage = "url('assets/img/ho-" + (i-12) + ".jpg')";
    } else if(i > 15 && i <= 18) {
      card.style.backgroundImage = "url('assets/img/bio-" + (i-15) + ".jpg')";
    }else if(i > 18 && i <= 21) {
      card.style.backgroundImage = "url('assets/img/war-" + (i-18) + ".jpg')";
    }else if(i > 21 && i <= 24) {
      card.style.backgroundImage = "url('assets/img/adv-" + (i-21) + ".jpg')";
    }
  }
  


let container3 = document.getElementById("container-3");

for (let i = 25; i <= 36; i++) {
  let card = document.createElement("div");
  card.classList.add("card");
  card.id = "card-" + i;
  container3.appendChild(card);
}

for (let i = 25; i <= 36; i++) {
    let card = document.getElementById("card-" + i);
    if(i <= 27) {
        card.style.backgroundImage = "url('assets/img/adv-" + (i-24) + ".jpg')";
    } else if(i > 27 && i <= 30) {
        card.style.backgroundImage = "url('assets/img/ho-" + (i-27) + ".jpg')";
    }else if(i > 30 && i <= 33) {
        card.style.backgroundImage = "url('assets/img/adv-" + (i-30) + ".jpg')";
    }else if(i > 33 && i <= 36) {
        card.style.backgroundImage = "url('assets/img/war-" + (i-33) + ".jpg')";
    }
  }