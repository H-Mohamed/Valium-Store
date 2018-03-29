<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		
		if(!empty($_POST["quantity"])) {
			if(isset($_SESSION["cart_items"])){
				$_SESSION["cart_items"]++;
				}
			$code=$_GET["id"];
			$productByCode = $db_handle->runQuery("SELECT * FROM p WHERE id=$code");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"])))
				{
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
									$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		$_SESSION["cart_items"]--;
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
		unset($_SESSION["item_total"]); 
break;	
}
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
	<?php include("headernavtop.php")?>
	<div id="shopping-cart">
<div class="txt-heading"> Votre Panier <a id="btnEmpty" href="cart.php?action=empty">Vider le Panier</a></div>
<?php
if(isset($_SESSION["cart_item"])){
    $_SESSION["item_total"] = 0;
?>	
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;"><strong>Produit</strong></th>  
<th style="text-align:left;"><strong>Quantité</strong></th>
<th style="text-align:center;"><strong>Prix Unitaire</strong></th>
</tr>	
<?php
$_SESSION["cart_items"]=0;
$_SESSION["item_total"]=0;
    foreach ($_SESSION["cart_item"] as $item){
		?>	<tr>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td> 
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
				<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Supprimer</a></td>
				</tr>
				<?php
        $_SESSION["item_total"]  += ($item["price"]*$item["quantity"]);
		$_SESSION["cart_items"]++;
		}
		?>

<tr>
<td colspan="5" align=right><strong>Produits :<?php echo $_SESSION["cart_items"]; ?> Total:</strong> <?php echo "$".$_SESSION["item_total"] ; ?></td>
</tr>
</tbody>
</table>		
  <?php
}
?>
</div><footer>
	<div>
        <a href='http://127.0.0.127/zee/New%20folder/index.php'><button     style='float:left;border:none;border-radius:4px;color:#000;cursor:pointer;font-size:16px;margin:15px 10px 15px 0;padding:11px;min-width:100px;text-align:center;-webkit-transition:background-color 200ms;transition:background-color 200ms;-webkit-appearance:none'
 value='Go back' > Précédent</button></a>
    </div>
     <a href='http://127.0.0.127/zee/New%20folder/cart-step2.php'><button     style='float:right;border:none;border-radius:4px;color:#000;cursor:pointer;font-size:16px;margin:15px 0 15px 10px;padding:11px;min-width:100px;text-align:center;-webkit-transition:background-color 200ms;transition:background-color 200ms;-webkit-appearance:none'
 value='Go back' > Suivant</button></a></footer>
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