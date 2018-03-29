<?php 
if(isset($_COOKIE["login"])){
?><?php 
session_start();
require_once('dbcontroller.php');
$db_handle = new DBController();?>
 <!DOCTYPE HTML>
<html lang='en-EN' class='animated'>
  <head>
    <title>
      Mon shop
    </title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' type='text/css' href='page.css'>
    <link rel='stylesheet' type='text/css' href='animate.css'>
    <link href='style.css' type='text/css' rel='stylesheet' />
    <link href='https://fonts.googleapis.com/css?family=Lovers+Quarrel|Merienda' rel='stylesheet'>
  </head>
  <body style='width: 100%'>
    <?php  include('headernavtop.php')
?>
      <center>
				<div style="padding: 0;margin: 0 auto">
        <form style="padding: 0;margin-top:-20px" id="search" action="search.php">
     <input autofocus placeholder="cherchez un produit, une marque ou une catégorie" type="text" name="searchfield" id="searchfiled" style="border-left: 3px solid rgba(122,10,10,0.2);"> 
    <input value="CHERCHER" type="submit"  name="searchbtn" id="searchbtn" >
    </form> <br>
            <img style="width:1200px;height: auto;"   alt="" src="http://www.childrensplace.com/wcsstore/GlobalSAS/images/tcp/place_shops/2015-hol-baby/lp-main.jpg">
</div>
 </center>
  <center>
	
<div class="leselments" style="padding: 0;margin: 0 auto;width: 1200px;" >
 
    <!-- https://i0.wp.com/respectmyblog.com/wp-content/uploads/2016/01/sneaker-release-dates-sbd.jpg-->
    <!--img width="100%" src="http://www.boutiquehaircoiffure.com/uploads/767x0_1169x0/ruban.png" alt""-->
    <div style="padding: 0;margin: -20px auto;width: 1200px;">
        
       <div style="padding: 0;margin: 0 auto;">
    <div>
            <a href="#"><img class="InX" alt="" style="width:800px;height: 300px;float:left" src="http://ph-live.slatic.net/cms/category_banner/shop-baby/Cat_Baby%27s-Fashion_(1).jpg"></a>
          </div>
         <div>
            <a href="#"><img   class="InX" alt="" style="width:400px;height: 300px;float:right" src="images/55.gif"></a>
          </div> 
       </div> 
     <div style="padding: 0;margin: 0 auto;width: 1200px;height: 400px" class="simple-ss" id="simple-ss"/>
  
    
</div>
   
  
			  <?php  
	for($i=0;$i<11;$i++){
		echo '<br>';
	}
		
	?>  
            <hr>
<h2 style="padding: 0;margin: 0 auto;width: 790px;"> En vedette</h2>
<hr><br>
</div><div id="product-grid" style="padding: 0;margin: 0 auto;width:100%;margin:10px 0 30px 50px"> 
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM p ORDER BY id ASC");
	$p=1;
	if (!empty($product_array)) { 
		
		foreach($product_array as $key=>$value){
		$p+=5;
		
		?>
		<div class="product-item" style="padding: 0;margin: 0 auto;width: 250px;">
			<form method="POST" action="http://127.0.0.127/zee/New%20folder/cart.php?action=add&id=<?php echo $product_array[$key]["id"];?>">
			<div class="product-image"><img src="images/<?php echo $product_array[$key]["image"]; ?>"></div>
			<div>
			<div style="text-align: left;float: left"><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div class="product-price" style='float: right'>
				<?php echo "$".$product_array[$key]["price"]; ?>
			</div>
			</div>
			<div ><input type="number" step="1" name="quantity" value="1" size="2" min="0"/><input type="submit" value="Add to cart" name="btnAddAction" /></div>
			</form>
		</div>
	<?php 
			} 
	}  
	?> 
</div>
		
		  <?php
		  $h=(85*$p)/100 ;
	for($i=0;$i<$h;$i++){
		echo '<br>';
	}
		echo '<hr>';
	?>  
 <div style="padding: 0;margin: 0 auto;width: 790px;"> 
 <h2 style="padding: 0;margin: 0 auto;width: 790px;">   Populaires & Nouveaux</h2>       
</div>
        <hr>
        <div id="product-grid" style="padding: 0;padding-bottom: 30px;margin: 0 auto;width:100%;margin:10px 0 30px 50px"> 
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM p WHERE description LIKE '%Rec%'");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="POST" action="http://127.0.0.127/zee/New%20folder/cart.php?action=add&id=<?php echo $product_array[$key]["id"];?>">
			<div class="product-image"><img style="width:230px;height:40px" src="images/<?php echo $product_array[$key]["image"]; ?>"></div>
			<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div ><input type="number" step="1" name="quantity" value="1" size="2" min="0"/><input type="submit" value="Add to cart" name="btnAddAction" /></div>
				</form>
		</div>
	<?php
			}
	}
	?>
    <br><br>
</div>
        <div style="padding-top: 30px;clear:both;">
			 <br><br>
            <a href="#"><img  class="InX" alt="" style="width:30%;height: 300px;float:left" src="images/go3.jpg"></a>
          </div>
         <div>
            <a href="#"><img  class=" InX" alt="" style="width:68%;height: 300px;float:right" src="images/3 (2)"></a>
          </div>
      <div><img class="animated rollIn" width="100%" height="90px" src="images/all.jpg" alt="">   
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
			<footer style='display: inline-block ;width: 100%'>
          
        <div style='display: inline-block ;float: left!important;width:1000px;margin-top:4px' >
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
<?php }
else{header( "refresh:0.0000001;url=login.php" );
      exit();}
?>
 