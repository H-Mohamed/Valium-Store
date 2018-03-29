<?php 
session_abort();
session_start();
function couper($string) {
		$string = trim($string);
		$append="&hellip;";
		$length=20;
		if(strlen($string) > $length) {
		$string = wordwrap($string, $length);
		$string = explode("\n", $string, 2);
		$string = $string[0] . $append;
		}

		 return $string;
	}
?>
<html lang="en-EN" class="animated">
  <head>
    <title>
      Mon shop
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='styleprofile.css' rel='stylesheet'/> 
    <link rel="stylesheet" type="text/css" href="page.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Merienda" rel="stylesheet">
  </head>
<body style='width: 100%'>
	<?php include("headernavtop.php");?>
   <div style='height: 500px'>      
  <div class="slidebar"> 
    <ul> 
      <li><a href="?usercommande=updateuser#Utilisateur">Mes Informations</a></li> 
      <li><a href="?commandecommande=viewall#commandes">Commandes</a></li> 
    </ul>
  </div>
  
  <div class="main"  style='width: 780px'> 
    <div class="mainContent clearfix"> 
        <div id="dashboard" style="padding: 0;margin: 0 auto;width: 100%;">
         <h2 class="header"><img width='25px' src='pticon'></h2>
         
       </div>
		 
        <div id="commandes" style="padding: 0;margin: 0 auto;width: 100%;">
         <h2 class="header"><img width='25px' src='iconcmd'>Mes commandes</h2>
   <div class="monitor"> 
		<div style="display: inline-block!important;text-align:center;color:black;font-size:17px">
        <a style="text-decoration:none!important;" href="?commandecommande=viewall#commandes" >
            
            <p>Afficher Mes Commandes</p>
            
        </a></div>  
		  
		 <?php if(isset($_GET["commandecommande"])){
                if($_GET["commandecommande"]=='viewall'){
             $connection=mysqli_connect("127.0.0.127", "root", "", "valium"); 
            require_once ('function.inc.php');
            require_once("dbcontroller.php");
            $db_handle = new DBController();
            $id=$_SESSION["id"];
            $cmd_array = $db_handle->runQuery("SELECT * FROM commandes WHERE commandes . userid = $id");
            if (!empty($cmd_array)) {  
					foreach($cmd_array as $key=>$value){
                         
            $query = sprintf("SELECT idproduit FROM commandes WHERE userid = '%s' LIMIT 1;",mysqli_real_escape_string( $connection,$id));
			$result = mysqli_query($connection,$query);
			$row = mysqli_fetch_array($result);
            $idproduit=$row['idproduit'];
            $query = sprintf("SELECT name FROM p WHERE id = '%s' LIMIT 1;",mysqli_real_escape_string( $connection,$idproduit));
			$result = mysqli_query($connection,$query);
			$row = mysqli_fetch_array($result);
            $produitnom=$row["name"];
			?>
		 <div  style="padding: 0;margin: 10px 0 0 10px;width: 95%;height:50px;clear: both;background-color:#EEE;display: inline!important">
		 <div class='info' style="float: left;margin: 10px 0 0 10px;display:inline-block!important">
			Ref
			<input    value='<?php echo $idproduit.$cmd_array[$key]["date"]; ?>' > </input>
            Produit
			<input    value='<?php echo couper($produitnom) ;  ?>' > </input>
            Date
			<input   value='<?php echo  $cmd_array[$key]["date"]; ?>' > </input>
            Total
			<input    value='<?php echo "$".$cmd_array[$key]["total"];  ?>' > </input>
            Etat
			<input    value='<?php echo $cmd_array[$key]["etat"];  ?>' > </input> 
			 
			 </div>
			<div class='cmd' style="float: right;margin: 9px 0  0 auto;width: 10%;" >
			  <a href="?commandecommande=delcommande&id=<?php echo $cmd_array[$key]["id"]; ?>#commandes">Supprimer </a>
			</div>
		</div>
	<?php
                     
    }}else{ ?>
    
    <p>
        Vous n'avez effectuer Aucune commande
    </p>
    
    <?php
    }}}?>
	</div></div>
	   
  
       <div id="Utilisateur" style="padding: 0;margin: 0 auto;width: 100%;">
          <div class="monitor" style="padding: 0;margin: 0 auto;width: 100%;">
		<h2 class="header"  ><img width='25px' src='user'> Mes Informations</h2>
        
		<div style="display: inline-block!important;text-align:center;color:black;font-size:17px">
        <a style="text-decoration:none!important;" href="?usercommande=updateuser#Utilisateur" >
            
            <p> Modifier Mes informations</p>
            
        </a></div> 
		<div style="display: inline-block!important;text-align:center;color:red;font-size:17px">
        <a style="text-decoration:none!important;" href="?usercommande=deluser#Utilisateur" >
            
            <p>  Supprimer Mon Compte</p>
            
        </a></div> 
		  
		 <?php if(isset($_GET["usercommande"])){?>
		  <?php if($_GET["usercommande"]=='deluser'){
			$id=$_SESSION["id"];
			mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),"DELETE FROM user WHERE user . id = $id"); 
			 
			?> 
		  <p>
		 Compte bien supprimé 
		</p>
		  
		  <?php }else if($_GET["usercommande"]=='updateuser'){?>
		<form style='width: 100%;margin-top: -30px' id="contact" action="?usercommande=updateuser#Utilisateurs" method="POST">
<?php
     if(isset($_POST["submitadduser"])){
        $id=$_SESSION["id"];
      $query1 = "UPDATE user SET name = '{$_POST['fname']}', username = '{$_POST['username']}', email = '{$_POST['login']}',
        password = md5('{$_POST['password']}'), address = '{$_POST['adresse']}' WHERE user . id = $id";
							mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),$query1);
					}?>
	<fieldset>
      <input placeholder="Nom Complet" type="text" tabindex="0" name="fname"  value='<?php
echo $_SESSION["name"];?>' required autofocus>
    </fieldset>
	<fieldset> 
      <input  value='<?php
echo $_SESSION["username"];?>'placeholder="Nom d'utilisateur" type="text" tabindex="1" name="username" required >
    </fieldset>
    <fieldset>
      <input  value='<?php
echo $_SESSION["email"];?>'placeholder="Email" type="email" tabindex="2" name="login" required>
    </fieldset>
    <fieldset>
      <input placeholder="Nouveau Mot de pass"  tabindex="3" name="password" required>
    </fieldset>
    <fieldset>
      <textarea value='<?php
echo $_SESSION['address'];?>' placeholder="Adresse...." tabindex="4" name="adresse" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submitadduser" type="submit" id="contact-submit" data-submit="...Sending">Modifier</button>
   </fieldset>
  </form> 
		<?php } else {
			
				 }} ?> 
		  </div>  
		  
	 
    </div>
        </div>
   
   </div>  </div> 
        <nav class='nav-down' style='clear: both;padding: 0;margin: 30px auto;'>
<div style='float: right!important;margin-top:-30px;padding-right: 30px' >
  <a style='padding: 0' href='#'>
  <div  dir='#' class=' nav-icon'>
   <img class='animate jello' style='height: auto;width:70px;' src='images/top.png'>
  </div> </a>
</div>
<div style='float: left!important;margin-top:-14px;padding-left: 10px' >
  <a style='padding: 0' href='#'>
  <div  dir='#' class=' nav-icon'>
   <img class='animate jello' style='height: auto;width:40px;' src='images/twitter-icon.png'>
  </div> </a>
</div>
<div  style='float: left!important;margin-top:-14px;margin-left: -3px' >
  <a style='padding: 0' href='#'>
  <div  dir='#' class=' nav-icon'>
   <img class='animate jello' style='height: auto;width:40px;' src='images/instagram-icon.png'>
  </div> </a>
</div>
<div  style='float: left!important;margin-top:-14px;margin-left: -3px' >
  <a style='padding: 0' href='#'>
  <div  dir='#' class=' nav-icon'>
   <img class='animate jello' style='height: auto;width:40px;' src='images/facebook.png'>
  </div> </a>
</div>
        <div class='table'>
         <ul> 
            <li class='menu-ind'>
                <a href='about.php'>A propos</a>
            </li>
            <li class='menu-ind'>
                <a href='about.php'>politique de confidentialité</a>
            </li>
             
         </ul>
        </div>
       </nav>
  
       <footer style='display: inline-block ;background-color: rgba(52, 73, 94,0)'>
         
            <div style='width:80%;display: inline-block ;float: left!important;margin-top:4px' >
  <a style='padding-right: 5px' href='#'>
    <img style='height: auto;width:100%;' src='images/visa.png'>
   </a>
</div>
            <a href='index.php'><img   height='80px' style='float:right;background-color: rgba(52, 73, 94,0);margin-top: -20px' src='images/madewithlove.png'>
        </a>
             
  
       </footer>
    </body>
</html>