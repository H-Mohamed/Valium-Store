 <?php 
     if(isset($_POST["submit"])){
						session_start();
     $query1 = "INSERT INTO p (id, name, code, price, image, description, categorie, type, tag) VALUES (NULL, '{$_POST['productname']}', '{$_POST['productcode']}', '{$_POST['productprice']}',  '{$_POST['productimg']}',  '{$_POST['productdesc']}',  '{$_POST['productcat']}',  '{$_POST['producttyp']}',  '{$_POST['producttag']}')";
	    mysqli_query(mysqli_connect("127.0.0.127", "root", "", "valium"),$query1);
					}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- CSS -->
    <style>
     @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased; 
	-o-font-smoothing:antialiased;  
}

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	background:#0CF;
}

.container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

select,#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
} 

    </style>
 </head>
<body> 
 <div class="container">  
  <form id="contact" action="addproduct.php" method="POST">
    <?php 
     if(isset($_POST["submit"])){ 
     echo '<h3>Produit Bien Ajouté</h3>'."{$_POST['productname']}, {$_POST['productcode']}, {$_POST['productimg']}, {$_POST['productprice']} "."<br>
					<h3>Ajouter Un Produit</h3>"; 
     }
     else{
          echo"
	 <h3 style='clear:both'>Ajouter Un Produit </h3>";
     }
?>
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
      <textarea placeholder="Description...." tabindex="5" name="productdesc"  ></textarea>
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
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Ajouter</button>
    </fieldset>
				
  </form>
 <div>
        <a href='http://127.0.0.127/Mydminpanel/'><button     style='border:none;border-radius:4px;color:#333;cursor:pointer;font-size:16px;margin:0 10px 15px 0;padding:11px;min-width:100px;text-align:center;-webkit-transition:background-color 200ms;transition:background-color 200ms;-webkit-appearance:none'
 value='Go back' > Précédent</button></a>
    </div>
  
</div>
</body>
</html> 
