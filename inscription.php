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
         <?php include('headernavtop.php') ?>

 <center class="e"style="padding-left:100px;margin:0 auto;height: auto">
   
<div class="leselments animated jackInTheBox" style="width:800px;margin: 1% auto 1% auto;display: inline-block!important"> 
<h2>Créer Un Nouveau Compte</h2>  
		<form action="inscrit-next.php" style="align-self:center;" method="POST" >
		<div>
        <label for="username" class="label"> Nom d'utilisateur</label><br>
		<input  style="height: 40px;border-radius: 15em;"	 placeholder="EX: John"         type="text" name="username">
        <label for="fname" class="label"> Nom Complet</label><br>
		<input  style="height: 40px;border-radius: 15em;"	 placeholder="EX: John McJerry" type="text" name="fname">
        <br>
		<div style="height: 40px;border-radius: 15em;width:49%;display: inline-block!important">
		<label for="login" class="label"> Email</label><br>
		<?php
		 
		$email='';
		 if(isset($_GET["inscription"])){
		$email=$_GET["login"];  
		}
		echo"<input  style='height: 40px;border-radius: 15em;' value='$email' required='yes' type='email' name='login'>"; ?>
		</div>
		<div style="margin-left:0.3%;height: 40px;border-radius: 15em;width:49.82%;display: inline-block!important">
        <label for="password" class="label">Mot de Pass</label><br>
        <input style="height: 40px;border-radius: 15em;display: inline-block!important"  placeholder="Votre Mot de Pass" required="yes" type="password" name="password">
        </div></div><br>
		<div style="height: 220px;width:100%;display:block!important">
        <label for="adress" class="label">  Adresse</label><br>
        <textarea style="margin-left:0.3%;width:99%;height: 220px;border-radius: 20px;display: inline-block!important"  placeholder="" required="yes"  name="adresse">
		</textarea>	
		</div>
		<center>
			<br><br>
		  <input class="btn" value="Réinisialiser" type="reset" style="font-family:'Lovers Quarrel';font-size:30px;margin-bottom: 1%;display: inline;">
         <!--a href="inscrit-next.php?titre_newsletter=<?php $_POST['titre_newsletter'];?>&amp;newsletter=<?php $_POST['newsletter'];?> "-->
		 <input  class="btn" type="submit" value="s'inscrire" name="inscription" style="font-family:'Lovers Quarrel';font-size:30px;margin-bottom: 1%;display: inline;">
		 
		</center>
          
        
    </form> 
</div>
</center>
     
    <nav class="nav-down">
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
