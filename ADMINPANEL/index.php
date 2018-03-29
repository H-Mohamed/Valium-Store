<?php
session_start();
if(!isset($_COOKIE["loggedin"])){?>
 <html>
<head>
   <link rel="stylesheet" href="animate.css">
<style>

/* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,

img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav 

li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption

,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-

size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
.underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a 

underline */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
body{
	font-family:"Century Gothic" Geneva Helvetica, sans-serif;
	background: url('../images/bg.jpg');
}
.wrap{
	margin:0 auto; 
	width: 96%;
}
h1{
	margin-top: 20px;
	color: #603813;
	font-size: 3em;
	text-transform: uppercase;
	font-weight: bold;
}
.banner{
	text-align:center;
	margin-top: 30px;
}
.banner img{
	margin-top: 0px;
}
.page{
	text-align:center;
	font-family: "Century Gothic";
}
.page h2{
	font-size:3em;
	color: white;
	font-weight:200;
}
.footer{
	font-family: "Century Gothic";
	position: absolute;
	right: 30px;
	bottom:20px;
}
.footer p{
	font-size:1em;
	color: #603813;
}
.footer a{
	 color: #f9614d;
}
.footer a:hover{
	text-decoration:underline;
}
/*media queries*/
@media all and (max-width:1366px) and (min-width:1280px){
.wrap{
	width: 90%;
}
.banner{
	margin-top: 30px;
}
}
@media all and (max-width:1280px) and (min-width:1024px){
.wrap{
	width: 90%;
}
}	
@media all and (max-width:1024px) and (min-width:800px){
.wrap{
	width: 90%;
}
h1{
	font-size: 2em;
}
.banner{
	margin-top: 0px;
}
.page h2{
	font-size: 2em;
}
}
@media all and (max-width:800px) and (min-width:640px){
.wrap{
	width: 90%;
}
h1{
	font-size: 2em;
}
.banner{
	margin-top: 10px;
}
.banner img{
	width: 34%;
}
.page h2{
	font-size:2em;
}
}
@media all and (max-width:640px) and (min-width:480px){
.wrap{
	width: 90%;
}
h1{
	font-size: 1.6em;
}
.banner{
	margin-top: 0px;
}
.banner img{
	width: 32%;
}
.page h2{
	font-size:1.6em;
}
}
@media all and (max-width:480px) and (min-width:320px){
.wrap{
	width: 90%;
}
h1{
	font-size: 1.4em;
}
.banner{
	margin-top: 0px;
}
.banner img{
	width: 32%;
}
.page h2{
	font-size:1.4em;
}
.footer p{
	font-size: 0.9em;
}
}
@media all and (max-width:320px){
.wrap{
	width: 90%;
}
h1{
	font-size: 1.4em;
}
.banner{
	margin-top: 10px;
}
.banner img{
	width:80%;
}
.page{
	font-size:1em;
}
.footer{
	bottom: 10px;
}
.footer p{
	font-size: 0.9em;
}
}

</style><title>Redirection...</title>
    <meta http-equiv='refresh'
content='3;URL= http://127.0.0.127/Mydminpanel/login.php'>
</head>
 
		<p class='animated flash' style='text-align:center;margin:10px 0 10px 0;box-shadow:inset 0px 40px 30px red;padding:5px 13px 5px 13px;color:white'>Session Expirée</p>  
  
<body>  <br>
<div class='page'>
	   
Vous serez automatiquement redirigé vers la page de connexion .<br>
    Si votre navigateur ne vous redirige pas en 3 secondes, ou si Vous 
    ne souhaitez pas attendre
    <a style='text-decoration:none'href=' http://127.0.0.127/Mydminpanel/login.php'>Cliquez ici</a>. 
</div>
</body> 
</html>
	  <?php
}else{
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	$product_array = $db_handle->runQuery("SELECT * FROM p ORDER BY id ASC");
	$categori_array = $db_handle->runQuery("SELECT * FROM p ORDER BY id ASC");
	$cmd_array = $db_handle->runQuery("SELECT * FROM commandes ORDER BY id ASC");
	$users_array = $db_handle->runQuery("SELECT * FROM user ORDER BY id ASC");
	$admins_array = $db_handle->runQuery("SELECT * FROM admin ORDER BY id ASC");
	
	function datarefresh(){
		require_once("dbcontroller.php");
	$db_handle = new DBController();
	$product_array = $db_handle->runQuery("SELECT * FROM p ORDER BY id ASC");
	$categori_array = $db_handle->runQuery("SELECT * FROM p ORDER BY id ASC");
	$cmd_array = $db_handle->runQuery("SELECT * FROM commandes ORDER BY id ASC");
	$users_array = $db_handle->runQuery("SELECT * FROM user ORDER BY id ASC");
	$admins_array = $db_handle->runQuery("SELECT * FROM admin ORDER BY id ASC");
	
	}
	function my_simple_crypt( $string, $action = 'e' ) {
    // you may change these values to your own
    
 
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
 
    return $output;
}
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
<html>
    <head>
		<link href='style.css' rel='stylesheet'/>
		
    </head>
    <body> 
<div class="admin-panel clearfix">
  <div class="slidebar">
	 <center>
    <div style='margin-top:10px'>

      <a href="127.0.0.127/zee/New folder/index.php"><img width='280px' src='http://127.0.0.127/zee/New%20folder/images/logo%20(1)'>
	  </a>
	  <h3 style='text-align:center;justify-content: center'>Bienvenue <?php  echo $_SESSION['name']; ?></h3>
    </div></center>
    <ul>
      <li><a href="http://127.0.0.127/Mydminpanel/index2.php?produitcommande=viewall#produits">Produits</a></li>
      <li><a href="http://127.0.0.127/Mydminpanel/index2.php?commandecommande=viewall#commandes">Commandes</a></li> 
      <li><a href="?usercommande=viewall#Utilisateurs">Utilisateurs</a></li>
      <li><a href="?usercommande=viewall#Administrateurs">Administrateurs</a></li> 
    </ul>
	 
  </div>
  
  <div class="main">
	<div class="topbar clearfix"> 
	    <li class="logout"><a href="logout"> <img width='25px' src='http://findicons.com/files/icons/2146/realistik_reloaded/128/exit.png'></a></li>
     </div>
    <div class="mainContent clearfix">
		<p style='width:200%'>
¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯`·.¸¸.·´¯`·.¸¸¸.·´¯
	   </p>
        <div id="dashboard" style="padding: 0;margin: 0 auto;width: 100%;">
         <h2 class="header"><img width='25px' src='pticon'></h2>
         
       </div>
		
		<div id="produits" style="padding: 0;margin: 0 auto;width: 100%;">
         <h2 class="header"><img width='25px' src='pticon'>Gestion des produits</h2>
         <div class="monitor"> 
		<div style="display: inline-block!important;text-align:center;color:black;font-size:17px">
        <a style="text-decoration:none!important;" href="?produitcommande=viewall#produits" >
            
            <p> Tous les produits</p>
            
        </a></div>
		<div style="display: inline-block!important;text-align:center;color:black;font-size:17px">
        <a style="text-decoration:none!important;" href="?produitcommande=addproduit#produits" >
            
            <p> Ajouter Produit</p>
            
        </a></div> 
		<div style="display: inline-block!important;text-align:center;color:red;font-size:17px">
        <a style="text-decoration:none!important;" href="?produitcommande=dellall#produits" >
            
             
            
        </a></div> 
		  
		 <?php if(isset($_GET["produitcommande"])){?>
		  <?php if($_GET["produitcommande"]=='delproduit'){
			$id=$_GET['id'];
			mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),"DELETE FROM p WHERE p . id = $id"); 
			 
			?> 
		  <p>
		 Produit bien supprimés 
		</p>
		  
		  <?php }else if($_GET["produitcommande"]=='addproduit'){?>
		<form style='width: 100%;margin-top: -30px' id="contact" action="?produitcommande=addproduit#produits" method="POST">
<?php
     if(isset($_POST["submitaddproduit"])){
   		session_abort();
		session_start();
		function nety($s){
			for($i=0 ; $i<strlen($s) ; $i++){
				if($s[$i]=='"' || $s=="'") $s[$i]=" ";
			}
			return $s;
		}
		$d=nety($_POST['productdesc']);
		$connection= mysqli_connect("127.0.0.127", "root", "", "valium");
	    $query1 = "INSERT INTO p (id, name, code, price, image, description, categorie, type, tag) VALUES (NULL, '{$_POST['productname']}', '{$_POST['productcode']}', '{$_POST['productprice']}',  '{$_POST['productimg']}',  '$d',  '{$_POST['productcat']}',  '{$_POST['producttyp']}',  '{$_POST['producttag']}')";
	    mysqli_query($connection,$query1);
					echo $query1;
					}?>
    <fieldset>
      <input placeholder="Nom" type="text" tabindex="1" name="productname" autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Code" type="text" tabindex="2" name="productcode"  >
    </fieldset>
    <fieldset>
      <input placeholder="Prix" type="text" tabindex="3" name="productprice"  >
    </fieldset>
    <fieldset>
      <input placeholder="image" type="text" tabindex="4" name="productimg"  >
    </fieldset>
				  <fieldset>
      <textarea style='height:70px' placeholder="Description...." tabindex="5" name="productdesc"  ></textarea>
    </fieldset>
						Categorie
    <fieldset>
      <select tabindex="6" name="productcat"  >
							  <option>ACCESSOIRES</option>
							<option>CHAUSSURES</option>
							<option>CHEMISE</option>
							<option>GILET</option>
							<option>GRANDES TAILLES</option>
							<option>JEANS</option>
		     <option>PANTACOURT</option>
							<option>SOUS-VÊTEMENTS</option>
							<option>Arcs et bandeaux</option>
							<option>Bijoux & Montres</option> 
							<option>SPORT</option> 
							<option>Sacs à dos</option> 
							<option>Chapeaux</option> 
							<option>T-SHIRT</option> 
							
						</select>
    </fieldset>
				Type
    <fieldset>
   <select tabindex="7" name="producttyp" >
							<option>Homme</option>
							<option>Femme</option>
							<option>Enfant</option> 
							<option>Animal</option>  
						</select>
				</fieldset>
				<fieldset>
      <input placeholder="tags " type="text" tabindex="8" name="producttag" >
    </fieldset>
    <fieldset>
      <button name="submitaddproduit" type="submit" id="contact-submit" data-submit="...Sending">Ajouter</button>
    </fieldset>
  </form> 
		<?php }else if($_GET["produitcommande"]=='dellall'){
				if (!empty($product_array))
				{foreach($product_array as $key=>$value){
					$a=$product_array[$key]["id"];
			mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),"DELETE FROM p WHERE p . id = $a"); 
			}
			
			} 
		datarefresh();
			?>
		<p>
			Tous les produits ont été supprimés 
		</p>
		 
		<?php
		
		}else {
			
				if (!empty($product_array)) { 
					foreach($product_array as $key=>$value){
			?>
		 <div  style="padding: 0;margin: 10px 0 0 10px;width: 95%;height:50px;clear: both;background-color:#EEE;display: inline-block">
				<img style='margin: 0 0 0 10px' width='50px' height='50px'  src="http://127.0.0.127/zee/New folder/images/<?php echo $product_array[$key]["image"]; ?>">
		 
			<div class='info' style="float: left;margin: 10px 0 0 10px;display:  inline-block">
			  Nom :
			<input    value='<?php echo couper($product_array[$key]["name"]); ?>' > </input>
			Description :
			<input    value='<?php echo $product_array[$key]["description"];  ?>' > </input>
	  Prix :
			<input   value='<?php echo "$".$product_array[$key]["price"];  ?>' > </input>
	  Tags :
			<input    value='<?php echo $product_array[$key]["tag"];  ?>' > </input>
	  Catégorie :
			<input    value='<?php echo $product_array[$key]["categorie"];  ?>' > </input> 
			 
			 </div>
			<div class='cmd' style="float: right;margin: 9px 0  0 auto;width: 10%;" >
			  <a href="?produitcommande=delproduit&id=<?php echo $product_array[$key]["id"]; ?>#produits">Supprimer </a>
			</div>
		</div>
	<?php }}}} ?>
	</div>
       </div>
         
	   <div id="commandes" style="padding: 0;margin: 0 auto;width: 100%;">
         <h2 class="header"><img width='25px' src='cmdicon'>Gestion des commandes</h2>
   <div class="monitor"> 
		<div style="display: inline-block!important;text-align:center;color:black;font-size:17px">
        <a style="text-decoration:none!important;" href="?commandecommande=viewall#commandes" >
            
            <p> Tous les commandes</p>
            
        </a></div>
		<div style="display: inline-block!important;text-align:center;color:black;font-size:17px">
        <a style="text-decoration:none!important;" href="http://127.0.0.127/Mydminpanel/index2.php?commandecommande=addcommande#commandes" >
            
            <p> Ajouter une commande</p>
            
        </a></div> 
		<div style="display: inline-block!important;text-align:center;color:red;font-size:17px">
        <a style="text-decoration:none!important;" href="?commandecommande=dellall#commandes" >
            
             
            
        </a></div> 
		  
		 <?php if(isset($_GET["commandecommande"])){?>
		  <?php if($_GET["commandecommande"]=='delcommande'){
			$id=$_GET['id'];
			mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),"DELETE FROM commandes WHERE commandes . id = $id"); 
			?> 
		  <p>
		 commande bien supprimés 
		</p> 
		  <?php }else if($_GET["commandecommande"]=='addcommande'){?>
		<form style='width: 100%;margin-top: -30px' id="contact" action="?commandecommande=addcommande#commandes" method="POST">
<?php
     if(isset($_POST["submitaddcommande"])){ 
		$date_field = date("Y/m/d");
		$uid=$_POST['userid'];
		$pid=$_POST['productid'];
		$qte= $_POST['qte'];
		$ttl= $_POST['total'];
		$etat=$_POST['commandeetat'];
   		$query1 = "INSERT INTO commandes (id, userid, date, idproduit, quantité, total, etat)
		VALUES (NULL,{$uid}, {$date_field}, {$pid}, {$qte}, {$ttl}, '{$etat}')";
		echo $query1;
	    mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),$query1  or die (mysql_error()));
					}?>
    <fieldset>
      <input placeholder="Id Client" type="text" tabindex="2" name="userid"  >
    </fieldset> 
    <fieldset>
      <input placeholder="Id Produit" type="text" tabindex="3" name="productid"  >
    </fieldset>
    <fieldset>
      <input placeholder="Quantité" type="text" tabindex="4" name="qte"  >
    </fieldset> 
	<fieldset>
      <input placeholder="Total " type="text" tabindex="8" name="total" >
    </fieldset>
						Etat
    <fieldset>
      <select tabindex="6" name="commandeetat"  >
							  <option>Active</option>
							<option>Inactive</option> 
							
						</select>
     
	<br>
    <fieldset>
      <button name="submitaddcommande" type="submit" id="contact-submit" data-submit="...Sending">Ajouter</button>
    </fieldset>
  </form> 
		<?php }else if($_GET["commandecommande"]=='dellall'){
				if (!empty($cmd_array))
				{foreach($cmd_array as $key=>$value){
					$a=$cmd_array[$key]["id"];
			mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),"DELETE FROM commandes WHERE commandes . id = $a"); 
			}
			
			} 
		datarefresh();
			?>
		<p>
			Tous les commandes ont été supprimés 
		</p>
		 
		<?php
		
		}else {
			
				if (!empty($cmd_array)) {
					$connection=mysqli_connect("127.0.0.127", "root", "", "valium"); 
					foreach($cmd_array as $key=>$value){ 
            $query = sprintf("SELECT name FROM p WHERE id = '%s' LIMIT 1;",mysqli_real_escape_string( $connection,$cmd_array[$key]["idproduit"]));
			$result = mysqli_query($connection,$query);
			$row = mysqli_fetch_array($result);
            $produitnom=$row["name"];
			?>
		 <div  style="padding: 0;margin: 0;width: 100%;height:50px;clear: both;background-color:#EEE;display: inline-block">
 	 
			<div class='info' style="float: left;margin: 10px 0 0 0;display:  inline-block">
			Ref :
			<input    value='<?php echo $cmd_array[$key]["id"].$cmd_array[$key]["date"]; ?>' > </input>
			Client ID :
			<input    value='<?php echo $cmd_array[$key]["userid"] ?>' > </input>
            Produit :
			<input    value='<?php echo couper($produitnom) ;  ?>' > </input>
            Date :
			<input   value='<?php echo  $cmd_array[$key]["date"]; ?>' > </input>
            Total :
			<input    value='<?php echo "$".$cmd_array[$key]["total"];  ?>' > </input>
            Etat :
			<input    value='<?php echo $cmd_array[$key]["etat"];  ?>' > </input> 
			 
			 </div>
			<div class='cmd' style="float: right;margin: 9px 0px  0 0;width: 90px;" >
			  <a href="?commandecommande=delcommande&id=<?php echo $cmd_array[$key]["id"]; ?>#commandes">Supprimer </a>
			</div>
		</div>
	<?php }}}} ?>
	</div></div>
	    
       <div id="categories" style="padding: 0;margin: 0 auto;width: 100%;">
         <h2 class="header"><img width='25px' src='caticon'>Gestion des categories</h2>
         <div class="monitor" style="padding: 0;margin: 0 auto;width: 100%;">
			
			
		 </div>
       </div>
	   <div id="Administrateurs" style="padding: 0;margin: 0 auto;width: 100%;">
          <div class="monitor">
		<h2 class="header"  ><img width='25px' src='icouser'> Administrateurs</h2>
	
		<div style="display: inline-block!important;text-align:center;color:black;font-size:17px">
        <a style="text-decoration:none!important;" href="?usercommande=viewall#Administrateurs" >
            
            <p> Tous les administrateurs</p>
            
        </a></div>
		<div style="display: inline-block!important;text-align:center;color:black;font-size:17px">
        <a style="text-decoration:none!important;" href="?usercommande=addadmin#Administrateurs" >
            
            <p> Ajouter Administrateur</p>
            
        </a></div> 
		<div style="display: inline-block!important;text-align:center;color:black;font-size:17px">
        <a style="text-decoration:none!important;" href="?usercommande=dellalladmins#Administrateurs" >
            
             
            
        </a></div><br>
		  
		  <?php if(isset($_GET["usercommande"])){ ?>
		  <?php if($_GET["usercommande"]=='deladmin'){
			$id=$_GET['id'];
			mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),"DELETE FROM admin WHERE admin . id = $id"); 
			 
			?> 
		  <p>
		 Administrateur bien supprimés 
		</p>
		  
		  <?php }else if($_GET["usercommande"]=='addadmin'){?>
		<form style='width: 100%;margin-top: -30px' id="contact" action="?usercommande=addadmin#Administrateurs" method="POST">
<?php
     if(isset($_POST["submitaddadmin"])){ 
   				$query1 = "INSERT INTO admin  (id, name, username, email, password)  VALUES (NULL,'{$_POST['fname']}','{$_POST['username']}', '{$_POST['login']}',md5('{$_POST['password']}')) ";
							mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),$query1);
				}?>
	<fieldset>
      <input placeholder="Nom Complet" type="text" tabindex="1" name="fname" required autofocus>
    </fieldset>
	<fieldset>
      <input placeholder="Nom d'utilisateur" type="text" tabindex="1" name="username" required >
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" tabindex="2" name="login" required>
    </fieldset>
    <fieldset>
      <input placeholder="Mot de pass" type="text" tabindex="3" name="password" required>
    </fieldset>
    <fieldset>
      <button name="submitaddadmin" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
   </fieldset>
  </form> 
		<?php }else if($_GET["usercommande"]=='dellalladmins'){
				if (!empty($admins_array))
				{foreach($admins_array as $key=>$value){
					$a=$admins_array[$key]["id"];
			mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),"DELETE FROM admin WHERE admin . id = $a"); 
			}
			} 
		
			?>
		<p>
			Tous les administrateurs ont été supprimés 
		</p>
		<p>
			Admin Demo par défault: Admin ; Mot de Pass Admin
			
			commentaire : sql commade pour la mise a jour UPDATE `user` SET `name` = 'Nom Complet' WHERE `user`.`id` = 2 
		</p>
		<?php
		
		}else {
			
				if (!empty($admins_array)) { 
					foreach($admins_array as $key=>$value){
			?>
		  <div  style="padding: 0;margin: 3px auto;width: 95%;height:50px;clear: both;background-color:#EEE">
			<div class='info' style="float: left;margin: 10px auto;">
			<?php echo "Nom Complet  :" ?>
			<input value='<?php echo couper($admins_array[$key]["name"]); ?>' > </input> 
			<?php echo "Nom d'utilisateur  :" ?> <input value='<?php echo couper($admins_array[$key]["username"]); ?>'  > </input>
			<?php echo "Email  :" ?> <input value='<?php echo couper($admins_array[$key]["email"]); ?>'  > </input>
			 </div>
			<?php if($admins_array[$key]["username"] =='admin'){ ?>
			<div class='cmd' style="float: right;margin: 9px auto;width: 10%;" >
			  <a style='background-color:#888'>Supprimer </a>
			</div>
			<?php }else { ?>
			<div class='cmd' style="float: right;margin: 9px auto;width: 10%;" >
			  <a href="?usercommande=deladmin&id=<?php echo $admins_array[$key]["id"]; datarefresh(); ?>#Administrateurs">Supprimer </a>
			</div>
			<?php }?> 
		</div>
	<?php }}
	else{
		datarefresh();
					$query1 = "INSERT INTO admin  (id, name, username, email, password)  VALUES (NULL,'admin','admin', 'Zeetous@site.com',md5('admin')) ";
							mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),$query1);
				datarefresh(); 
			?>
		  <div  style="padding: 0;margin: 3px auto;width: 95%;height:50px;clear: both;background-color:#EEE">
			<div class='info' style="float: left;margin: 10px auto;">
			<?php echo "Nom Complet  :" ?>
			<input value='admin' > </input> 
			<?php echo "Nom d'utilisateur  :" ?> <input value='admin'  > </input>
			<?php echo "Email  :" ?> <input value='zeetous@site.com'  > </input>
			 </div> 
			<div class='cmd' style="float: right;margin: 9px auto;width: 10%;" >
			  <a style='background-color:#888'>Supprimer </a>
			</div>   
		</div>
	<?php }}} ?> 
		  </div> 
	   </div> 
  
       <div id="Utilisateurs" style="padding: 0;margin: 0 auto;width: 100%;">
          <div class="monitor" style="padding: 0;margin: 0 auto;width: 100%;">
		<h2 class="header"  ><img width='25px' src='icouser'> Utilisateurs</h2>
	
		<div style="display: inline-block!important;text-align:center;color:black;font-size:17px">
        <a style="text-decoration:none!important;" href="?usercommande=viewall#Utilisateurs" >
            
            <p> Tous les utilisateurs</p>
            
        </a></div>
		<div style="display: inline-block!important;text-align:center;color:black;font-size:17px">
        <a style="text-decoration:none!important;" href="?usercommande=adduser#Utilisateurs" >
            
            <p> Ajouter Utilisateur</p>
            
        </a></div> 
		<div style="display: inline-block!important;text-align:center;color:red;font-size:17px">
        <a style="text-decoration:none!important;" href="?usercommande=dellall#Utilisateurs" >
            
             
            
        </a></div> 
		  
		 <?php if(isset($_GET["usercommande"])){?>
		  <?php if($_GET["usercommande"]=='deluser'){
			$id=$_GET['id'];
			mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),"DELETE FROM user WHERE user . id = $id"); 
			 
			?> 
		  <p>
		 Administrateur bien supprimés 
		</p>
		  
		  <?php }else if($_GET["usercommande"]=='adduser'){?>
		<form style='width: 100%;margin-top: -30px' id="contact" action="?usercommande=adduser#Utilisateurs" method="POST">
<?php
     if(isset($_POST["submitadduser"])){ 
   				$query1 = "INSERT INTO user  (id, name, username, email, password, address)  VALUES (NULL,'{$_POST['fname']}','{$_POST['username']}', '{$_POST['login']}',md5('{$_POST['password']}'),'{$_POST['adresse']}') ";
							mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),$query1);
					}?>
	<fieldset>
      <input placeholder="Nom Complet" type="text" tabindex="1" name="fname" required autofocus>
    </fieldset>
	<fieldset>
      <input placeholder="Nom d'utilisateur" type="text" tabindex="1" name="username" required >
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" tabindex="2" name="login" required>
    </fieldset>
    <fieldset>
      <input placeholder="Mot de pass" type="text" tabindex="3" name="password" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Adresse...." tabindex="5" name="adresse" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submitadduser" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
   </fieldset>
  </form> 
		<?php }else if($_GET["usercommande"]=='dellall'){
				if (!empty($users_array))
				{foreach($users_array as $key=>$value){
					$a=$users_array[$key]["id"];
			mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),"DELETE FROM user WHERE user . id = $a"); 
			}
			
			}else{
					$query1 = "INSERT INTO user  (id, name, username, email, password, address)  VALUES (NULL,'admin','Zeetous', 'Zeetous@site.com',md5('Zeetous'),'Zeetous') ";
							mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),$query1);}
		datarefresh();
			?>
		<p>
			Tous les utilisateurs ont été supprimés 
		</p>
		<p>
			Utilisateur Demo par défault: Zeetous ; Mot de Pass Zeetous
			
			commentaire : sql commade pour la mise a jour UPDATE `user` SET `name` = 'Nom Complet' WHERE `user`.`id` = 2 
		</p>
		<?php
		
		}else {
			
				if (!empty($users_array)) { 
					foreach($users_array as $key=>$value){
			?>
		  <div  style="padding: 0;margin: 3px auto;width: 95%;height:50px;clear: both;background-color:#EEE">
			<div class='info' style="float: left;margin: 10px auto;">
				
			<?php echo "Nom Complet  :" ?>
			<input value='<?php echo couper($users_array[$key]["name"]); ?>' > </input> 
			<?php echo "Nom d'utilisateur  :" ?> <input value='<?php echo couper($users_array[$key]["username"]); ?>'  > </input>
			<?php echo "Email  :" ?> <input value='<?php echo couper($users_array[$key]["email"]); ?>'  > </input>
			<?php echo "Adresse :" ?> <input style='width=800px!important' value='<?php echo $users_array[$key]["address"]; ?>'  > </input>
			
			 </div>
			<div class='cmd' style="float: right;margin: 9px auto;width: 10%;" >
			  <a href="?usercommande=deluser&id=<?php echo $users_array[$key]["id"]; ?>#Utilisateurs">Supprimer </a>
			</div>
		</div>
	<?php }}}} ?> 
		  </div>  
		  
	 
    </div>
        </div>
   
   </div>
</div>
        
    </body>
</html>
<?php } ?>