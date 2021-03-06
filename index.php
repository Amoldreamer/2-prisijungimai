<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prisijungimai</title>
<link rel="icon" type="image/png" href="./img/favicon.png"/>

<!-- resetas/suvienodinimas -->
<link rel="stylesheet" href="./css/reset.css">
<!-- 3-rd party css -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- pavieniai komponentai -->
<link rel="stylesheet" href="./css/button.css">
<!-- pagrindinis stilius    -->
<link rel="stylesheet" href="./css/main.css">
<!-- linking css for modal-->
<link rel="stylesheet" href="css/forgot_password.css">
</head>
<body>
    <div class="container">
        <img class="left" src="./img/login-image.png" alt="telefonas ir mergina">
        <div class="right">
            <form class="form" method="post">
                <div class="form-row">
                    <h1 class="main-title">Login</h1>
                </div>
                <div class="form-row">
                    <label class="label" for="">Your email <span  class="required">*</span></label>
                    <input class="input" type="email" placeholder="Email" required> 
                    <i class="fa fa-user-o"></i>
                </div>
                <div class="form-row">
                    <label class="label" for="">Password <span class="required">*</span></label>
                    <input class="input" type="password" placeholder="Password" required>
                    <i class="fa fa-key"></i>
                </div>
                <div class="form-row">
                    <input class="checkbox" type="checkbox">
                    <label class="checkbox-label">Remember me</label>
                    <a class="forgot-link pass_btn" href="#">Forgot password?</a>
                </div>
                <div class="form-row">
                    <div class="btn">Sign in</div>
                </div>
            </form>
            <div class="form-bottom">
                <p>Or login with</p>
                <div class="icon-list">
                    <i  class="fa fa-facebook"></i>
                    <i class="fa fa-github"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-gitlab"></i>
                </div>    
                <div class="extra-link">
                    <p>Don't have an account ?</p> 
                    <a href="signup.html">Sign up</a>
                </div>
            </div>
         </div>
    </div>
    <div class="modal_wrapper">
        <div class="modal_container">
            <div class="modal wrapper">
                <button class="cross modal_cross">X</button>
                <h1>What's my password</h1>
                <hr>
                    <h3>If you have forgotten your password you can reset it here</h3>
                    <input class="send_email" type="email" name="email" placeholder="E-mail address">
                    <i class="fa fa-user-o email_symbol"></i>
                    <a class="send_password" href="#">Send my password</a>
            </div>
        </div>
    </div>
    <script>
        var modalWrapper = document.querySelector('.modal_wrapper');
        var wrapper = document.querySelector('.wrapper');
        var passBtn = document.querySelector('.pass_btn');
        var modalCross = document.querySelector('.modal_cross');
        var body = document.getElementsByTagName('.body')[0];

       passBtn.addEventListener('click',()=>{
           modalWrapper.style.display = 'block';
       })
       modalCross.addEventListener('click',()=>{
            modalWrapper.style.display = 'none';
       })
       window.addEventListener('click',(e)=>{
        if(e.target == modalWrapper){
            modalWrapper.style.display = 'none';
        }
       })
    </script>
</body>
</html>