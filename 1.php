<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="reg/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="reg/css/style.css">
    <style type="text/css">
        @font-face {
    font-family: Pompadur; /* Гарнитура шрифта */
    src: url(20011.ttf); /* Путь к файлу со шрифтом */
   }
   h1 {
    font-family: Pompadur;
   }
   h2 {
    font-family: Pompadur;
   }
   h3 {
    font-family: Pompadur;
   }
   h4 {
    font-family: Pompadur;
   }
   a {
    font-family: Pompadur;
   }
   p {
    font-family: Pompadur;
   }
   span {
    font-family: Pompadur;
   }
   ::-webkit-input-placeholder { color:#f00; font-family: Pompadur;}
    ::-moz-placeholder { color:#f00; font-family: Pompadur;}
    :-ms-input-placeholder { color:#f00; font-family: Pompadur;}
    :-moz-placeholder { color:#f00; font-family: Pompadur;}
    button:active, button:focus {
  outline: none;
}
button::-moz-focus-inner {
  border: 0;
}


    </style>
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Регистрация</h2>
                        <form action="reg.php" method="POST" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Имя"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="mail" id="email" placeholder=" Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Пароль"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="pa" id="re_pass" placeholder="Повторите пароль"/>
                            </div>
                            
                            <button style="background-image: url(btn.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 140px; height: 40px; margin-top: 20px;  font-size: 12px;">
                                <p style="color: white; font-size: 13px; padding-bottom: 15px;">Зарегистрироваться</p> 
                            </button>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">У меня уже есть аккаунт</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>

                        <a href="#" class="signup-image-link">У меня нет аккаунта</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Войти</h2>
                        <form action="vfod.php" method="POST" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="mail" id="your_name" placeholder="Ваш логин"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Пароль"/>
                            </div>
                            
                            <button style="background-image: url(btn.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 80px; height: 40px; margin-top: 20px;  font-size: 12px;">
                                <p style="color: white; font-size: 13px; padding-bottom: 15px;">Войти</p> 
                            </button>
                            <a  class="txt1">
                                <?php echo "<p style='color:red'>".$_GET['error']."</p>" ?>
                            </a>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Или войдите с помощью</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="reg/vendor/jquery/jquery.min.js"></script>
    <script src="reg/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>