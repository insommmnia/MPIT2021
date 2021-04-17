<?php 
  session_start();
 ?>
<?php
	
  	 $con = mysqli_connect("127.0.0.1","root","","mpit");

	$text_query =  "SELECT * FROM plan";

  	$query = mysqli_query($con, $text_query);

  	$text_zaprosa_vstavit = "UPDATE plan SET pl1 = '{$_POST["pl1"]}', pl2 = '{$_POST["pl2"]}', pl3 = '{$_POST["pl3"]}', pl4 = '{$_POST["pl4"]}', pl5 = '{$_POST["pl5"]}' , pl6 = '{$_POST["pl6"]}' WHERE idwor = {$_SESSION['id']}";
  	
  	//$text_zaprosa_vstavit = "INSERT INTO plan (idwor, pl1, pl2, pl3, pl4, pl5, pl6)
            //VALUES('{$_SESSION['id']}', '{$_POST["pl1"]}', '{$_POST["pl2"]}', '{$_POST["pl3"]}', '{$_POST["pl4"]}', '{$_POST["pl5"]}', '{$_POST["pl6"]}')";

            
  $query_insert = mysqli_query($con, $text_zaprosa_vstavit);
  header('Location: rab.php');
  


?>