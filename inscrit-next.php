<?php  
 if(isset($_POST["inscription"])){
 //create new user
//INSERT INTO users (name, email, password, address) VALUES ('{$_POST['name']}', '{$_POST['login']}',md5({$_POST['password']}),'{$_POST['adresse']}')
		session_start(); 
		mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),"INSERT INTO user (name, username, email, password, address) VALUES ('{$_POST['fname']}','{$_POST['username']}', '{$_POST['login']}',md5('{$_POST['password']}'),'{$_POST['adresse']}')");
 
?>
<!DOCTYPE HTML>
<html lang="en-EN">
    <head>
        <title> Mon shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="page.css">
        <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Merienda" rel="stylesheet">
      </head>
    <body>
 <?php include("headernavtop.php")?>

 <center style="height: auto">
   
<div class="leselments" style="width:100%;margin: 1% auto 1% auto;display: inline-block!important"> 
<h2>Compte créé avce succés</h2>  
		 
		  <a href="login.php" style="text-decoration: none"><button class="btn" value="Se Connecter" type="reset" style="font-family:'Lovers Quarrel';font-size:30px;margin-bottom: 1%;display: inline;text-decoration: none">Se Connecter</button>
          </a>
</div>
</center>
     
    <nav class="nav-down" style='margin-top: 20%'>
         <li class="menu-ind-top">
                <a href="#">Top</a>
          </li>
        <div class="table">
         <ul> 
            <li class="menu-ind">
                <a href="about.html">A propos</a>
            </li>
            <li class="menu-ind">
                <a href="hobbies.html">politique de confidentialité</a>
            </li>
             
         </ul>
        </div>
       </nav> 
       <footer>
         <center>
        <div id="social">
            <p>  <img width="60px" src="https://static.breslo.ro/Uploads/logo/2014/11/28/09/141716822885590-logo.jpg">  </p>
            <a id="fb" href=""></a>
            <a id="tw" href=""></a>
            <a id="gp" href=""></a>
            <a id="yt" href=""></a>
            <a id="tu" href=""></a>
        </div>
        </center>
       </footer>  
    </body>
</html>
<?php }
else{header( "refresh:0.0000001;url=login.php" );
      exit();}
?>