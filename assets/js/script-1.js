searchForm = document.querySelector(".search-form");

document.querySelector("#search-btn").onclick = () => {
  searchForm.classList.toggle("active");
};





var arr = [{
  "Name": "Le Petit Nicolat",
  "Price": "$15.99",
  "Img":"assets/img/book-0.jpg"
},
{
  "Name": "Mystery",
  "Price": "$20.99",
  "Img":"assets/img/book-1.jpg"
},
{
  "Name": "Harry Potter",
  "Price": "$25.99",
  "Img":"assets/img/book-2.jpg"
},
{
  "Name": "Land of Stories",
  "Price": "$25.99",
  "Img":"assets/img/book-3.jpg"
},
{
  "Name": "Steve Jobs",
  "Price": "$30.99",
  "Img":"assets/img/book-4.jpg"
},
{
  "Name": "Copperfield",
  "Price": "$30.99",
  "Img":"assets/img/book-5.jpg"
},
{
  "Name": "Washington",
  "Price": "$30.99",
  "Img":"assets/img/book-6.jpg"
},
{
  "Name": "Mrs. Frisby",
  "Price": "$30.99",
  "Img":"assets/img/book-7.jpg"
},
{
  "Name": "Call of the Wild",
  "Price": "$30.99",
  "Img":"assets/img/book-8.jpg"
},
{
  "Name": "Mobydick",
  "Price": "$30.99",
  "Img":"assets/img/book-9.jpg"
},
{
  "Name": "Empire of pain",
  "Price": "$30.99",
  "Img":"assets/img/book-10.jpg"
},
{
  "Name": "Bad Blood",
  "Price": "$30.99",
  "Img":"assets/img/book-11.jpg"
},
{
  "Name": "The Red Part",
  "Price": "$30.99",
  "Img":"assets/img/book-12.jpg"
},
{
  "Name": "Invisible Man",
  "Price": "$30.99",
  "Img":"assets/img/book-13.jpg"
},
{
  "Name": "Dracula",
  "Price": "$30.99",
  "Img":"assets/img/book-14.jpg"
},
{
  "Name": "The Trial",
  "Price": "$30.99",
  "Img":"assets/img/book-15.jpg"
},
{
  "Name": "A.Q.O.T.F",
  "Price": "$30.99",
  "Img":"assets/img/book-16.jpg"
},
{
  "Name": "Catch-22",
  "Price": "$30.99",
  "Img":"assets/img/book-17.jpg"
},
{
  "Name": "Le Petit Prince",
  "Price": "$30.99",
  "Img":"assets/img/book-18.jpg"
},
];
var featured = $('#featured .swiper-wrapper');
$.each(arr, function(i, item) {
var templateString = '<div class="swiper-slide box">' +
  '<div class="icons">' +
  '<a href="#" class="fas fa-heart"></a>' +
  '<a href="#" class="fas fa-eye"></a>' +
  '</div>' +
  '<div class="image">' +
  '<img src="' + item.Img + '" alt="">' +
  '</div>' +
  '<div class="content">' +
  '<h3>' + item.Name + '</h3>' +
  '<div class="price">' + item.Price + '</div>' +
  '<a href="#" class="btn">add to cart</a>' +
  '</div>' +
  '</div>';
featured.append(templateString);
});

$(document).ready(function() {
  $('.btn').on('click', function() {
      // code to add the item to the cart goes here
      alert('Item added to cart!');
  });
});


$(document).ready(function(){
  $("#cart-icon").click(function(){
    $("#side-bar").toggleClass("show");
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

