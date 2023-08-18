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
    <link rel="stylesheet" type="text/css" href="{{url('css/signup.css')}}">   
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Signup</title> 
</head>
<body>
<div id="main">
            <div class="logo">
                <h1><i class="fa-solid fa-book"></i>Library</h1>
            </div>
            <div class="content">
                <div class="content-img" id="content-img"></div>
                <div class="content-form" id="content-form">
                    <div id="content1" class="content-div">
                        <div class="name">
                            <h1> Hi , Hello and Welcome to  your digitale library </h1>
                            <h2>New here ? click next ! </h2> 
                            <a href="{{url('login')}}">Connect my acount</a>
                        </div>
                    </div>
                    <div id="content2" class="content-div">
                        <div class="signin">
                            <h2>Sign in</h2>
                            
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
                            <input type="password" class="field" id="confpassword" name="confpassword" placeholder="Confirme password">
                        </form>
                        <div class="separator">Or</div>
                            <div class="conn">
                                <div class="conn1">
                                    <i class="fa-brands fa-facebook"></i>
                                </div>
                                <div class="conn2">
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <div class="conn3">
                                    <i class="fa-brands fa-google"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content3" class="content-div">
                        <h2>Choose Your Category</h2>
                        <div class="categories">
                            <div class="cat" id="cat1" onclick="select1()">
                                <i class="fa-brands fa-space-awesome"></i>
                                <h3>Adventure stories</h3>
                            </div>
                            <div class="cat" id="cat2" onclick="select2()">
                                <i class="fa-solid fa-landmark"></i>
                                <h3>Classics</h3>
                            </div>
                            <div class="cat" id="cat3" onclick="select3()">
                                <i class="fa-solid fa-handcuffs"></i>
                                <h3>Crime</h3>
                            </div>
                            <div class="cat" id="cat4" onclick="select4()">
                                <i class="fa-solid fa-skull-crossbones"></i>
                                <h3>Horror</h3>
                            </div>
                            <div class="cat" id="cat5" onclick="select5()">
                                <i class="fa-solid fa-bomb"></i>
                                <h3>War</h3>
                            </div>
                            <div class="cat" id="cat6" onclick="select6()">
                                <i class="fa-solid fa-book-atlas"></i>
                                <h3>Biography</h3>
                            </div>
                            <div class="cat" id="cat7" onclick="select7()">
                                <i class="fa-solid fa-window-restore"></i>
                                <h3>Short stories</h3>
                            </div>
                            <div class="cat" id="cat8" onclick="select8()">
                                <i class="fa-solid fa-dragon"></i>
                                <h3>Fantasy</h3>
                            </div>
                        </div>
                    </div>
                    <div id="content4" class="content-div">
                        <div class="rules">
                            <h2>Rules</h2>
                            <ul>
                                <li>1-Users must create an account in order to access the digital library.</li>
                                <li>2-Users are responsible for maintaining the confidentiality of their account login information.</li>
                                <li>3-Users are prohibited from sharing their account login information with others.</li>
                                <li>4-Users must respect copyright laws and not share or distribute copyrighted material without permission.</li>
                                <li>5-Users must not upload or share any illegal or inappropriate content.</li>
                                <li>6-Users must not use the digital library for any commercial purposes.</li>
                                <li>7-The digital library reserves the right to remove or restrict access to any content that violates these rules.</li>
                            </ul>
                            <div class="btn">                            
                                <a href="javascript:void(0);" onclick="submitForms()">Let's Beggin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div id="bullets-container">
                    <span id="bullet1" class="bullet"></span>
                    <span id="bullet2" class="bullet"></span>
                    <span id="bullet3" class="bullet"></span>
                    <span id="bullet4" class="bullet"></span>
                  </div>
                <div class="btn">
                    <button id="next-button">Next</button>
                </div>
            </footer>
    </div>
    <script src="{{url('js/signup.js')}}"></script>
</body>
</html>
