<!-- ismailaib :) :) :) :) :) :) -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <!-- font-awesom -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- link -->
  <link rel="stylesheet" href="{{url('css/bookplace.css')}}">
  <link rel="stylesheet" href="{{url('css/responsive.css')}}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>library | by ismailaib</title>
</head>

<body>
  <ul class="notifications"></ul>
  <div class="top">
    <header class="header">
      <div class="header-1">
        <a href="#" class="logo"> <i class="fas fa-book"></i> Library</a>
        <form action="" class="search-form">
          <input type="search" name="" placeholder="By ismail aib ..." id="search-box">
          <label for="search-box" class="fas fa-search"></label>
        </form>
        <div class="icons" id="header-icons">
          <div id="search-btn" class="fas fa-search"></div>
          <a href="#" class="fas fa-heart"></a>
          <a href="{{url('studentdashboard')}}" class="fas fa-table-columns"></a>
          <a href="#" id="theme-switcher" class="fas fas fa-circle-half-stroke"></a>
          <a href="{{url('logout')}}" class="fas fas fa-right-from-bracket"></a>
        </div>
      </div>
    </header>
  </div>
  <nav class="bottom-navbar">
    <a href="#wrapper" class="fas fa-list"></a>
    <a href="{{url('studentdashboard')}}" id="cart-icon" class="fas fa-table-columns"></a>
    <a href="#deal" class="fas fa-home"></a>
    <a href="#" class="fas fa-heart"></a>
    <a href="student_register.html" class="fas fas fa-user"></a>
  </nav>

  <section class="deal" id="deal">
    <video src="img/vibrary.mp4" autoplay loop muted></video>
    <div class="content">
      <div class="text-content">
        <h1>Story Of Today</h1>
        <h4>david copperfield</h4>
        <p>The story follows the life of David Copperfield from childhood to maturity. David was born in Blunderstone, Suffolk, England, six months after the death of his father. David spends his early years in relative happiness with his loving, childish mother and their kindly housekeeper, Clara Peggotty. They call him Davy.</p>
        <h5>Biographie</h5>
        <div class="bottom">
          <div class="Quantity">2 in stock</div>
          <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
        </div>
      </div>
    </div>

    <div class="image">
      <img src="img/book-5.jpg" alt="">
    </div>
  </section>
  <div class="wrapper" id="wrapper">
    <div class="icon"><i id="left" class="fa-solid fa-angle-left"></i></div>
    <ul class="tabs-box">
      <li class="tab active" data-type="all">All</li>
      <li class="tab" data-type="Adventure stories">Adventure stories</li>
      <li class="tab" data-type="Classics">Classics</li>
      <li class="tab" data-type="Crime">Crime</li>
      <li class="tab" data-type="Horror">Horror</li>
      <li class="tab" data-type="War">War</li>
      <li class="tab" data-type="Biography">biographie</li>
      <li class="tab" data-type="Short stories">Short stories</li>
      <li class="tab" data-type="Fantasy">Fantasy</li>
      <li class="tab" data-type="Comedy">Comedy</li>
      <li class="tab" data-type="Comedy">Level 1</li>
      <li class="tab" data-type="Comedy">Level 2</li>
      <li class="tab" data-type="Comedy">Level 3</li>
      <li class="tab" data-type="Comedy">Level 4</li>
      <li class="tab" data-type="Comedy">Level 5</li>
    </ul>
    <div class="icon"><i id="right" class="fa-solid fa-angle-right"></i></div>
  </div>
  <section class="featured" id="featured">
    <div class="swiper featured-slider">
      <div class="swiper-wrapper">
        <!-- the cards here -->
        <!-- the cards here -->
        @php
$commanded_books = $commands->where('id_student', auth()->id())->pluck('id_book')->toArray();

$num_commands = count($commanded_books);
@endphp



@foreach($books as $book)
<div class="swiper-slide box" data-type="{{ $book->type->name }}">
  <div class="icons">
    <a href="#" class="fas fa-heart" id="heart"></a>
    <a href="#" class="fas fa-eye" id="eye"></a>
  </div>
  <div class="image">
    <img src="{{ asset('img/' . $book->img) }}" alt="">
  </div>
  <div class="content">
    <h3> {{ $book->name }} </h3>
    <p> {{ $book->info }} </p>
    <h5> {{ $book->type->name}} </h5>
    <div class="Quantity"> {{ $book->quantity }} in stock</div>
  </div>
  <form method="POST" action="{{ route('commands.store') }}">
    @csrf
    <input type="hidden" name="id_student" value="{{ Auth::user()->id }}">
    <input type="hidden" name="id_book" value="{{ $book->id }}">
    <input type="hidden" name="Command_at" value="{{ date('Y-m-d H:i:s') }}">
    <button type="submit" class="btn" id="command-button" @if (in_array($book->id, $commanded_books)) disabled @endif>
      @if (in_array($book->id, $commanded_books)) Commanded @else Command @endif
    </button>
  </form>
</div>
@endforeach
      </div>
    </div>

  </section>

  <footer>
    <div class="footer-content">
      <h3>Library</h3>
      <p>Made by ISMAIL AIB</p>
      <ul class="socials">
        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
      </ul>
    </div>
  </footer>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{url('js/book-place.js')}}"></script>
  <script src="{{url('js/student_dashboard.js')}}"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
      // Get the saved theme from localStorage, if available
      var savedTheme = localStorage.getItem("theme");
      // Set the default theme to `light` if no saved theme is found
      var currentTheme = savedTheme ? savedTheme : "light";
      document.documentElement.setAttribute("data-theme", currentTheme);
      // Get our button switcher
      var themeSwitcher = document.getElementById("theme-switcher");
      // When our button gets clicked
      themeSwitcher.onclick = function() {
        // Switch between `dark` and `light`
        var switchToTheme = currentTheme === "dark" ? "light" : "dark"
        // Set our current theme to the new one
        document.documentElement.setAttribute("data-theme", switchToTheme);
        // Save the selected theme to localStorage
        localStorage.setItem("theme", switchToTheme);
        // Update the currentTheme variable
        currentTheme = switchToTheme;
      }
    });
    const sr = ScrollReveal({
      distance: '200px',
      duration: 1500,
      reset: true,
    })
    sr.reveal('.deal .content', {
      delay: 100,
      origin: 'left'
    })
    sr.reveal('.deal .image', {
      delay: 100,
      origin: 'right'
    })
    sr.reveal('.featured .featured-slider .box', {
      reset: false,
      delay: 100,
      origin: 'bottom'
    })
    // Get the tabs and the cards
    const tabs = document.querySelectorAll('.tabs-box .tab');
    const cards = document.querySelectorAll('.swiper-slide');
    // Loop through each tab and add a click event listener
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        // Remove the 'active' class from all tabs
        tabs.forEach(tab => tab.classList.remove('active'));
        // Add the 'active' class to the clicked tab
        tab.classList.add('active');
        // Get the data-type attribute of the clicked tab
        const type = tab.getAttribute('data-type');
        // Loop through each card and hide/show it based on its data-type attribute
        cards.forEach(card => {
          if (type === 'all' || card.getAttribute('data-type') === type) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  </script>
</body>

</html>
</body>