<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link -->
    <link rel="stylesheet" href="{{url('css/bookplace.css')}}">
    <link rel="stylesheet" href="{{url('css/studentdashboard.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
  <div class="top">
    <header class="header">
      <div class="header-1">
        <a href="#" class="logo"> <i class="fas fa-book"></i> library </a>
        <form action="" class="search-form">
          <input type="search" name="" placeholder="By ismail aib ..." id="search-box">
          <label for="search-box" class="fas fa-search"></label>
        </form>
        <div class="icons" id="header-icons">
          <div id="search-btn" class="fas fa-search"></div>
          <a href="#" class="fas fa-heart"></a>
          <a href="{{url('bookplace')}}" class="fas fa-home"></a>
          <a href="#" id="theme-switcher" class="fas fas fa-circle-half-stroke"></a>
          <a href="{{url('logout')}}" class="fas fas fa-right-from-bracket"></a>
        </div>
      </div>
    </header>
  </div>
  <nav class="bottom-navbar">
    <a href="#" class="fas fa-heart"></a>
    <a href="{{url('bookplace')}}" class="fas fa-home"></a>
    <a href="{{url('login')}}" class="fas fas fa-user"></a>
  </nav>
  
  
  <section class="main">
    <div class="welcome">
      <h1>Welcome back , {{ Auth::user()->name }}</h1>
    </div>
    <div class="cards">
        <div class="card" id="mysettings">
          <a href="#" class="fas fa-gear"></a>
          <h3>Settings</h3>
        </div>
        <div class="card" id="myrequest">
          <a href="#" class="fas fa-book-open-reader"></a>
          <h3>MyRequest</h3>
        </div>
        <div class="card" id="myprogress">
          <a href="#" class="fas fa-list-check"></a>
          <h3>MyProgress</h3>
        </div>
    </div>
    <div class="text">
      <h2>choose frome the categories</h2>
    </div>
    <div class="progress">
      <h2 class="level">50xp</h2>
        <canvas id="myChart" height="100px"></canvas>
        <canvas id="myChart_2" width="50px"></canvas>
    </div>
    <div class="settings">
      <div class="title">
      <h2>Change Your Informations</h2>
      </div>
      <form action="" id="modification">
        <input type="text" class="field" id="name" name="name" value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}" required>
        <input type="email" class="field" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="{{ Auth::user()->email }}">
        <input type="password" class="field" id="password" name="password" placeholder="Change Your Your Password">
        <input type="password" class="field" id="password" name="password" placeholder="Confirme password">
        <button type="submit" class="btn" id="command-button">change</button>
      </form>
    </div>
    <div class="request">
    <table class="books">
  <tr>
    <th>BookName</th>
    <th>Command_at</th>
    <th>Status</th>
    <th>Delete</th>
  </tr>
  @foreach($commands->where('id_student', auth()->id()) as $command)
  <tr>
    <td>{{ $command->book->name }}</td>
    <td>{{ $command->Command_at }}</td>
    <td>{{ $command->status->name }}</td>
    <td>
      <a id="deletebtn" href="{{ route('deletecommand', $command->id) }}" onclick="return confirm('Are you sure you want to delete this command?')"><i class="fa-solid fa-trash"></i></a>
    </td>
  </tr>
  @endforeach
</table>

        <table class="date">
          <tr>
            <th>BookName</th>
            <th>Status</th>
            <th>Receipt day</th>
            <th>Return day</th>
          </tr>
          <tr>
            @foreach($approvals->where('id_student', auth()->id()) as $approval)
          <tr>
            <td>{{ $approval->book->name }}</td>
            <td>{{ $approval->status->name }}</td>
            <td>{{ $approval->delivery_at }}</td>
            <td>{{ $approval->returns_at }}</td>
          </tr>
          @endforeach
      </table>
    </div>
  </section>
  <script>
    // Wait for document to load
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
</script>
<script>
  $(document).ready(function(){
    $("#mysettings").click(function(){
      $(".settings").show();
      $(".request, .progress, .text").hide();
    });
    $("#myrequest").click(function(){
      $(".request").show();
      $(".settings, .progress, .text").hide();
    });
    $("#myprogress").click(function(){
      $(".progress").show();
      $(".settings, .request, .text").hide();
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
       var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'number of Approvals',
                data: [12, 19, 3, 5, 2, 3, 7],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'number of Books',
                data: [8, 15, 9, 12, 4, 6, 10],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
       var ctx = document.getElementById('myChart_2').getContext('2d');
    var myChart_2 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'number of Approvals',
                data: [12, 19, 3, 5, 2, 3, 7],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'number of Books',
                data: [8, 15, 9, 12, 4, 6, 10],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{url('js/book_place.js')}}"></script>
  <script src="{{url('js/student_dashboard.js')}}"></script>
<style>
  .change{
    margin-top: 1rem;
    display: inline-block;
    padding: 0.9rem 3rem;
    border-radius: 0.5rem;
    color: var(--pricipale);
    font-size: 1.7rem;
    font-weight: 500;
    border: 2px solid var(--pricipale);
    cursor: pointer;
  }
  .level {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 4rem;
    color: var(--black);
    padding: 4rem;
}
</style>
</body>
</html>