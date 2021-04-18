<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<head>

    <meta charset="utf-8">
    <title>Редактирование профиля</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="styles/index.processed.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style type="text/css">

     
    
      
/* main-header start */
[data-target="#mainMenu"] {
  position: relative;
  z-index: 999;
}

#mainMenu li > a {
  font-size: 12px;
  letter-spacing: 1px;
  color: #fff;
  font-weight: 400;
  position: relative;

  z-index: 1;
  text-decoration: none;
}
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
.main-header.fixed-nav #mainMenu li > a {
  color: #fff;
  background-color: red;
  text-decoration: none;
}

#mainMenu li:not(:last-of-type) {
  margin-right: 30px;
}

#mainMenu li > a::before {
  position: absolute;
  content: "";
  width: calc(100% - 1px);
  height: 1px;
  background: #fff;
  bottom: -6px;
  left: 0;

  -webkit-transform: scale(0, 1);
  -ms-transform: scale(0, 1);
  transform: scale(0, 1);
  -webkit-transform-origin: right center;
  -ms-transform-origin: right center;
  transform-origin: right center;
  z-index: -1;

  -webkit-transition: transform 0.5s ease;
  transition: transform 0.5s ease;
}

#mainMenu li > a:hover::before,
#mainMenu li > a.active::before {
  -webkit-transform: scale(1, 1);
  -ms-transform: scale(1, 1);
  transform: scale(1, 1);
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
}

.main-header.fixed-nav #mainMenu li > a::before {
  background: #000;
}

.main-header {
  position: fixed;
  top: 0px;
  left: 0;
  z-index: 99;
  width: 100%;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  transition: all 2s;
  opacity: 0.9;
}

.main-header.fixed-nav {
  top: 0;
  background: #fff;
  -webkit-box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
  box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.main-header.fixed-nav .navbar-brand > img:last-of-type {
  display: block;
}

.main-header.fixed-nav .navbar-brand > img:first-of-type {
  display: none;
}
.navbar-brand {
  color: #fff;
}
.main-header .navbar-brand img {
  max-width: 40px;
  animation: fadeInLeft 0.4s both 0.4s;
}
/* main-header end */
@media (max-width: 991px) {
  /*header starts*/

  .collapse.in {
    display: block !important;
    padding: 0;
    clear: both;
  }

  .navbar-toggler {
    margin: 0;
    padding: 0;
    width: 40px;
    height: 40px;
    position: absolute;
    top: 25px;
    right: 0;
    border: none;
    border-radius: 0;
    outline: none !important;
  }

  .main-header .navbar {
    float: none;
    width: 100%;
    padding-left: 0;
    padding-right: 0;
    text-align: center;
    transition: 2s;
  }

  .main-header .navbar-nav {
    margin-top: 70px;
  }

  .main-header .navbar-nav li .nav-link {
    text-align: center;
    padding: 20px 15px;
    border-radius: 0px;
  }

  /**/
  .main-header .navbar-toggler .icon-bar {
    background-color: #fff;
    margin: 0 auto 6px;
    border-radius: 0;
    width: 30px;
    height: 3px;
    position: absolute;
    right: 0;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }

  .main-header .navbar .navbar-toggler .icon-bar:first-child {
    margin-top: 3px;
  }

  .main-header .navbar-toggler .icon-bar-1 {
    width: 10px;
    top: 0px;
  }

  .main-header .navbar-toggler .icon-bar-2 {
    width: 16px;
    top: 12px;
  }

  .main-header .navbar-toggler .icon-bar-3 {
    width: 20px;
    top: 21px;
  }

  .main-header .current .icon-bar {
    margin-bottom: 5px;
    border-radius: 0;
    display: block;
  }

  .main-header .current .icon-bar-1 {
    width: 18px;
  }

  .main-header .current .icon-bar-2 {
    width: 30px;
  }

  .main-header .current .icon-bar-3 {
    width: 10px;
  }

  .main-header .navbar-toggler:hover .icon-bar {
    background-color: #fff;
  }

  .main-header .navbar-toggler:focus .icon-bar {
    background-color: #fff;
  }
  .fullscreen-bg {


width: auto;
height: auto;
z-index: -100;
overflow: hidden;
}
.fullscreen-bgvideo{

width: auto;
height: auto;


}
.change-color {
    border-bottom: 0.5px solid #EDEDED;
}
  

  /*header ends*/
}
input{
  border: none;
}
    </style>

</head>
    <?php  
                                  
            $connect = mysqli_connect("mysql.09-15-pn.myjino.ru","09-15-pn","IT.SCHOOL123","09-15-pn_nikita-alekseev");
            $text_query = "SELECT * FROM worker WHERE id = '{$_SESSION['id']}'";
            
            $query = mysqli_query($connect, $text_query);
            
            $result = $query->fetch_assoc();
            
            


        ?>
    <body>
      
      <div style="background-color: ; height: 900px; width: auto;">
        <div style="background-color: ; height: 800px; width: auto;">
          <div style="background-image: url(img/hatw.png); background-size: 100% 100%; height: 400px; width: auto;">
            <div style="background-color: ; height: 700px; width: 1500px; margin-left: auto; display: flex; margin-right: auto;">
              <div style="margin-left: auto; margin-right: auto; background: ;">
               <div style="background-image: url(<?php echo $result['img']; ?>); background-size: 100% 100%; position: relative; height: 300px; width: 350px;top: 100px; border-radius: 100%;">
                 
               </div>

               <div style="background-image: url(img/rabab.png); background-size: 100% 100%; position: relative; height: 500px; width: 350px;top: 100px; margin-top: 20px;">
                <div style="background-color: ; height: 40px; width: 270px; margin-left: auto; margin-right: auto; color: black; margin-top: 15px;">
                    <h2 class="pt-4" style="color:black; padding-top: 150px;"><?php echo $result["name"]?> </h2>
                </div>
                <div style="background-color: ; height: 150px; width: 270px; margin-left: auto; margin-right: auto; color: black; margin-top: 100px;" >
                  <form action="workedit.php" method="POST" method="POST" enctype="multipart/form-data">
                    <input style="top: 15%" class="mt-3" name="name" id="" <?php echo "value='".$result["name"]."'"?> />
                   <input style="top: 15%" class="mt-3" name="mail" id="" <?php echo "value='".$result["mail"]."'"?> />
                   <input style="top: 15%" class="mt-3" name="plw" id="" <?php echo "value='".$result["placework"]."'"?> />
                  <select class="form-control mt-3" style="height: 40px;" name="dol" id="exampleFormControlSelect1">
      <option>Исполнитель</option>
      <option>Администратор</option>
      
    </select>
                  
                   <div class="form-group mt-1">
                            <label class="mr-2">Поменять картинку профиля</label>
                            <input type="file" name="img">
                  </div>
                    <button style="background-image: url(btn.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 140px; height: 40px; margin-top: 10px;  font-size: 12px;">
                                <p style="color: white; font-size: 14px; padding-top: 5px; ">Редактировать</p> 
                            </button>
                             </form>
                </div>
                 
               </div>
               </div>
               
              
               
                
               </div>
               
            </div>

          </div>
        </div>
      </div>
        
      
    
    </div>
     <header class="main-header top-header" id="" >
    <div class="container">
      <nav class="navbar navbar-expand-lg main-nav px-0">
        <a class="navbar-brand" href="index.php">
					      <h3 style="color: white;">Work-IT</h3>
					    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar icon-bar-1"></span>
                        <span class="icon-bar icon-bar-2"></span>
                        <span class="icon-bar icon-bar-3"></span>
                    </button>
        <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav ml-auto text-uppercase f1">
            <li>
              <a href="index.php" class="active active-first">Главная</a>
            </li>
            <li>
              <a >О нас</a>
            </li>
            
            
            <?php if ($_SESSION['id'] != "") {
                                  
           
            $text_query2 = "SELECT * FROM worker WHERE id = '{$_SESSION['id']}'";
            
            $query2 = mysqli_query($connect, $text_query2);
            
            $result2 = $query2->fetch_assoc();
            if ($result2["position"] == "Администратор") {
            	echo "<li class='scroll-to-section'><a href='worker.php'>Личный кабинет</a></li> ";
            	echo "<li class='scroll-to-section'><a href='exit.php'>Выйти</a></li> ";
            } else{

            	echo "<li class='scroll-to-section'><a href='rab.php'>Личный кабинет</a></li> ";
            	echo "<li class='scroll-to-section'><a href='exit.php'>Выйти</a></li> ";
            }
            
        } else {

            echo "<li>
              <a href='signup.php'>Регистрация</a>
            </li>
            <li>
              <a href='signin.php'>Вход</a>
            </li>
            ";

        }

        ?>
            
          </ul>
        </div>
      </nav>
    </div>
    <!-- /.container -->
  </header>
  
    
    
    <?php 
       $connect = mysqli_connect("mysql.09-15-pn.myjino.ru","09-15-pn","IT.SCHOOL123","09-15-pn_nikita-alekseev");
        $text_query = "SELECT * FROM worker ";
        $query = mysqli_query($connect, $text_query);
        $result = $query->fetch_assoc();
        echo $_SESSION['id'];

    ?>
    
    

    
   
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>  
 <script type="text/javascript">

$(document).on('scroll', function(){
    if ( $(window).scrollTop() > 30) {
        document.querySelector(".main-header").style.background = "linear-gradient(to top right, #ff4040, #ff4085)";
    } else {
        document.querySelector(".main-header").style.background = "none";
    }
});


 </script>
  </body>
</html>