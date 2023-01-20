searchForm = document.querySelector(".search-form");

document.querySelector("#search-btn").onclick = () => {
  searchForm.classList.toggle("active");
};





var arr = [{
  "Name": "Le Petit Nicolat",
  "Quantity": "3 in stock",
  "Img":"assets/img/book-0.jpg",
  "Info":"C’est un écolier et il est le héros de l'histoire. Avec lui tout est « chouette ! ». Fils unique, il admire son père et sa mère dont il est « rien fier ». Il a un tas de copains avec qui il a formé la bande des « Vengeurs ».",
  "Type":"adventure",
},
{
  "Name": "Mystery",
  "Quantity": "5 in stock",
  "Img":"assets/img/book-1.jpg",
  "Info":"nothing to see here hihihihihihi.",
  "Type":"horror",
},
{
  "Name": "Harry Potter",
  "Quantity": "1 in stock",
  "Img":"assets/img/book-2.jpg",
  "Info":" Harry et ses amis doivent faire face à une nouvelle menace à Poudlard. La fameuse Chambre des secrets, bâtie plusieurs siècles plus tôt par l'un des fondateurs de l'école, Salazar Serpentard, aurait été rouverte par son « héritier ».",
  "Type":"adventure",
},
{
  "Name": "Land of Stories",
  "Quantity": "6 in stock",
  "Img":"assets/img/book-3.jpg",
  "Info":"Le Pays des contes est un cycle littéraire créé par Chris Colfer dont le premier tome, Le Sortilège perdu, a été publié en 2012. En juin 2017, Chris Colfer annonce sur son compte Twitter l'adaptation cinématographique du cycle littéraire. Il en écrira le scénario et en sera le producteur.",
  "Type":"adventure",
},
{
  "Name": "Steve Jobs",
  "Quantity": "4 in stock",
  "Img":"assets/img/book-4.jpg",
  "Info":"Steve Jobs est la biographie autorisée de Steve Jobs, le cofondateur d'Apple. La biographie a été écrite à la demande de Jobs par Walter Isaacson, qui avait écrit entre autres les biographies de Benjamin Franklin et Albert Einstein.",
  "Type":"biographie",
},
{
  "Name": "Copperfield",
  "Quantity": "2 in stock",
  "Img":"assets/img/book-5.jpg",
  "Info":"The story follows the life of David Copperfield from childhood to maturity. David was born in Blunderstone, Suffolk, England, six months after the death of his father. David spends his early years in relative happiness with his loving, childish mother and their kindly housekeeper, Clara Peggotty. They call him Davy.",
  "Type":"biographie",
},
{
  "Name": "Washington",
  "Quantity": "5 in stock",
  "Img":"assets/img/book-6.jpg",
  "Info":"George Washington est né le 22 février 1732 en Virginie. Son jour de naissance est le 22 février 1732 dans le calendrier grégorien, mais ce calendrier n'était pas adopté par la Grande-Bretagne lorsqu'il est né. C'est pourquoi l'acte de naissance indique le 11 février 1731.",
  "Type":"biographie",
},
{
  "Name": "Mrs. Frisby",
  "Quantity": "2 in stock",
  "Img":"assets/img/book-7.jpg",
  "Info":"Madame Brisby et le secret de Nimh est un livre pour enfants de 1971 de Robert C. O'Brien, avec des illustrations de Zena Bernstein. Lauréat de la médaille Newbery de 1972, l'histoire a été adaptée au cinéma en 1982 sous le titre Brisby et le Secret de NIMH.",
  "Type":"short",
},
{
  "Name": "Call of the Wild",
  "Quantity": "6 in stock",
  "Img":"assets/img/book-8.jpg",
  "Info":"Buck est un chien au grand coeur dont la vie heureuse est bouleversée lorsqu'il est soudainement arraché de sa maison californienne et envoyé au Yukon dans les années 1890.",
  "Type":"classics",
},
{
  "Name": "Mobydick",
  "Quantity": "2 in stock",
  "Img":"assets/img/book-9.jpg",
  "Info":"Moby-Dick1 (titre original en anglais : Moby-Dick; or, The Whale ; « Moby-Dick ; ou, le Cachalot ») est un roman de l'écrivain américain Herman Melville paru en 1851, dont le titre provient du surnom donné à un grand cachalot au centre de l'intrigue.",
  "Type":"fantasy",
},
{
  "Name": "Empire of pain",
  "Quantity": "1 in stock",
  "Img":"assets/img/book-10.jpg",
  "Info":"Empire of Pain chronicles the multiple investigations of the Sacklers and their company, and the scorched-earth legal tactics that the family has used to evade accountability.",
  "Type":"crime",
},
{
  "Name": "Bad Blood",
  "Quantity": "3 in stock",
  "Img":"assets/img/book-11.jpg",
  "Info":"Bad Blood (2018) is the harrowing inside story of a how a tech start-up rooted in Silicon Valley's fake-it-till-you-make-it culture risked the lives of millions with a blood-testing device that proved too good to be true.",
  "Type":"crime",
},
{
  "Name": "The Red Part",
  "Quantity": "6 in stock",
  "Img":"assets/img/book-12.jpg",
  "Info":"Bad Blood (2018) is the harrowing inside story of a how a tech start-up rooted in Silicon Valley's fake-it-till-you-make-it culture risked the lives of millions with a blood-testing device that proved too good to be true.",
  "Type":"crime",
},
{
  "Name": "Invisible Man",
  "Quantity": "4 in stock",
  "Img":"assets/img/book-13.jpg",
  "Info":"The story is a bildungsroman that tells of a naive and idealistic (and, significantly, nameless) Southern Black youth who goes to Harlem, joins the fight against white oppression, and ends up ignored by his fellow Blacks as well as by whites.",
  "Type":"horror",
},
{
  "Name": "Dracula",
  "Quantity": "2 in stock",
  "Img":"assets/img/book-14.jpg",
  "Info":"Dracula illustre ni plus ni moins que l'éternelle lutte entre le Bien et le Mal, entre Dieu et le Diable et ce roman plante en profondeur le mythe d'une humanité partagée entre les mortels et les immortels.",
  "Type":"horror",
},
{
  "Name": "The Trial",
  "Quantity": "1 in stock",
  "Img":"assets/img/book-15.jpg",
  "Info":"One of his best known works, it tells the story of Josef K., a man arrested and prosecuted by a remote, inaccessible authority, with the nature of his crime revealed neither to him nor to the reader.",
  "Type":"crime",
},
{
  "Name": "A.Q.O.T.F",
  "Quantity": "4 in stock",
  "Img":"assets/img/book-16.jpg",
  "Info":"All Quiet on the Western Front is straightforward and the story, characters, structure are riveting, but not overly complex. In fact, the straightforwardness of the book reflects its subject matter: real people, real prose, primary colors for primary emotions.",
  "Type":"war",
},
{
  "Name": "Catch-22",
  "Quantity": "5 in stock",
  "Img":"assets/img/book-17.jpg",
  "Info":"Catch-22, satirical novel by American writer Joseph Heller, published in 1961. The work centres on Captain John Yossarian, an American bombardier stationed on a Mediterranean island during World War II, and chronicles his desperate attempts to stay alive.",
  "Type":"war",
},
{
  "Name": "Le Petit Prince",
  "Quantity": "3 in stock",
  "Img":"assets/img/book-18.jpg",
  "Info":"Les aventures du Petit Prince commencent sur son astéroïde, nommé astéroïde B612, où un jour pousse une rose. Le Petit Prince devient l'ami de cette rose fragile et belle. Il décide ensuite de visiter d'autres mondes, car il s'ennuyait sur sa petite planète.",
  "Type":"Adventure",
},
];
var featured = $('#featured .swiper-wrapper');
$.each(arr, function(i, item) {
var templateString = '<div class="swiper-slide box">' +
  '<div class="icons">' +
  '<a href="#" class="fas fa-heart" id="heart"></a>' +
  '<a href="#" class="fas fa-eye" id="eye"></a>' +
  '</div>' +
  '<div class="image">' +
  '<img src="' + item.Img + '" alt="">' +
  '</div>' +
  '<div class="content">' +
  '<h3>' + item.Name + '</h3>' +
  '<p>' + item.Info + '</p>' +
  '<h5>' + item.Type + '</h5>' +
  '<div class="Quantity">' + item.Quantity + '</div>' +
  '<a href="#" class="btn" id="success">Command</a>' +
  '</div>' +
  '</div>';
featured.append(templateString);
});


$(document).ready(function(){
  $(document).on('click', '.fa-eye', function(){
    var title = $(this).closest('.swiper-slide').find('h3').text();
    var imgUrl = $(this).closest('.swiper-slide').find('img').attr('src');
    var description = $(this).closest('.swiper-slide').find('p').text();
    var h5 = $(this).closest('.swiper-slide').find('h5').text();
    var Quantity = $(this).closest('.swiper-slide').find('.Quantity').text();
    $('#deal h4').text(title);
    $('#deal .image img').attr('src', imgUrl);
    $('#deal p').text(description);
    $('#deal h5').text(h5);
    $('#deal .Quantity').text(Quantity);
  });
});




$(document).ready(function() {
  $('.btn').on('click', function() {
      var title = $(this).closest('.content').find('h3').text();
      alert('Item "' + title + '" added to cart!');
  });
});



const tabsBox = document.querySelector(".tabs-box"),
  allTabs = tabsBox.querySelectorAll(".tab"),
  arrowIcons = document.querySelectorAll(".icon i");

let isDragging = false;

const handleIcons = (scrollVal) => {
  let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
  arrowIcons[0].parentElement.style.display = scrollVal <= 0 ? "none" : "flex";
  arrowIcons[1].parentElement.style.display =
    maxScrollableWidth - scrollVal <= 1 ? "none" : "flex";
};

arrowIcons.forEach((icon) => {
  icon.addEventListener("click", () => {
    let scrollWidth = (tabsBox.scrollLeft += icon.id === "left" ? -340 : 100);
    handleIcons(scrollWidth);
  });
});

allTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    tabsBox.querySelector(".active").classList.remove("active");
    tab.classList.add("active");
  });
});

const dragging = (e) => {
  if (!isDragging) return;
  tabsBox.classList.add("dragging");
  tabsBox.scrollLeft -= e.movementX;
  handleIcons(tabsBox.scrollLeft);
};

const dragStop = () => {
  isDragging = false;
  tabsBox.classList.remove("dragging");
};

tabsBox.addEventListener("mousedown", () => (isDragging = true));
tabsBox.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);




const notifications = document.querySelector(".notifications"),
buttons = document.querySelectorAll(".buttons .btn");

// Object containing details for different types of toasts
const toastDetails = {
    timer: 5000,
    success: {
        icon: 'fa-circle-check',
        text: 'Success: This is a success toast.',
    },
    error: {
        icon: 'fa-circle-xmark',
        text: 'Error: This is an error toast.',
    },
    warning: {
        icon: 'fa-triangle-exclamation',
        text: 'Warning: This is a warning toast.',
    },
    info: {
        icon: 'fa-circle-info',
        text: 'Info: This is an information toast.',
    }
}

const removeToast = (toast) => {
    toast.classList.add("hide");
    if(toast.timeoutId) clearTimeout(toast.timeoutId); // Clearing the timeout for the toast
    setTimeout(() => toast.remove(), 500); // Removing the toast after 500ms
}

const createToast = (id) => {
    // Getting the icon and text for the toast based on the id passed
    const { icon, text } = toastDetails[id];
    const toast = document.createElement("li"); // Creating a new 'li' element for the toast
    toast.className = `toast ${id}`; // Setting the classes for the toast
    // Setting the inner HTML for the toast
    toast.innerHTML = `<div class="column">
                         <i class="fa-solid ${icon}"></i>
                         <span>${text}</span>
                      </div>
                      <i class="fa-solid fa-xmark" onclick="removeToast(this.parentElement)"></i>`;
    notifications.appendChild(toast); // Append the toast to the notification ul
    // Setting a timeout to remove the toast after the specified duration
    toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer);
}

// Adding a click event listener to each button to create a toast when clicked
buttons.forEach(btn => {
    btn.addEventListener("click", () => createToast(btn.id));
});




  // select the table and the button
  const table = document.getElementById('table');
  const button = document.getElementById('book-0');
  
  // add a click event listener to the button
  button.addEventListener('click', function() {
    // extract the information from the card
    const name = this.previousElementSibling.previousElementSibling.textContent;
    const info = this.previousElementSibling.textContent;
    
    // create a new table row
    const row = document.createElement('tr');
    
    // create new table cells for the name and info
    const nameCell = document.createElement('td');
    const infoCell = document.createElement('td');
    
    // insert the extracted information into the cells
    nameCell.innerHTML = name;
    infoCell.innerHTML = info;
    
    // append the cells to the row
    row.appendChild(nameCell);
    row.appendChild(infoCell);
    
    // append the row to the table
    table.lastElementChild.appendChild(row);
  });
