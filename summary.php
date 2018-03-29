<?php
session_start();
if(!isset($_SESSION["item_total"])){
    header( "refresh:0.01;url=index.php" );
      exit();
}else{ 
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {

}
?>
<html lang="en-EN" class="animated">
  <head>
    <title>
      Mon shop
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Merienda" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="page.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link href="style.css" type="text/css" rel="stylesheet" />
  </head>
<body>
	<?php include("headernavtop.php")?>

	<div id="shopping-cart">
<div class="txt-heading"> Facturation  </div>
<hr>
<h2 style='text-align:center'>Détails de votre Facture </h2>
<hr>
<tr>
<td colspan="5" align=right> <div style='padding-left:20px; margin: 0 auto'> 
    <?php echo "<pre>Nom & prénom:   ".$_SESSION['name']."</pre>"; ?><br>
    <?php echo "<pre>Email       :   ".$_SESSION['email']."</pre>"; ?><br>
    <?php echo "<pre>Adresse     :   ".$_SESSION['address']."</pre>"; ?><br>
</div>
</td>
</tr>
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;"><strong>Produit</strong></th>  
<th style="text-align:left;"><strong>Quantité</strong></th>
<th style="text-align:center;"><strong>Prix Unitaire</strong></th>
<th style="text-align:left;"><strong>Total/produit</strong></th>
</tr>	
<?php
$_SESSION["item_total"]=0;
    foreach ($_SESSION["cart_item"] as $item){
		$usrid=$_SESSION['id'];
		$idproduct=$item['code'];
		$time=date('Y-m-d',time());
		$total=$item["price"]*$item["quantity"];
		$quantité=$item["quantity"];
		
    //INSERT INTO `commandes` (`id`, `userid`, `date`, `idproduit`, `quantité`, `total`, `etat`) VALUES (NULL, '15', CURRENT_DATE(), '59', '1', '10', 'Inactive');
		mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),"INSERT INTO commandes (id, userid, date, idproduit, quantité, total, etat) VALUES (NULL, '1', CURRENT_DATE(), '59', '1', '10')");
 
		 ?>
		  <?php
		//COMMANDE 
		
	?>
		 <tr>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["name"]; ?></td> 
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
				<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["price"]*$item["quantity"]; ?></td>
				</tr>
				<?php
        $_SESSION["item_total"]  += ($item["price"]*$item["quantity"]);
		$_SESSION["cart_items"]++;
		}
		?>
</tbody> 
</table>
 <hr>
    <div style='float:right;margin-right:1%;line-height: 30px'><?php echo "Total: &nbsp".$_SESSION["item_total"]."$" ;?></div>
    <hr style='clear: both'>  
   <footer style='display: inline-block ;width: 100%;margin:auto 0 0px 0'>
    <div>
        <a href='http://127.0.0.127/zee/New%20folder/cart-step2.php'><button     style='float:left;border:none;border-radius:4px;color:#000;cursor:pointer;font-size:16px;margin:15px 10px 15px 0;padding:11px;min-width:100px;text-align:center;-webkit-transition:background-color 200ms;transition:background-color 200ms;-webkit-appearance:none'
 value='Go back' > Précédent</button></a><div id="paypal-button" style='float:right'></div> 
    </div></footer> 
    </div>
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
			<script>
        paypal.Button.render({

            env: 'production', // Or 'sandbox',

            commit: true, // Show a 'Pay Now' button

            payment: function() {
                // Set up the payment here
            },

            onAuthorize: function(data, actions) {
                // Execute the payment here
           }

        }, '#paypal-button');
    </script>
    </div>
</body>
</html>
<?php } ?>