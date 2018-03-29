 <?php
 require_once("../DB/dbcontroller.php");
$db_handle = new DBController();   
?>
<!DOCTYPE HTML>
<html id="snow" lang="en-EN">
    <head>
        <title> Mon shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="../CSS/page.css">
        <link rel="stylesheet" href="../CSS/style.css">
        <link href="style.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Merienda" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Coming+Soon|Crafty+Girls" rel="stylesheet">
      </head>
    <body>
    <header class=' header1'>
        <h1 class='animated rubberBand' ><a href=''><img alt='' src='../images/logo (1)'style='height: 90px;' ></a>
        </header>
<div class="leselments" style='width: 100%'>
      
	 <h2> <a style='font-size:1.5em;text-decoration: none' href='http://127.0.0.127/Mydminpanel/'><</a> Tous les produits</h2>  
		<div id="product-grid" style="padding-left:2%;margin:0 auto;"> 
				<?php
				$product_array = $db_handle->runQuery("SELECT * FROM p ");
				if (!empty($product_array)) { 
					foreach($product_array as $key=>$value){
				?>
					<div class="product-item">
						<form method="post" action="loggedin.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
						<div class="product-image"><img src="../images/<?php echo $product_array[$key]["image"]; ?>"></div>
						<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
						<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
						<div><input name="remove" type="submit" value="Remove" class="btnRemoveAction" /></div>
						<div><input name="updtae" type="submit" value="Update" class="btnAddAction" /></div> 
						</form>
					</div>
				<?php
						}
				}else{
				echo" <div id='product-grid' style='padding: 0;margin: 0 auto;width:100%;margin-left:-30px'><img style='width:300px' src='images/0_results.png'></div>
			  ";
			  }
				?>  
			</div>
 
  </div></div>
     
    
      
    
    </body>
		 <footer style="display: inline-block ;background-color: rgba(52, 73, 94,0)">
         
            <div style="display: inline-block ;float: left!important;width:1000px;margin-top:4px" >
  <a style="padding-right: 5px" href="#">
    <img style="height: auto;width:900px;" src="../images/visa.png">
   </a>
</div>
            <a href="index.php"><img   height="80px" style="float:right;background-color: rgba(52, 73, 94,0);margin-top: -20px" src="../images/madewithlove.png">
        </a>
             
  
       </footer>
</html>