searchForm = document.querySelector(".search-form");

document.querySelector("#search-btn").onclick = () => {
  searchForm.classList.toggle("active");
};

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