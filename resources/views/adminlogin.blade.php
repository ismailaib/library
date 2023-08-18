<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- font-awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link -->
    <link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
</head>
<body>
<body>
    <div id="main">
            <div class="logo">
                <h1><i class="fa-solid fa-book"></i>Library</h1>
            </div>
            <div class="content">
                <div class="content-form" id="content-form">
                    <div id="content2" class="content-div">
                        <div class="signin">
                            <h2>Admin Login</h2>
                        <form action="" method="post">
                            <div style="color:red;">
                                @foreach($errors->all() as $error)
                                    {{$error}}<br>
                                 @endforeach
                            </div>
                            @csrf
                            <input type="text" class="field" id="name" name="name" placeholder="Your Name Here">
                            <input type="email" class="field" id="email" name="email" placeholder="E-mail">
				            <input type="password" class="field" id="password" name="password" placeholder="Your Password">
                        </form>
                    </div>
                </div>
            </div>
            <footer>
                <div class="btn">
                    <button id="next-button" onclick="submitForm()">Next</button>
                </div>
            </footer>
    </div>
</body>
</html>
<script>
    function submitForm() {
    document.getElementsByTagName("form")[0].submit();
}
</script>
<style>
    .content {
    display: grid;
    grid-template-columns: 100%;
    justify-items: center;
}
</style>