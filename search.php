	<?php
	require_once("dbcontroller.php");
 $db_handle = new DBController();
 function couper($string) {
	$string = trim($string);
 $append="&hellip;";
 $length=20;
	 if(strlen($string) > $length) {
		 $string = wordwrap($string, $length);
		 $string = explode("\n", $string, 2);
		 $string = $string[0] . $append;
	 }
 
	 return $string;}
	 if(isset($_GET['searchbtn'])){ 
		 $search = $_GET['searchfield'];
 ?>
 <!DOCTYPE HTML>
 <html id="snow" lang="en-EN" class="animated">
		 <head>
				 <title> Mon shop</title>
				 <meta charset="UTF-8">
				 <meta name="viewport" content="width=device-width, initial-scale=1.0">
				 <link rel="stylesheet" href="page.css">
				 <link rel="stylesheet" href="animate.css">
				 <link href="style.css" type="text/css" rel="stylesheet" />
				 <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Merienda" rel="stylesheet">
				 <link href="https://fonts.googleapis.com/css?family=Coming+Soon|Crafty+Girls" rel="stylesheet">
			 </head>
		 <body >
	<?php include("headernavtop.php")?>
	<div  >
				 <form style='margin-top: -20px!important;'id="search" action="search.php">
			<input  s placeholder="cherchez un produit, une marque ou une catégorie" type="text" name="searchfield" id="searchfiled" style="padding-left: 0.1em;border-left: 6px solid rgba(122,10,10,0.2);"> 
		 <input value="CHERCHER" type="submit"  name="searchbtn" id="searchbtn" >
		 </form> 
	</div>   
	
 <div class="leselments" style="padding: 0;margin: 0 auto;width: 1200px;" >
 <center>
			
		
			</center>  
			 <div>
				 <div style="font-weight: 100;padding-top:20px;text-align: left ;width: 100%;clear: both"> 
 <h3 > Produits correspendants à : "<?php if($search=='') echo 'Tous les produits'; else echo ' '.$search.' '; ?>"</h3> 
 </div>
 
 <div id="product-grid" style="padding: 0;margin: 0 auto;width:100%;margin:10px 0 30px 80px"> 
	 <?php
	 $product_array = $db_handle->runQuery("SELECT * FROM p WHERE name LIKE '%$search%'  OR description LIKE '%$search%' ");
	 $p=1;
	 if (!empty($product_array)) { 
		 foreach($product_array as $key=>$value){
		 $p+=5;
		 ?>
		 <div class="product-item" style="padding: 0;margin: 0 auto;width: 250px;">
			 <form method="POST" action="http://127.0.0.127/zee/New%20folder/cart.php?action=add&id=<?php echo $product_array[$key]["id"];?>">
			 			<a href='p.php?id=<?php echo $product_array[$key]["id"];?>'> 		<div class="product-image"><img src="images/<?php echo $product_array[$key]["image"]; ?>"></div></a> 	
			 <div>
			 <?php// if( strlen(couper($product_array[$key]["name"]))?>
			 <div style="text-align: left;float: left;font-size:10px"><strong><?php echo couper($product_array[$key]["name"]); ?></strong></div>
			 <?php //}else{ ?>
			 <!--div style="text-align: left;float: left;font-size:11px"><strong><?php echo couper($product_array[$key]["name"]); ?></strong></div-->
				<?php // } ?>
			 <div class="product-price" style='float: right;font-size:13px'>
				 <?php echo "$".$product_array[$key]["price"]; ?>
			 </div>
			 </div>
			 <div style='clear:both; '>Quantité<input type="number" step="1" name="quantity" value="1" size="2" min="0"/><input type="submit" value="Ajouter Au Panier" name="btnAddAction" /></div>
			 </form>
		 </div>
	 <?php 
			 } 
	 }else{
		 echo" <center><div id='product-grid' style='padding: 0;margin: 100px 0 100px auto;width:100%;margin-left:-30px'><img style='width:300px' src='images/0_results.png'></div>
					 </center> ";
	 }
	 ?>  
 </div>
					</div>
	</div></div>
			
			
		 <nav class="nav-down">
 <div style="float: right!important;margin-top:-30px;padding-right: 30px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:70px;" src="images/top.png">
	 </div> </a>
 </div>
 <div style="float: left!important;margin-top:-14px;padding-left: 10px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/twitter-icon.png">
	 </div> </a>
 </div>
 <div  style="float: left!important;margin-top:-14px;margin-left: -3px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/instagram-icon.png">
	 </div> </a>
 </div>
 <div  style="float: left!important;margin-top:-14px;margin-left: -3px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/facebook.png">
	 </div> </a>
 </div>
				 <div class="table">
					<ul> 
						 <li class="menu-ind border-bottom">
								 <a href="about.php">A propos</a>
						 </li>
						 <li class="menu-ind border-bottom">
								 <a href="about.php">politique de confidentialité</a>
						 </li>
							
					</ul>
				 </div>
				</nav>
	 
				<footer style="display: inline-block ;background-color: rgba(52, 73, 94,0)">
					
						 <div style="display: inline-block ;float: left!important;width:1020px;margin-top:4px" >
	 <a style="padding-right: 5px" href="#">
		 <img style="height: auto;width:1020px;" src="images/visa.png">
		</a>
 </div>
						 <a href="index.php"><img   height="80px" style="float:right;background-color: rgba(52, 73, 94,0);margin-top: -20px" src="images/madewithlove.png">
				 </a>
							
	 
				</footer>
		 
		 </body>
 </html>
 <?php }else if(isset($_GET['categorie'])){
	 $terms='';
	 if(isset($_GET['categorie']) && !isset($_GET['type'])){
		 $terms=$_GET['categorie'];  
		  
	 }else if(!isset($_GET['categorie']) && isset($_GET['type'])){
			 $terms=$_GET['type'];  
	 }
	 else if(isset($_GET['categorie']) && isset($_GET['type'])){
			$term1=$_GET['categorie'];
			 $term2=$_GET['type'];  
			 $terms=$term1.' Pour '.$term2;
	 }else{
			 $terms='Tous les produits';  
	 }
 
	 ?>
 <!DOCTYPE HTML>
 <html id="snow" lang="en-EN" class="animated">
		 <head>
				 <title> Mon shop</title>
				 <meta charset="UTF-8">
				 <meta name="viewport" content="width=device-width, initial-scale=1.0">
				 <link rel="stylesheet" href="page.css">
				 <link rel="stylesheet" href="animate.css">
				 <link href="style.css" type="text/css" rel="stylesheet" />
				 <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Merienda" rel="stylesheet">
				 <link href="https://fonts.googleapis.com/css?family=Coming+Soon|Crafty+Girls" rel="stylesheet">
			 </head>
		 <body >
	<?php include("headernavtop.php")?>
	<div  >
				 <form style='margin-top: -20px!important;'id="search" action="search.php">
			<input  s placeholder="cherchez un produit, une marque ou une catégorie" type="text" name="searchfield" id="searchfiled" style="padding-left: 0.1em;border-left: 6px solid rgba(122,10,10,0.2);"> 
		 <input value="CHERCHER" type="submit"  name="searchbtn" id="searchbtn" >
		 </form> 
	</div>   
	
 <div class="leselments" style="padding: 0;margin: 0 auto;width: 1200px;" >
 <center>
			
		
			</center>  
			 <div>
				 <div style="font-weight: 100;padding-top:20px;text-align: left ;width: 100%;clear: both"> 
 <h3 > Produits correspendants à : "<?php echo ' '.$terms.' '; ?>"</h3> 
 </div>
 
 <div id="product-grid" style="padding: 0;margin: 0 auto;width:100%;margin:10px 0 30px 80px"> 
	 <?php
	 $query=''; 
	 if(isset($_GET['categorie']) && !isset($_GET['type'])){ 
		 $product_array = $db_handle->runQuery("SELECT * FROM p WHERE categorie LIKE '%$terms%' ");
	 }else if(!isset($_GET['categorie']) && isset($_GET['type'])){ 
			  $product_array = $db_handle->runQuery("SELECT * FROM p WHERE type LIKE '%$terms%'");
	 }
	 else if(isset($_GET['categorie']) && isset($_GET['type'])){
		 $product_array = $db_handle->runQuery("SELECT * FROM p WHERE categorie LIKE '%$term1%' AND  type LIKE '%$term2%' ");
	 }else if(!isset($_GET['categorie']) && !isset($_GET['type'])){
			 $product_array = $db_handle->runQuery("SELECT * FROM p");
	 }
	 $p=1;
	 if (!empty($product_array)) { 
		 foreach($product_array as $key=>$value){
		 $p+=5;
		 ?>
		 <div class="product-item" style="padding: 0;margin: 0 auto;width: 250px;">
			 <form method="POST" action="http://127.0.0.127/zee/New%20folder/cart.php?action=add&id=<?php echo $product_array[$key]["id"];?>">
			 			<a href='p.php?id=<?php echo $product_array[$key]["id"];?>'> 		<div class="product-image"><img src="images/<?php echo $product_array[$key]["image"]; ?>"></div></a> 	
			 <div>
			 <?php// if( strlen(couper($product_array[$key]["name"]))?>
			 <div style="text-align: left;float: left;font-size:10px"><strong><?php echo couper($product_array[$key]["name"]); ?></strong></div>
			 <?php //}else{ ?>
			 <!--div style="text-align: left;float: left;font-size:11px"><strong><?php echo couper($product_array[$key]["name"]); ?></strong></div-->
				<?php // } ?>
			 <div class="product-price" style='float: right;font-size:13px'>
				 <?php echo "$".$product_array[$key]["price"]; ?>
			 </div>
			 </div>
			 <div style='clear:both; '>Quantité<input type="number" step="1" name="quantity" value="1" size="2" min="0"/><input type="submit" value="Ajouter Au Panier" name="btnAddAction" /></div>
			 </form>
		 </div>
	 <?php 
			 } 
	 }
	 else{
		 echo" <center><div id='product-grid' style='padding: 0;margin: 100px 0 100px auto;width:100%;margin-left:-30px'><img style='width:300px' src='images/0_results.png'></div>
					 </center> ";
	 }
	 ?>  
 </div>
					</div>
	</div></div>
			
			
		 <nav class="nav-down">
 <div style="float: right!important;margin-top:-30px;padding-right: 30px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:70px;" src="images/top.png">
	 </div> </a>
 </div>
 <div style="float: left!important;margin-top:-14px;padding-left: 10px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/twitter-icon.png">
	 </div> </a>
 </div>
 <div  style="float: left!important;margin-top:-14px;margin-left: -3px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/instagram-icon.png">
	 </div> </a>
 </div>
 <div  style="float: left!important;margin-top:-14px;margin-left: -3px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/facebook.png">
	 </div> </a>
 </div>
				 <div class="table">
					<ul> 
						 <li class="menu-ind border-bottom">
								 <a href="about.php">A propos</a>
						 </li>
						 <li class="menu-ind border-bottom">
								 <a href="about.php">politique de confidentialité</a>
						 </li>
							
					</ul>
				 </div>
				</nav>
	 
				<footer style="display: inline-block ;background-color: rgba(52, 73, 94,0)">
					
						 <div style="display: inline-block ;float: left!important;width:1020px;margin-top:4px" >
	 <a style="padding-right: 5px" href="#">
		 <img style="height: auto;width:1020px;" src="images/visa.png">
		</a>
 </div>
						 <a href="index.php"><img   height="80px" style="float:right;background-color: rgba(52, 73, 94,0);margin-top: -20px" src="images/madewithlove.png">
				 </a>
							
	 
				</footer>
		 
		 </body>
 </html>
 <?php }else if(isset($_GET['tag'])){
	 $tag=$_GET["tag"]; ?>
	 
	 <html id="snow" lang="en-EN" class="animated">
		 <head>
				 <title> Mon shop</title>
				 <meta charset="UTF-8">
				 <meta name="viewport" content="width=device-width, initial-scale=1.0">
				 <link rel="stylesheet" href="page.css">
				 <link rel="stylesheet" href="animate.css">
				 <link href="style.css" type="text/css" rel="stylesheet" />
				 <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Merienda" rel="stylesheet">
				 <link href="https://fonts.googleapis.com/css?family=Coming+Soon|Crafty+Girls" rel="stylesheet">
			 </head>
		 <body >
	<?php include("headernavtop.php")?>
	<div  >
				 <form style='margin-top: -20px!important;'id="search" action="search.php">
			<input  s placeholder="cherchez un produit, une marque ou une catégorie" type="text" name="searchfield" id="searchfiled" style="padding-left: 0.1em;border-left: 6px solid rgba(122,10,10,0.2);"> 
		 <input value="CHERCHER" type="submit"  name="searchbtn" id="searchbtn" >
		 </form> 
	</div>   
	
 <div class="leselments" style="padding: 0;margin: 0 auto;width: 1200px;" >
 <center>
			
 
			</center>  
			 <div>
				 <div style="font-weight: 100;padding-top:20px;text-align: left ;width: 100%;clear: both">  
 </div>
 
 <div id="product-grid" style="padding: 0;margin: 0 auto;width:100%;margin:10px 0 30px 80px"> 
	 <?php
	 if($tag=='pp')
	 $product_array = $db_handle->runQuery("SELECT * FROM p WHERE price < 20");
	 else  
	 $product_array = $db_handle->runQuery("SELECT * FROM p WHERE tag LIKE '%$tag%' ");
	 $p=1;
	 if (!empty($product_array)) { 
		 foreach($product_array as $key=>$value){
		 $p+=5;
		 ?>
		 <div class="product-item" style="padding: 0;margin: 0 auto;width: 250px;">
			 <form method="POST" action="http://127.0.0.127/zee/New%20folder/cart.php?action=add&id=<?php echo $product_array[$key]["id"];?>">
			 			<a href='p.php?id=<?php echo $product_array[$key]["id"];?>'> 		<div class="product-image"><img src="images/<?php echo $product_array[$key]["image"]; ?>"></div></a> 	
			 <div>
			 <?php// if( strlen(couper($product_array[$key]["name"]))?>
			 <div style="text-align: left;float: left;font-size:10px"><strong><?php echo couper($product_array[$key]["name"]); ?></strong></div>
			 <?php //}else{ ?>
			 <!--div style="text-align: left;float: left;font-size:11px"><strong><?php echo couper($product_array[$key]["name"]); ?></strong></div-->
				<?php // } ?>
			 <div class="product-price" style='float: right;font-size:13px'>
				 <?php echo "$".$product_array[$key]["price"]; ?>
			 </div>
			 </div>
			 <div style='clear:both; '>Quantité<input type="number" step="1" name="quantity" value="1" size="2" min="0"/><input type="submit" value="Ajouter Au Panier" name="btnAddAction" /></div>
			 </form>
		 </div>
	 <?php 
			 } 
	 }else{
		 echo" <center><div id='product-grid' style='padding: 0;margin: 100px 0 100px auto;width:100%;margin-left:-30px'><img style='width:300px' src='images/0_results.png'></div>
					 </center> ";
	 }
	 ?>  
 </div>
					</div>
	</div></div>
			
			
		 <nav class="nav-down">
 <div style="float: right!important;margin-top:-30px;padding-right: 30px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:70px;" src="images/top.png">
	 </div> </a>
 </div>
 <div style="float: left!important;margin-top:-14px;padding-left: 10px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/twitter-icon.png">
	 </div> </a>
 </div>
 <div  style="float: left!important;margin-top:-14px;margin-left: -3px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/instagram-icon.png">
	 </div> </a>
 </div>
 <div  style="float: left!important;margin-top:-14px;margin-left: -3px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/facebook.png">
	 </div> </a>
 </div>
				 <div class="table">
					<ul> 
						 <li class="menu-ind border-bottom">
								 <a href="about.php">A propos</a>
						 </li>
						 <li class="menu-ind border-bottom">
								 <a href="about.php">politique de confidentialité</a>
						 </li>
							
					</ul>
				 </div>
				</nav>
	 
				<footer style="display: inline-block ;background-color: rgba(52, 73, 94,0)">
					
						 <div style="display: inline-block ;float: left!important;width:1020px;margin-top:4px" >
	 <a style="padding-right: 5px" href="#">
		 <img style="height: auto;width:1020px;" src="images/visa.png">
		</a>
 </div>
						 <a href="index.php"><img   height="80px" style="float:right;background-color: rgba(52, 73, 94,0);margin-top: -20px" src="images/madewithlove.png">
				 </a>
							
	 
				</footer>
		 
		 </body>
 </html>
 <?php }else{  ?>
 <html id="snow" lang="en-EN" class="animated">
		 <head>
				 <title> Mon shop</title>
				 <meta charset="UTF-8">
				 <meta name="viewport" content="width=device-width, initial-scale=1.0">
				 <link rel="stylesheet" href="page.css">
				 <link rel="stylesheet" href="animate.css">
				 <link href="style.css" type="text/css" rel="stylesheet" />
				 <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Merienda" rel="stylesheet">
				 <link href="https://fonts.googleapis.com/css?family=Coming+Soon|Crafty+Girls" rel="stylesheet">
			 </head>
		 <body >
	<?php include("headernavtop.php")?>
	<div >
				 <form style='margin-top: -20px!important;'id="search" action="search.php">
			<input  s placeholder="cherchez un produit, une marque ou une catégorie" type="text" name="searchfield" id="searchfiled" style="padding-left: 0.1em;border-left: 6px solid rgba(122,10,10,0.2);"> 
		 <input value="CHERCHER" type="submit"  name="searchbtn" id="searchbtn" >
		 </form> 
	</div>   
	
 <div class="leselments" style="padding: 0;margin: 0 auto;width: 1200px;height: 300px" >
 <center>
		 <div id='product-grid' style='padding: 0;margin: 0 auto;width:100%;margin-left:-30px'><img style='width:300px' src='images/search'></div>
	 
			</center>  
	 </div> 
		 <nav class="nav-down">
 <div style="float: right!important;margin-top:-30px;padding-right: 30px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:70px;" src="images/top.png">
	 </div> </a>
 </div>
 <div style="float: left!important;margin-top:-14px;padding-left: 10px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/twitter-icon.png">
	 </div> </a>
 </div>
 <div  style="float: left!important;margin-top:-14px;margin-left: -3px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/instagram-icon.png">
	 </div> </a>
 </div>
 <div  style="float: left!important;margin-top:-14px;margin-left: -3px" >
	 <a style="padding: 0" href="#">
	 <div  dir="#" class=" nav-icon">
		<img class="animate jello" style="height: auto;width:40px;" src="images/facebook.png">
	 </div> </a>
 </div>
				 <div class="table">
					<ul> 
						 <li class="menu-ind border-bottom">
								 <a href="about.php">A propos</a>
						 </li>
						 <li class="menu-ind border-bottom">
								 <a href="about.php">politique de confidentialité</a>
						 </li>
							
					</ul>
				 </div>
				</nav>
	 
				<footer style="display: inline-block ;background-color: rgba(52, 73, 94,0)">
					
						 <div style="display: inline-block ;float: left!important;width:1020px;margin-top:4px" >
	 <a style="padding-right: 5px" href="#">
		 <img style="height: auto;width:1020px;" src="images/visa.png">
		</a>
 </div>
						 <a href="index.php"><img   height="80px" style="float:right;background-color: rgba(52, 73, 94,0);margin-top: -20px" src="images/madewithlove.png">
				 </a>
							
	 
				</footer>
		 
		 </body>
 </html>
 <?php }?>