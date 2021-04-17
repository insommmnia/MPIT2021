<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<head>

    <meta charset="utf-8">
    <title>Work-IT</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="styles/index.processed.css">
    <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
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
    color: black;
   }
   h2 {
    font-family: Pompadur;
    color: black;
   }
   h3 {
    font-family: Pompadur;
    color: black;
   }
   h4 {
    font-family: Pompadur;
    color: black;
   }
   a {
    font-family: Pompadur;
    color: black;
   }
   p {
    font-family: Pompadur;
    color: black;
   }
   span {
    font-family: Pompadur;
    color: black;
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
.carousel {
    margin-bottom: 0;
    padding: 0 40px 30px 40px;
}
/* The controlsy */
.carousel-control {
  left: -12px;
    height: 40px;
  width: 40px;
    background: none repeat scroll 0 0 #222222;
    border: 4px solid #FFFFFF;
    border-radius: 23px 23px 23px 23px;
    margin-top: 90px;
}
.carousel-control.right {
  right: -12px;
}
/* The indicators */
.carousel-indicators {
  right: 50%;
  top: auto;
  bottom: -10px;
  margin-right: -19px;
}
/* The colour of the indicators */
.carousel-indicators li {
  background: #cecece;
}
.carousel-indicators .active {
background: #428bca;
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
button{
  transition: 0.2s;
}
button:hover{

  background-image: url(btn11.png);
  opacity: 0.7;
  transition: 0.2s;
}
    </style>

</head>
    <?php  
                                  
            $connect = mysqli_connect("127.0.0.1","root","","mpit");
            $text_query = "SELECT * FROM worker WHERE id = '28'";
            
            $query = mysqli_query($connect, $text_query);
            
            $result = $query->fetch_assoc();

             $text_query3 = "SELECT * FROM task WHERE idwor = '28'";
            
            $query3 = mysqli_query($connect, $text_query3);
            
            $result3 = $query3->fetch_assoc();

            
            


        ?>
    <body style="background-color: ">
      
      <div style="background-color: ; height: 900px; width: auto;">
        <div style="background-color: ; height: 800px; width: auto;">
          <div style="background-image: url(img/hatw.png); background-size: 100% 100%; height: 400px; width: auto;">
            <div style="background-color: ; height: 700px; width: 1500px; margin-left: auto; display: flex; margin-right: auto;">

              <div style="background-color:; width: 500px; height: 700px;">

                <div style="background-color: ; height: 100%; width: 400px; margin-left: 15%; margin-top: 100px;">
                  <div style="background-image: url(img/statsrab.png); background-size: 100% 100%; height: 400px; width: 400px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 0%">
                      <h3 style="padding-left: 25px; top: 5%">Статистика</h3>
                    </div>
                    <button style="background-image: url(btn.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 140px; height: 30px; margin-top: 75%;  font-size: 12px; margin-left: 30%">
                                <p style="color: white; font-size: 14px; padding-top: 3px; ">Подробнее</p> 
                    </button>
                    </div>
                  </div>

              </div>
              <div style="background-color: ; width: 400px; height: 700px;">

                <div style="margin-left: 19%;">
               <div style="background-image: url(<?php echo $result['img']; ?>); background-size: 100% 100%; position: relative; height: 300px; width: 350px;top: 50px; border-radius: 100%;">
                 
               </div>

               <div style="background-image: url(img/rabab.png); background-size: 100% 100%; position: relative; height: 300px; width: 350px;top: 50px; margin-top: 20px;">
                <div style="background-color: ; height: 40px; width: 270px; margin-left: auto; margin-right: auto; color: white; margin-top: 5px;">
                    <h2 class="pt-2"><?php echo $result["name"]?> </h2>
                </div>
                <div style="background-color: ; height: 150px; width: 270px; margin-left: auto; margin-right: auto; color: black; margin-top: 25px;" >
                  <form action="rabedit.php">
                   <p class="" style="margin-top: 50px;"><?php echo $result["placework"]?> </p>
                   <p class="" style="margin-top: 15px;"><?php echo $result["mail"]?> </p>
                   <p class="" style="margin-top: 15px;"><?php echo $result["position"]?> </p>
                   <p class="" style="margin-top: 15px;">Дизайнер </p>

                   
                   
                          </form>
                </div>
                 
               </div>
               </div>
              </div>
              <div style="background-color:; width: 500px; height: 700px; margin-left: auto;">

                <div style="background-color: ; height: 100%; width: 300px; margin-left: 5% ; margin-top: 100px">
                  <div style="background-image: url(img/bgw.png); background-size: 100% 100%; height: 400px; width: 400px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 5%">
                      <h3 style="padding-left: 25px; top: 15%">Группа А</h3>
                    </div>
                    <div style="background-color: ; width: 280px; position: relative; height: 300px; top: 5%; left: 5%">

                      <div style="background-color:; height: 100px; width: 280px; display: flex; margin-top: 10px;">
                        <div style="background-color: ; height: 100px; width: 100px; display: flex; margin-left: 15px; ">
                          <img  class="" <?php echo "src='".$result["img"]."'"?>  style="border-radius: 100%; height: 75px; width: 75px;">
                        
                      </div>
                      <div style="background-color: ; height: 100px; width: 100px;  margin-left: 20px;">
                        <div style="background-color: ; height: 20px; width: 180px;"><p style="margin-top: 10px;"><?php echo $result['name'];?></p></div>
                        <div style="background-color: ; height: 20px; width: 100px;"><p style="margin-top: 5px;">Дизайнер</p></div>
                        

                        
                      </div>
                      </div>
                      <div style="background-color:; height: 100px; width: 280px; display: flex; margin-top: 10px;">
                        <div style="background-color: ; height: 100px; width: 100px; display: flex; margin-left: 15px; ">
                          <img  class="" src="img/ocr.jpg" style="border-radius: 100%; height: 75px; width: 75px;">
                        
                      </div>
                      <div style="background-color: ; height: 100px; width: 100px;  margin-left: 20px;">
                        <div style="background-color: ; height: 20px; width: 180px;"><p style="margin-top: 10px;">Григорий Иванов</p></div>
                        <div style="background-color: ; height: 20px; width: 100px;"><p style="margin-top: 5px;">Дизайнер</p></div>
                        

                        
                      </div>
                      </div>
                      <div style="background-color:; height: 100px; width: 280px; display: flex; margin-top: 10px;">
                        <div style="background-color: ; height: 100px; width: 100px; display: flex; margin-left: 15px; ">
                          <img  class="" src="img/ocr.jpg" style="border-radius: 100%; height: 75px; width: 75px;">
                        
                      </div>
                      <div style="background-color: ; height: 100px; width: 100px;  margin-left: 20px;">
                        <div style="background-color: ; height: 20px; width: 180px;"><p style="margin-top: 10px;">Григорий Иванов</p></div>
                        <div style="background-color: ; height: 20px; width: 100px;"><p style="margin-top: 5px;">Дизайнер</p></div>
                        

                        
                      </div>
                      </div>


                      
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
        <a class="navbar-brand" href="/mojo">
                <img src="logo.png" style="width: 100%" alt="rajeshdas.com">
              </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar icon-bar-1"></span>
                        <span class="icon-bar icon-bar-2"></span>
                        <span class="icon-bar icon-bar-3"></span>
                    </button>
        <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav ml-auto text-uppercase f1">
            <li>
              <a href="#home" class="active active-first">Главная</a>
            </li>
            <li>
              <a href="#about">О нас</a>
            </li>
            
            <li>
              <a href="#testimony">Подписки</a>
            </li>
            <?php if ($_SESSION['id'] != "") {
                                  
           
            $text_query2 = "SELECT * FROM worker WHERE id = '28'";
            
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
       $connect = mysqli_connect("127.0.0.1","root","","mpit");
        $text_query = "SELECT * FROM worker ";
        $query = mysqli_query($connect, $text_query);
        $result = $query->fetch_assoc();
        $text_query2 = "SELECT * FROM plan WHERE idwor = '28' ";
        $query = mysqli_query($connect, $text_query2);
        $result2 = $query->fetch_assoc();
        echo $_SESSION['id'];

    ?>
    <div class="col-12" style="background-color:;  height: 1000px; margin-top: 0px;">
    
      <div  class="col-9" style="background-color: ; width: 1800px; height: 1000px; margin-left: auto;margin-right: auto; display: flex;">
        <div style="background-color: ; width: 900px; height: 1000px; margin-left: 10px;">
          <div style="background-color: ; width: 900px; height: 500px; display: flex;">
            <div style="background-color: ; width: 300px; height: 500px;">
            <div style="background-color: ; height: 100%; width: 300px; ">
                  <div style="background-image: url(img/rabab.png); background-size: 100% 100%; height: 100%; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 5%">
                       <button class="btnp" style="border: none; margin-left: 5px;background: transparent;"><h3 style=" top: 15%; ">18 Апреля 
                        </h3>
                        </button>
                    </div>
                    
                    <div style="background-color:  ; width: 300px; position: relative; height: 30px; top: 8%; left: 10%">
                      
                       <form action="planrab.php" method="POST" method="POST" enctype="multipart/form-data">
                      <p style="margin-top: 30px;">1.<?php echo $result2["pl1"]?> </p>
                      <p style="margin-top: 30px;">2.<?php echo $result2["pl2"]?> </p>
                      <p style="margin-top: 30px;">3.<?php echo $result2["pl3"]?> </p>
                      <p style="margin-top: 30px;">4.<?php echo $result2["pl4"]?> </p>
                      <p style="margin-top: 30px;">5.<?php echo $result2["pl5"]?> </p>
                      <p style="margin-top: 30px;">6.<?php echo $result2["pl6"]?> </p>
                    
                  
                  
                   
                   
                    
                             </form>
                  </div>
                     
                     
                   
                  </div>
                
               </div>
          </div>
          <div style="background-color: ; width: 300px; height: 500px;">
            <div style="background-color: ; height: 100%; width: 300px; ">
                  <div style="background-image: url(img/rabab.png); background-size: 100% 100%; height: 100%; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 5%">
                       <button class="btnp" style="border: none; margin-left: 5px;background: transparent;"><h3 style=" top: 15%;">19 Апреля 
                        </h3>
                        </button>
                    </div>
                    
                    <div style="background-color:  ; width: 300px; position: relative; height: 30px; top: 8%; left: 10%">
                      
                       <form action="planrab.php" method="POST" method="POST" enctype="multipart/form-data">
                      <p style="margin-top: 30px;">1.<?php echo $result2["pl1"]?> </p>
                      <p style="margin-top: 30px;">2.<?php echo $result2["pl2"]?> </p>
                      <p style="margin-top: 30px;">3.<?php echo $result2["pl3"]?> </p>
                      <p style="margin-top: 30px;">4.<?php echo $result2["pl4"]?> </p>
                      <p style="margin-top: 30px;">5.<?php echo $result2["pl5"]?> </p>
                      <p style="margin-top: 30px;">6.<?php echo $result2["pl6"]?> </p>
                    
                  
                  
                   
                   
                    
                             </form>
                  </div>
                     
                     
                   
                  </div>
                
               </div>
          </div>
          <div style="background-color: ; width: 300px; height: 500px;">
            <div style="background-color: ; height: 100%; width: 300px; ">
                  <div style="background-image: url(img/rabab.png); background-size: 100% 100%; height: 100%; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 5%">
                       <button class="btnp" style="border: none; margin-left: 5px;background: transparent;"><h3 style=" top: 10%;">20 Апреля 
                        </h3>
                        </button>
                    </div>
                    
                    <div style="background-color:  ; width: 300px; position: relative; height: 30px; top: 8%; left: 10%">
                      
                       <form action="planrab.php" method="POST" method="POST" enctype="multipart/form-data">
                      <p style="margin-top: 30px;">1.<?php echo $result2["pl1"]?> </p>
                      <p style="margin-top: 30px;">2.<?php echo $result2["pl2"]?> </p>
                      <p style="margin-top: 30px;">3.<?php echo $result2["pl3"]?> </p>
                      <p style="margin-top: 30px;">4.<?php echo $result2["pl4"]?> </p>
                      <p style="margin-top: 30px;">5.<?php echo $result2["pl5"]?> </p>
                      <p style="margin-top: 30px;">6.<?php echo $result2["pl6"]?> </p>
                    
                  
                  
                   
                   
                    
                             </form>
                  </div>
                     
                     
                   
                  </div>
                
               </div>
          </div>
          </div>
          <div style="background-color: ; width: 900px; height: 500px; display: flex;">
            <div style="background-color: ; width: 300px; height: 500px;">
            <div style="background-color: ; height: 100%; width: 300px; ">
                  <div style="background-image: url(img/rabab.png); background-size: 100% 100%; height: 100%; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 5%">
                       <button class="btnp" style="border: none; margin-left: 5px;background: transparent;"><h3 style=" top: 10%;">21 Апреля 
                        </h3>
                        </button>
                    </div>
                    
                    <div style="background-color:  ; width: 300px; position: relative; height: 30px; top: 8%; left: 10%">
                      
                       <form action="planrab.php" method="POST" method="POST" enctype="multipart/form-data">
                      <p style="margin-top: 30px;">1.<?php echo $result2["pl1"]?> </p>
                      <p style="margin-top: 30px;">2.<?php echo $result2["pl2"]?> </p>
                      <p style="margin-top: 30px;">3.<?php echo $result2["pl3"]?> </p>
                      <p style="margin-top: 30px;">4.<?php echo $result2["pl4"]?> </p>
                      <p style="margin-top: 30px;">5.<?php echo $result2["pl5"]?> </p>
                      <p style="margin-top: 30px;">6.<?php echo $result2["pl6"]?> </p>
                    
                  
                  
                   
                   
                    
                             </form>
                  </div>
                     
                     
                   
                  </div>
                
               </div>
          </div>
          <div style="background-color: ; width: 300px; height: 500px;">
            <div style="background-color: ; height: 100%; width: 300px; ">
                  <div style="background-image: url(img/rabab.png); background-size: 100% 100%; height: 100%; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 5%">
                       <button class="btnp" style="border: none; margin-left: 5px;background: transparent;"><h3 style=" top: 15%;">22 Апреля 
                        </h3>
                        </button>
                    </div>
                    
                    <div style="background-color:  ; width: 300px; position: relative; height: 30px; top: 8%; left: 10%">
                      
                       <form action="planrab.php" method="POST" method="POST" enctype="multipart/form-data">
                      <p style="margin-top: 30px;">1.<?php echo $result2["pl1"]?> </p>
                      <p style="margin-top: 30px;">2.<?php echo $result2["pl2"]?> </p>
                      <p style="margin-top: 30px;">3.<?php echo $result2["pl3"]?> </p>
                      <p style="margin-top: 30px;">4.<?php echo $result2["pl4"]?> </p>
                      <p style="margin-top: 30px;">5.<?php echo $result2["pl5"]?> </p>
                      <p style="margin-top: 30px;">6.<?php echo $result2["pl6"]?> </p>
                    
                  
                  
                   
                   
                    
                             </form>
                  </div>
                     
                     
                   
                  </div>
                
               </div>
          </div>
          <div style="background-color: ; width: 300px; height: 500px;">
            <div style="background-color: ; height: 100%; width: 300px; ">
                  <div style="background-image: url(img/rabab.png); background-size: 100% 100%; height: 100%; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 5%">
                       <button class="btnp" style="border: none; margin-left: 5px;background: transparent;"><h3 style=" top: 15%;">23 Апреля 
                        </h3>
                        </button>
                    </div>
                    
                    <div style="background-color:  ; width: 300px; position: relative; height: 30px; top: 8%; left: 10%">
                      
                       <form action="planrab.php" method="POST" method="POST" enctype="multipart/form-data">
                      <p style="margin-top: 30px;">1.<?php echo $result2["pl1"]?> </p>
                      <p style="margin-top: 30px;">2.<?php echo $result2["pl2"]?> </p>
                      <p style="margin-top: 30px;">3.<?php echo $result2["pl3"]?> </p>
                      <p style="margin-top: 30px;">4.<?php echo $result2["pl4"]?> </p>
                      <p style="margin-top: 30px;">5.<?php echo $result2["pl5"]?> </p>
                      <p style="margin-top: 30px;">6.<?php echo $result2["pl6"]?> </p>
                    
                  
                  
                   
                   
                    
                             </form>
                  </div>
                     
                     
                   
                  </div>
                
               </div>
          </div>
          </div>
        </div>
         <div style="background-color: ; width: 400px; height: 1000px; margin-left: 10px;display: flex;">
            <div style="background-color: ; width: 400px; height: 800px;">
              <div class="pla" style="z-index: 0; margin-left: 50px; margin-top: 20%; transition: 0.5s;position: absolute; opacity: 0; background-color: ; height: 500px; width: 300px; ">
                  <div style="background-image: url(img/rabab2.png); background-size: 100% 100%; height: 700px; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 3%">
                      <h4 style="padding-left: 25px; top: 0%; font-size: 22px; ">18 Апреля
                        <?php 
                        if($result3["ready"] == 0)
                        {
                          echo "Не выполнено";
                        } 
                        if($result3["ready"] == 1)
                        {
                          echo "Выполнено";
                        }
                        if($result3["ready"] == 3)
                        {
                          echo "Доработать";
                        }  
                        ?>
                      </h4>
                    </div>
                    
                    <div style="background-color: ; width: 300px; position: relative; height: 30px; top: 4%; left: 15%">
                      
                      <p><?php echo $result3["task"]; ?></p>
                       </div>
                      <hr style="width: 100px; margin-left: auto;margin-right: auto; margin-top: 20%;">
                       <div style="background-color:; width: 300px; position: relative; height: 50px; margin-top: 10px; ">
                      <h3 style="padding-left: 25px;">Комментарии</h3>
                    </div>
                    
                    <div style="background-color: ; width: 200px; position: relative; height: 100px; top: 3%; left: 15%">
                      
                      <p><?php echo $result3["comment"]; ?></p>
                       </div>
                       <h3 style="padding-left: 25px;">Изображение</h3>
                       <a <?php echo "href='".$result3["img"]."'"; ?> rel="lightbox" title="my caption"><img <?php echo "src='".$result3["img"]."'"; ?>src="img/btn.png" style="height: 30px; width: 30px; margin-left: 10px;"></a>
                    <?php  if ($result3["ready"] == 1) {

                      echo "
                      
                    
                       <form action='taskdor.php' method='POST' enctype='multipart/form-data'>
                       <div class='form-group' style='margin-left: 20px; margin-top: 50px;'>
  <h3 style='font-size: 19px;'>Добавить Комментарий к работе</h3>
  <textarea class='form-control rounded-0' name='com' style='width: 200px; max-height: 50px; font-size: 12px;' id='exampleFormControlTextarea2' rows='2'></textarea>
  <input type='' name='id' style='display: block;' value='".$result['id']."' >
</div>
                  <div style='background-color:  ; width: 300px; height: 50px; display: flex;'>
                    <button style='z-index: 100; background-image: url(btn.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 180px; height: 40px; margin-top: 10px;  font-size: 12px; margin-left: 10px; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Отправить на доработку</p> 
                            </button>
                            </form>
                    <form action='taskgood.php' method='POST' enctype='multipart/form-data' >
                       
                    <button style='z-index: 100; background-image: url(img/btn3.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 80px; height: 40px; margin-top: 10px;  font-size: 12px; display: block; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Принять</p> 
                            </button>
                      </form>
</div>
                      "; }?>
                  
                     
                     
                   
                  </div>
                
               </div>
               <div class="pla" style="z-index: 0; margin-left: 50px; margin-top: 20%; transition: 0.5s;position: absolute; opacity: 0; background-color: ; height: 500px; width: 300px; ">
                  <div style="background-image: url(img/rabab2.png); background-size: 100% 100%; height: 700px; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 3%">
                      <h4 style="padding-left: 25px; top: 0%; font-size: 22px; ">19 Апреля
                        <?php 
                        if($result3["ready"] == 0)
                        {
                          echo "Не выполнено";
                        } 
                        if($result3["ready"] == 1)
                        {
                          echo "Выполнено";
                        }
                        if($result3["ready"] == 3)
                        {
                          echo "Доработать";
                        }  
                        ?>
                      </h4>
                    </div>
                    
                    <div style="background-color: ; width: 300px; position: relative; height: 30px; top: 4%; left: 15%">
                      
                      <p><?php echo $result3["task"]; ?></p>
                       </div>
                      <hr style="width: 100px; margin-left: auto;margin-right: auto; margin-top: 20%;">
                       <div style="background-color:; width: 300px; position: relative; height: 50px; margin-top: 10px; ">
                      <h3 style="padding-left: 25px;">Комментарии</h3>
                    </div>
                    
                    <div style="background-color: ; width: 200px; position: relative; height: 100px; top: 3%; left: 15%">
                      
                      <p><?php echo $result3["comment"]; ?></p>
                       </div>
                       <h3 style="padding-left: 25px;">Изображение</h3>
                       <a <?php echo "href='".$result3["img"]."'"; ?> rel="lightbox" title="my caption"><img <?php echo "src='".$result3["img"]."'"; ?>src="img/btn.png" style="height: 30px; width: 30px; margin-left: 10px;"></a>
                    <?php  if ($result3["ready"] == 1) {

                      echo "
                      
                    
                       <form action='taskdor.php' method='POST' enctype='multipart/form-data'>
                       <div class='form-group' style='margin-left: 20px; margin-top: 50px;'>
  <h3 style='font-size: 19px;'>Добавить Комментарий к работе</h3>
  <textarea class='form-control rounded-0' name='com' style='width: 200px; max-height: 50px; font-size: 12px;' id='exampleFormControlTextarea2' rows='2'></textarea>
  <input type='' name='id' style='display: block;' value='".$result['id']."' >
</div>
                  <div style='background-color:  ; width: 300px; height: 50px; display: flex;'>
                    <button style='z-index: 100; background-image: url(btn.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 180px; height: 40px; margin-top: 10px;  font-size: 12px; margin-left: 10px; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Отправить на доработку</p> 
                            </button>
                            </form>
                    <form action='taskgood.php' method='POST' enctype='multipart/form-data' >
                       
                    <button style='z-index: 100; background-image: url(img/btn3.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 80px; height: 40px; margin-top: 10px;  font-size: 12px; display: block; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Принять</p> 
                            </button>
                      </form>
</div>
                      "; }?>
                  
                     
                     
                   
                  </div>
                
               </div>
               <div class="pla" style="z-index: 0; margin-left: 50px; margin-top: 20%; transition: 0.5s;position: absolute; opacity: 0; background-color: ; height: 500px; width: 300px; ">
                  <div style="background-image: url(img/rabab2.png); background-size: 100% 100%; height: 700px; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 3%">
                      <h4 style="padding-left: 25px; top: 0%; font-size: 22px; ">20 Апреля
                        <?php 
                        if($result3["ready"] == 0)
                        {
                          echo "Не выполнено";
                        } 
                        if($result3["ready"] == 1)
                        {
                          echo "Выполнено";
                        }
                        if($result3["ready"] == 3)
                        {
                          echo "Доработать";
                        }  
                        ?>
                      </h4>
                    </div>
                    
                    <div style="background-color: ; width: 300px; position: relative; height: 30px; top: 4%; left: 15%">
                      
                      <p><?php echo $result3["task"]; ?></p>
                       </div>
                      <hr style="width: 100px; margin-left: auto;margin-right: auto; margin-top: 20%;">
                       <div style="background-color:; width: 300px; position: relative; height: 50px; margin-top: 10px; ">
                      <h3 style="padding-left: 25px;">Комментарии</h3>
                    </div>
                    
                    <div style="background-color: ; width: 200px; position: relative; height: 100px; top: 3%; left: 15%">
                      
                      <p><?php echo $result3["comment"]; ?></p>
                       </div>
                       <h3 style="padding-left: 25px;">Изображение</h3>
                       <a <?php echo "href='".$result3["img"]."'"; ?> rel="lightbox" title="my caption"><img <?php echo "src='".$result3["img"]."'"; ?>src="img/btn.png" style="height: 30px; width: 30px; margin-left: 10px;"></a>
                    <?php  if ($result3["ready"] == 1) {

                      echo "
                      
                    
                       <form action='taskdor.php' method='POST' enctype='multipart/form-data'>
                       <div class='form-group' style='margin-left: 20px; margin-top: 50px;'>
  <h3 style='font-size: 19px;'>Добавить Комментарий к работе</h3>
  <textarea class='form-control rounded-0' name='com' style='width: 200px; max-height: 50px; font-size: 12px;' id='exampleFormControlTextarea2' rows='2'></textarea>
  <input type='' name='id' style='display: block;' value='".$result['id']."' >
</div>
                  <div style='background-color:  ; width: 300px; height: 50px; display: flex;'>
                    <button style='z-index: 100; background-image: url(btn.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 180px; height: 40px; margin-top: 10px;  font-size: 12px; margin-left: 10px; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Отправить на доработку</p> 
                            </button>
                            </form>
                    <form action='taskgood.php' method='POST' enctype='multipart/form-data' >
                       
                    <button style='z-index: 100; background-image: url(img/btn3.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 80px; height: 40px; margin-top: 10px;  font-size: 12px; display: block; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Принять</p> 
                            </button>
                      </form>
</div>
                      "; }?>
                  
                     
                     
                   
                  </div>
                
               </div>
               <div class="pla" style="z-index: 0; margin-left: 50px; margin-top: 20%; transition: 0.5s;position: absolute; opacity: 0; background-color: ; height: 500px; width: 300px; ">
                  <div style="background-image: url(img/rabab2.png); background-size: 100% 100%; height: 700px; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 3%">
                      <h4 style="padding-left: 25px; top: 0%; font-size: 22px; ">21 Апреля
                        <?php 
                        if($result3["ready"] == 0)
                        {
                          echo "Не выполнено";
                        } 
                        if($result3["ready"] == 1)
                        {
                          echo "Выполнено";
                        }
                        if($result3["ready"] == 3)
                        {
                          echo "Доработать";
                        }  
                        ?>
                      </h4>
                    </div>
                    
                    <div style="background-color: ; width: 300px; position: relative; height: 30px; top: 4%; left: 15%">
                      
                      <p><?php echo $result3["task"]; ?></p>
                       </div>
                      <hr style="width: 100px; margin-left: auto;margin-right: auto; margin-top: 20%;">
                       <div style="background-color:; width: 300px; position: relative; height: 50px; margin-top: 10px; ">
                      <h3 style="padding-left: 25px;">Комментарии</h3>
                    </div>
                    
                    <div style="background-color: ; width: 200px; position: relative; height: 100px; top: 3%; left: 15%">
                      
                      <p><?php echo $result3["comment"]; ?></p>
                       </div>
                       <h3 style="padding-left: 25px;">Изображение</h3>
                       <a <?php echo "href='".$result3["img"]."'"; ?> rel="lightbox" title="my caption"><img <?php echo "src='".$result3["img"]."'"; ?>src="img/btn.png" style="height: 30px; width: 30px; margin-left: 10px;"></a>
                    <?php  if ($result3["ready"] == 1) {

                      echo "
                      
                    
                       <form action='taskdor.php' method='POST' enctype='multipart/form-data'>
                       <div class='form-group' style='margin-left: 20px; margin-top: 50px;'>
  <h3 style='font-size: 19px;'>Добавить Комментарий к работе</h3>
  <textarea class='form-control rounded-0' name='com' style='width: 200px; max-height: 50px; font-size: 12px;' id='exampleFormControlTextarea2' rows='2'></textarea>
  <input type='' name='id' style='display: block;' value='".$result['id']."' >
</div>
                  <div style='background-color:  ; width: 300px; height: 50px; display: flex;'>
                    <button style='z-index: 100; background-image: url(btn.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 180px; height: 40px; margin-top: 10px;  font-size: 12px; margin-left: 10px; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Отправить на доработку</p> 
                            </button>
                            </form>
                    <form action='taskgood.php' method='POST' enctype='multipart/form-data' >
                       
                    <button style='z-index: 100; background-image: url(img/btn3.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 80px; height: 40px; margin-top: 10px;  font-size: 12px; display: block; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Принять</p> 
                            </button>
                      </form>
</div>
                      "; }?>
                  
                     
                     
                   
                  </div>
                
               </div>
                
               </div>
               <div class="pla" style="z-index: 0; margin-left: 50px; margin-top: 20%; transition: 0.5s;position: absolute; opacity: 0; background-color: ; height: 500px; width: 300px; ">
                  <div style="background-image: url(img/rabab2.png); background-size: 100% 100%; height: 700px; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 3%">
                      <h4 style="padding-left: 25px; top: 0%; font-size: 22px; ">22 Апреля
                        <?php 
                        if($result3["ready"] == 0)
                        {
                          echo "Не выполнено";
                        } 
                        if($result3["ready"] == 1)
                        {
                          echo "Выполнено";
                        }
                        if($result3["ready"] == 3)
                        {
                          echo "Доработать";
                        }  
                        ?>
                      </h4>
                    </div>
                    
                    <div style="background-color: ; width: 300px; position: relative; height: 30px; top: 4%; left: 15%">
                      
                      <p><?php echo $result3["task"]; ?></p>
                       </div>
                      <hr style="width: 100px; margin-left: auto;margin-right: auto; margin-top: 20%;">
                       <div style="background-color:; width: 300px; position: relative; height: 50px; margin-top: 10px; ">
                      <h3 style="padding-left: 25px;">Комментарии</h3>
                    </div>
                    
                    <div style="background-color: ; width: 200px; position: relative; height: 100px; top: 3%; left: 15%">
                      
                      <p><?php echo $result3["comment"]; ?></p>
                       </div>
                       <h3 style="padding-left: 25px;">Изображение</h3>
                       <a <?php echo "href='".$result3["img"]."'"; ?> rel="lightbox" title="my caption"><img <?php echo "src='".$result3["img"]."'"; ?>src="img/btn.png" style="height: 30px; width: 30px; margin-left: 10px;"></a>
                    <?php  if ($result3["ready"] == 1) {

                      echo "
                      
                    
                       <form action='taskdor.php' method='POST' enctype='multipart/form-data'>
                       <div class='form-group' style='margin-left: 20px; margin-top: 50px;'>
  <h3 style='font-size: 19px;'>Добавить Комментарий к работе</h3>
  <textarea class='form-control rounded-0' name='com' style='width: 200px; max-height: 50px; font-size: 12px;' id='exampleFormControlTextarea2' rows='2'></textarea>
  <input type='' name='id' style='display: block;' value='".$result['id']."' >
</div>
                  <div style='background-color:  ; width: 300px; height: 50px; display: flex;'>
                    <button style='z-index: 100; background-image: url(btn.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 180px; height: 40px; margin-top: 10px;  font-size: 12px; margin-left: 10px; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Отправить на доработку</p> 
                            </button>
                            </form>
                    <form action='taskgood.php' method='POST' enctype='multipart/form-data' >
                       
                    <button style='z-index: 100; background-image: url(img/btn3.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 80px; height: 40px; margin-top: 10px;  font-size: 12px; display: block; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Принять</p> 
                            </button>
                      </form>
</div>
                      "; }?>
                  
                     
                     
                   
                  </div>
                
               </div>
                
               
              <div class="pla" style="z-index: 0; margin-left: 50px; margin-top: 20%; transition: 0.5s;position: absolute; opacity: 0; background-color: ; height: 500px; width: 300px; ">
                  <div style="background-image: url(img/rabab2.png); background-size: 100% 100%; height: 700px; width: 300px; ">
                    <div style="background-color: ; width: 300px; position: relative; height: 50px; top: 3%">
                      <h4 style="padding-left: 25px; top: 0%; font-size: 22px; ">23 Апреля
                        <?php 
                        if($result3["ready"] == 0)
                        {
                          echo "Не выполнено";
                        } 
                        if($result3["ready"] == 1)
                        {
                          echo "Выполнено";
                        }
                        if($result3["ready"] == 3)
                        {
                          echo "Доработать";
                        }  
                        ?>
                      </h4>
                    </div>
                    
                    <div style="background-color: ; width: 300px; position: relative; height: 30px; top: 4%; left: 15%">
                      
                      <p><?php echo $result3["task"]; ?></p>
                       </div>
                      <hr style="width: 100px; margin-left: auto;margin-right: auto; margin-top: 20%;">
                       <div style="background-color:; width: 300px; position: relative; height: 50px; margin-top: 10px; ">
                      <h3 style="padding-left: 25px;">Комментарии</h3>
                    </div>
                    
                    <div style="background-color: ; width: 200px; position: relative; height: 100px; top: 3%; left: 15%">
                      
                      <p><?php echo $result3["comment"]; ?></p>
                       </div>
                       <h3 style="padding-left: 25px;">Изображение</h3>
                       <a <?php echo "href='".$result3["img"]."'"; ?> rel="lightbox" title="my caption"><img <?php echo "src='".$result3["img"]."'"; ?>src="img/btn.png" style="height: 30px; width: 30px; margin-left: 10px;"></a>
                    <?php  if ($result3["ready"] == 1) {

                      echo "
                      
                    
                       <form action='taskdor.php' method='POST' enctype='multipart/form-data'>
                       <div class='form-group' style='margin-left: 20px; margin-top: 50px;'>
  <h3 style='font-size: 19px;'>Добавить Комментарий к работе</h3>
  <textarea class='form-control rounded-0' name='com' style='width: 200px; max-height: 50px; font-size: 12px;' id='exampleFormControlTextarea2' rows='2'></textarea>
  <input type='' name='id' style='display: block;' value='".$result['id']."' >
</div>
                  <div style='background-color:  ; width: 300px; height: 50px; display: flex;'>
                    <button style='z-index: 100; background-image: url(btn.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 180px; height: 40px; margin-top: 10px;  font-size: 12px; margin-left: 10px; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Отправить на доработку</p> 
                            </button>
                            </form>
                    <form action='taskgood.php' method='POST' enctype='multipart/form-data' >
                       
                    <button style='z-index: 100; background-image: url(img/btn3.png); border: none; background-size: 100% 100%; border-radius: 50px; width: 80px; height: 40px; margin-top: 10px;  font-size: 12px; display: block; '>
                                <p style='color: white; font-size: 14px; padding-top: 5px; '>Принять</p> 
                            </button>
                      </form>
</div>
                      "; }?>
                  
                     
                     
                   
                  </div>
                
               </div>
                
               </div>
            </div>
         </div>

    
</div><!-- End -->
</div>


    

    
   
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>  
  <script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
 <script type="text/javascript">

$(document).on('scroll', function(){
    if ( $(window).scrollTop() > 30) {
        document.querySelector(".main-header").style.background = "linear-gradient(to top right, #ff4040, #ff4085)";
    } else {
        document.querySelector(".main-header").style.background = "none";
    }
});

btn = document.querySelectorAll(".btnp");
plan = document.querySelectorAll(".pla");


btn[0].onclick = function()
{
  plan[0].style.opacity = 1;
  plan[1].style.opacity = 0;
  plan[2].style.opacity = 0;
  plan[3].style.opacity = 0;
  plan[4].style.opacity = 0;
  plan[5].style.opacity = 0;

   plan[0].style.zIndex = 1;
  plan[1].style.zIndex = 0;
  plan[2].style.zIndex = 0;
  plan[3].style.zIndex = 0;
  plan[4].style.zIndex = 0;
  plan[5].style.zIndex = 0;

}
btn[1].onclick = function()
{
  plan[0].style.opacity = 0;
  plan[1].style.opacity = 1;
  plan[2].style.opacity = 0;
  plan[3].style.opacity = 0;
  plan[4].style.opacity = 0;
  plan[5].style.opacity = 0;

   plan[0].style.zIndex = 0;
  plan[1].style.zIndex = 1;
  plan[2].style.zIndex = 0;
  plan[3].style.zIndex = 0;
  plan[4].style.zIndex = 0;
  plan[5].style.zIndex = 0;


}
btn[2].onclick = function()
{
  plan[0].style.opacity = 0;
  plan[1].style.opacity = 0;
  plan[2].style.opacity = 1;
  plan[3].style.opacity = 0;
  plan[4].style.opacity = 0;
  plan[5].style.opacity = 0;

  plan[0].style.zIndex = 0;
  plan[1].style.zIndex = 0;
  plan[2].style.zIndex = 1;
  plan[3].style.zIndex = 0;
  plan[4].style.zIndex = 0;
  plan[5].style.zIndex = 0;

}
btn[3].onclick = function()
{
  plan[0].style.opacity = 0;
  plan[1].style.opacity = 0;
  plan[2].style.opacity = 0;
  plan[3].style.opacity = 1;
  plan[4].style.opacity = 0;
  plan[5].style.opacity = 0;

  plan[0].style.zIndex = 0;
  plan[1].style.zIndex = 0;
  plan[2].style.zIndex = 0;
  plan[3].style.zIndex = 1;
  plan[4].style.zIndex = 0;
  plan[5].style.zIndex = 0;

}
btn[4].onclick = function()
{
  plan[0].style.opacity = 0;
  plan[1].style.opacity = 0;
  plan[2].style.opacity = 0;
  plan[3].style.opacity = 0;
  plan[4].style.opacity = 1;
  plan[5].style.opacity = 0;

  plan[0].style.zIndex = 0;
  plan[1].style.zIndex = 0;
  plan[2].style.zIndex = 0;
  plan[3].style.zIndex = 0;
  plan[4].style.zIndex = 1;
  plan[5].style.zIndex = 0;
  
}
btn[5].onclick = function()
{
  plan[0].style.opacity = 0;
  plan[1].style.opacity = 0;
  plan[2].style.opacity = 0;
  plan[3].style.opacity = 0;
  plan[4].style.opacity = 0;
  plan[5].style.opacity = 1;

  plan[0].style.zIndex = 0;
  plan[1].style.zIndex = 0;
  plan[2].style.zIndex = 0;
  plan[3].style.zIndex = 0;
  plan[4].style.zIndex = 0;
  plan[5].style.zIndex = 1;
  
}




 </script>
  </body>
</html>