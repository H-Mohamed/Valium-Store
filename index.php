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
     <input  placeholder="cherchez un produit, une marque ou une catégorie" type="text" name="searchfield" id="searchfiled" style="padding-left: 0.1em;border-left: 6px solid rgba(122,10,10,0.2);"> 
    <input value="CHERCHER" type="submit"  name="searchbtn" id="searchbtn" >
    </form> 
            <img style="width:1200px;height: auto;"   alt="" src="images/lp-main.jpg">
</div> 
  <center>
	
<div class="leselments" style="padding: 0;margin: 0 auto;width: 1200px;" >
    <!-- https://i0.wp.com/respectmyblog.com/wp-content/uploads/2016/01/sneaker-release-dates-sbd.jpg-->
    <!--img width="100%" src="http://www.boutiquehaircoiffure.com/uploads/767x0_1169x0/ruban.png" alt""-->
    <div style="padding: 0;margin: -20px auto;width: 1200px;">
       <div style="padding: 0;margin: 0 auto;">
    <div>
            <a href="#">	<img class="InX" alt="" style="width:800px;height: 300px;float:left" src="images/Cat_Baby's-Fashion_(1)"></a>
         </div>
         <div>
            <a href="#"><img   class="InX" alt="" style="width:400px;height: 300px;float:right" src="images/promo1.jpg"></a>
          </div> 
       </div>  
</div>
   
   <div style="padding: 0;margin: 0 auto;clear: both">  <br>     <hr>
<h2 > En vedette</h2>
<hr></div>
     <br>
</div>
<div id="product-grid" style="padding: 0;margin: 0 auto;width:100%;margin:10px 0 30px 80px"> 
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM p ORDER BY id ASC");
	$p=1;
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
		$p+=5;
		?>
		<div class="product-item" style="padding: 0;margin: 0 auto;width: 250px;">
			<form method="POST" action="cart.php?action=add&id=<?php echo $product_array[$key]["id"];?>">
			<a href='p.php?id=<?php echo $product_array[$key]["id"];?>'>
		<div class="product-image"><img src="images/<?php echo $product_array[$key]["image"]; ?>"></div></a>
			<div>
			 <div style="text-align: left;float: left;font-size:10px"><strong><?php echo couper($product_array[$key]["name"]); ?></strong></div>
			 
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
	?> 
</div>
		
	 
 
   <div style="padding: 0;margin: 0 auto;clear: both">  <br>     <hr>
<h2 >Populaires & Nouveaux</h2>
<hr></div>
   <div id="product-grid" style="padding: 0;margin: 0 auto;width:100%;margin:10px 0 30px 80px"> 
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM p WHERE tag LIKE '%Recom%'");
	$p=1;
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
		$p+=5;
		?>
		<div class="product-item" style="padding: 0;margin: 0 auto;width: 250px;">
			<form method="POST" action="cart.php?action=add&id=<?php echo $product_array[$key]["id"];?>">
			<a href='p.php?id=<?php echo $product_array[$key]["id"];?>'>
		<div class="product-image"><img src="images/<?php echo $product_array[$key]["image"]; ?>"></div></a>
			<div>
			 <div style="text-align: left;float: left;font-size:10px"><strong><?php echo couper($product_array[$key]["name"]); ?></strong></div>
			 
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
	?> 
</div>
		
	 
 
     <div style="padding-top: 30px;clear:both;">
			 <br><br>
            <a href="#"><img  class="InX" alt="" style="width:30%;height: 300px;float:left" src="images/go3.jpg"></a>
          </div>
         <div>
            <a href="#"><img  class=" InX" alt="" style="width:70%;height: 300px;float:right" src="images/topbrands.png"></a>
          </div>
      <div><img class="animated rollIn" width="100%"   src="images/80percent" alt="">   
   </div>
      </div></div>
  </center>
 
  </div>
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
			<footer style='display: inline-block ;width: 100%;margin:0 0 0px 0'>
          
        <div style='display: inline-block ;float: left!important;width:1000px;margin:4px 0 0 0' >
          <a style='padding-right: 5px' href='#'>
            <img style='height: auto;width:1000px;' src='images/visa.png'>
          </a>
        </div>
        <a href='index.php'>
          <img   height='80px' style='float:right;background-color: rgba(52, 73, 94,0);margin-top: -20px' src='images/madewithlove.png'>
        </a>
      </footer> 
      
    </body>
</html>