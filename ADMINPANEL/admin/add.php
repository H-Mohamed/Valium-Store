    <?php
     if(isset($_POST["submit"])){
						session_start();
   				$query1 = "INSERT INTO admin (name, email, password,username) VALUES ('{$_POST['name']}', '{$_POST['login']}',md5('{$_POST['password']}'),'{$_POST['username']}')) ";
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

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
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
  <form id="contact" action="add.php" method="POST">
    <?php
     if(isset($_POST["submit"])){
 echo "<h3><a style='font-size:1em;text-decoration: none' href='http://127.0.0.127/Mydminpanel/'>
<</a>Ajouter Utilisateur</h3><br> Bien Ajouté<h3><br><h3>Ajouter un autre</h3><br>"; 
     session_abort();
					}else{
          echo"<h3>Ajouter Utilisateur</h3><br>";
     }
?>
       <fieldset>
      <input placeholder="Nom Complet" type="text" tabindex="1" name="name" required autofocus>
    </fieldset>
			 <fieldset>
      <input placeholder="Nom d'utilisateur" type="text" tabindex="1" name="username" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" tabindex="2" name="login" required>
    </fieldset>
    <fieldset>
      <input placeholder="Mot de pass" type="text" tabindex="3" name="password" required>
    </fieldset>
 

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 <div>
        <a href='http://127.0.0.127/Mydminpanel/'><button     style='border:none;border-radius:4px;color:#333;cursor:pointer;font-size:16px;margin:0 10px 15px 0;padding:11px;min-width:100px;text-align:center;-webkit-transition:background-color 200ms;transition:background-color 200ms;-webkit-appearance:none'
 value='Go back' > Précédent</button></a>
    </div>
  
</div>
</body>
</html> 
