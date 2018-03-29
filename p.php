<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["id"])) {
	$code=$_GET["id"];
			$productByCode = $db_handle->runQuery("SELECT * FROM p WHERE id=$code");
 }
?>
<html lang="en-EN" class="animated">
  <head>
    <title>
      Mon shop
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="page.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Merienda" rel="stylesheet">
  </head>
<body>
	<?php include("headernavtop.php");?>
	
	
    <div  style='width:1200px;min-height: 790px;padding: 0;margin: 0 auto;'>
       <div  style='float:left;width:700px;min-height: 700px;'>
        <!-- image-->
        <img style='width:700px;padding:0;margin: 0 auto;box-shadow:0px 0px 2px #AAA ' src='images/<?php echo $productByCode[0]["image"]; ?>'>
        <img style='width:50px;padding:0;margin: 0 auto;box-shadow:0px 0px 2px #AAA ' src='images/<?php echo $productByCode[0]["image"]; ?>'>
       </div>
    <div style='padding:3px;float:right;display: block;width: 400px'>
        <!--Nom prix, description, quantité et btn ajout au panier-->
      <form method="POST" action="cart.php?action=add&id=<?php echo $productByCode[0]["id"];?>">
        <div><h2><?php echo $productByCode[0]["name"]; ?></h2></div>
        <div><p style='text-align:left;font-size:2em;color:orange'><?php echo $productByCode[0]["price"].'$'; ?></p>
        </div> 
        <div style='text-align:left;'><h3>Description :</h3> <?php echo $productByCode[0]["description"]; ?>
       </div>
       	<div style='padding-left:20px;clear:both;margin: 10px auto'>Quantité<input type="number" step="1" name="quantity" value="1" size="7" min="0"/>
            <input type="submit" value="Ajouter Au Panier" name="btnAddAction" /></div>
        </form>
      </div>
    <div  style='clear:both;font-size:1.4em;color:black;margin-left:50px'> Tags 
       <div style='text-align:left;text-align:left;font-size:0.7em;color:orange'> <?php echo $productByCode[0]["tag"]; ?>
          <br><br>
    </div></div>
    </div>

 <nav class='nav-down' style='clear: both;padding: 0;margin: 0 auto;'>
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