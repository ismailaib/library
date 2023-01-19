searchForm = document.querySelector(".search-form");

document.querySelector("#search-btn").onclick = () => {
  searchForm.classList.toggle("active");
};





var arr = [{
  "Name": "Le Petit Nicolat",
  "Price": "$15.99",
  "Img":"assets/img/book-0.jpg",
  "Info":"C’est un écolier et il est le héros de l'histoire. Avec lui tout est « chouette ! ». Fils unique, il admire son père et sa mère dont il est « rien fier ». Il a un tas de copains avec qui il a formé la bande des « Vengeurs ».",
  "Type":"Adventure"
},
{
  "Name": "Mystery",
  "Price": "$20.99",
  "Img":"assets/img/book-1.jpg",
  "Info":"nothing to see here hihihihihihi."
},
{
  "Name": "Harry Potter",
  "Price": "$25.99",
  "Img":"assets/img/book-2.jpg",
  "Info":" Harry et ses amis doivent faire face à une nouvelle menace à Poudlard. La fameuse Chambre des secrets, bâtie plusieurs siècles plus tôt par l'un des fondateurs de l'école, Salazar Serpentard, aurait été rouverte par son « héritier »."
},
{
  "Name": "Land of Stories",
  "Price": "$25.99",
  "Img":"assets/img/book-3.jpg",
  "Info":"Le Pays des contes est un cycle littéraire créé par Chris Colfer dont le premier tome, Le Sortilège perdu, a été publié en 2012. En juin 2017, Chris Colfer annonce sur son compte Twitter l'adaptation cinématographique du cycle littéraire. Il en écrira le scénario et en sera le producteur."
},
{
  "Name": "Steve Jobs",
  "Price": "$30.99",
  "Img":"assets/img/book-4.jpg",
  "Info":"Steve Jobs est la biographie autorisée de Steve Jobs, le cofondateur d'Apple. La biographie a été écrite à la demande de Jobs par Walter Isaacson, qui avait écrit entre autres les biographies de Benjamin Franklin et Albert Einstein."
},
{
  "Name": "Copperfield",
  "Price": "$30.99",
  "Img":"assets/img/book-5.jpg",
  "Info":"The story follows the life of David Copperfield from childhood to maturity. David was born in Blunderstone, Suffolk, England, six months after the death of his father. David spends his early years in relative happiness with his loving, childish mother and their kindly housekeeper, Clara Peggotty. They call him Davy."
},
{
  "Name": "Washington",
  "Price": "$30.99",
  "Img":"assets/img/book-6.jpg",
  "Info":"George Washington est né le 22 février 1732 en Virginie. Son jour de naissance est le 22 février 1732 dans le calendrier grégorien, mais ce calendrier n'était pas adopté par la Grande-Bretagne lorsqu'il est né. C'est pourquoi l'acte de naissance indique le 11 février 1731."
},
{
  "Name": "Mrs. Frisby",
  "Price": "$30.99",
  "Img":"assets/img/book-7.jpg",
  "Info":"Madame Brisby et le secret de Nimh est un livre pour enfants de 1971 de Robert C. O'Brien, avec des illustrations de Zena Bernstein. Lauréat de la médaille Newbery de 1972, l'histoire a été adaptée au cinéma en 1982 sous le titre Brisby et le Secret de NIMH."
},
{
  "Name": "Call of the Wild",
  "Price": "$30.99",
  "Img":"assets/img/book-8.jpg",
  "Info":"Buck est un chien au grand coeur dont la vie heureuse est bouleversée lorsqu'il est soudainement arraché de sa maison californienne et envoyé au Yukon dans les années 1890."
},
{
  "Name": "Mobydick",
  "Price": "$30.99",
  "Img":"assets/img/book-9.jpg",
  "Info":"Moby-Dick1 (titre original en anglais : Moby-Dick; or, The Whale ; « Moby-Dick ; ou, le Cachalot ») est un roman de l'écrivain américain Herman Melville paru en 1851, dont le titre provient du surnom donné à un grand cachalot au centre de l'intrigue."
},
{
  "Name": "Empire of pain",
  "Price": "$30.99",
  "Img":"assets/img/book-10.jpg",
  "Info":"Empire of Pain chronicles the multiple investigations of the Sacklers and their company, and the scorched-earth legal tactics that the family has used to evade accountability."
},
{
  "Name": "Bad Blood",
  "Price": "$30.99",
  "Img":"assets/img/book-11.jpg",
  "Info":"Bad Blood (2018) is the harrowing inside story of a how a tech start-up rooted in Silicon Valley's fake-it-till-you-make-it culture risked the lives of millions with a blood-testing device that proved too good to be true."
},
{
  "Name": "The Red Part",
  "Price": "$30.99",
  "Img":"assets/img/book-12.jpg",
  "Info":"Bad Blood (2018) is the harrowing inside story of a how a tech start-up rooted in Silicon Valley's fake-it-till-you-make-it culture risked the lives of millions with a blood-testing device that proved too good to be true."

},
{
  "Name": "Invisible Man",
  "Price": "$30.99",
  "Img":"assets/img/book-13.jpg",
  "Info":"The story is a bildungsroman that tells of a naive and idealistic (and, significantly, nameless) Southern Black youth who goes to Harlem, joins the fight against white oppression, and ends up ignored by his fellow Blacks as well as by whites."
},
{
  "Name": "Dracula",
  "Price": "$30.99",
  "Img":"assets/img/book-14.jpg",
  "Info":"Dracula illustre ni plus ni moins que l'éternelle lutte entre le Bien et le Mal, entre Dieu et le Diable et ce roman plante en profondeur le mythe d'une humanité partagée entre les mortels et les immortels."
},
{
  "Name": "The Trial",
  "Price": "$30.99",
  "Img":"assets/img/book-15.jpg",
  "Info":"One of his best known works, it tells the story of Josef K., a man arrested and prosecuted by a remote, inaccessible authority, with the nature of his crime revealed neither to him nor to the reader."
},
{
  "Name": "A.Q.O.T.F",
  "Price": "$30.99",
  "Img":"assets/img/book-16.jpg",
  "Info":"All Quiet on the Western Front is straightforward and the story, characters, structure are riveting, but not overly complex. In fact, the straightforwardness of the book reflects its subject matter: real people, real prose, primary colors for primary emotions."
},
{
  "Name": "Catch-22",
  "Price": "$30.99",
  "Img":"assets/img/book-17.jpg",
  "Info":"Catch-22, satirical novel by American writer Joseph Heller, published in 1961. The work centres on Captain John Yossarian, an American bombardier stationed on a Mediterranean island during World War II, and chronicles his desperate attempts to stay alive."
},
{
  "Name": "Le Petit Prince",
  "Price": "$30.99",
  "Img":"assets/img/book-18.jpg",
  "Info":"Les aventures du Petit Prince commencent sur son astéroïde, nommé astéroïde B612, où un jour pousse une rose. Le Petit Prince devient l'ami de cette rose fragile et belle. Il décide ensuite de visiter d'autres mondes, car il s'ennuyait sur sa petite planète."
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
  '<div class="price">' + item.Price + '</div>' +
  '<a href="#" class="btn">add to cart</a>' +
  '</div>' +
  '</div>';
featured.append(templateString);
});


$(document).ready(function(){
  function updateTitle(title){
    $('#deal h4').text(title);
  }
  $(document).on('click', '.fa-eye', function(){
    var title = $(this).closest('.swiper-slide').find('h3').text();
    updateTitle(title);
  });
});

$(document).ready(function(){
  function updateImage(imgUrl){
    $('#deal .image img').attr('src', imgUrl);
  }
  $(document).on('click', '.fa-eye', function(){
    var imgUrl = $(this).closest('.swiper-slide').find('img').attr('src');
    updateImage(imgUrl);
  });
});



$(document).ready(function(){
  function updateDescription(description){
    $('#deal p').text(description);
  }
  $(document).on('click', '.fa-eye', function(){
    var description = $(this).closest('.swiper-slide').find('p').text();
    updateDescription(description);
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
    // if clicked icon is left, reduce 350 from tabsBox scrollLeft else add
    let scrollWidth = (tabsBox.scrollLeft += icon.id === "left" ? -340 : 340);
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

