<?php
session_start();
  if(!isset($_SESSION["item_total"])){
    header( "refresh:0.01;url=index.php" );
      exit();
}else{
	if(isset($_POST["inscription"])){
		$connection=mysqli_connect("127.0.0.127", "root", "", "valium");
		mysqli_query($connection,"INSERT INTO user (name, username, email, password, address)
		VALUES ('{$_POST['fname']}','{$_POST['username']}', '{$_POST['login']}',md5('{$_POST['password']}'),'{$_POST['adresse']}')");

		$query = sprintf("SELECT id FROM user WHERE username = '%s' LIMIT 1;",
			mysqli_real_escape_string( $connection,$_POST['username']));
			$result = mysqli_query($connection,$query);
			$row = mysqli_fetch_array($result);
		setcookie("login",$_SESSION['username'],time()+400);
			$_SESSION['id']= $row['id'];
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['name'] = $_POST['fname'];
			$_SESSION['email'] = $_POST['login'];
			$_SESSION['address'] = $_POST['adresse'];
		?>
    <html>
	<head></head><title>Redirection...</title>
    <meta http-equiv='refresh'
content='1;URL= http://127.0.0.127/zee/New%20folder/summary.php'>
</head> 
   
<body> 
</body>
</html>
	<?php }else{ ?>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Merienda" rel="stylesheet">
  </head>
<body>
	<?php include("headernavtop.php")?>
<div class="txt-heading"> Livraison </div>
 <div class="e " style="width:1200px;height: 530px;margin: -10px auto;display: inline-block!important"> 
<?php       
		 if(isset($_COOKIE['login'])){ 
            ?>
 <form action='inscrit-next.php' style='align-self:center;width:800px;' method='POST'  >
		<div>
            <br>
        <label for='name' class='label'> Nom Complet</label><br>
		<input  style='padding:10px;height: 40px;border-radius: 15em;'	 value='<?php echo $_SESSION['name']; ?>' required='yes' type='text' name='fullname'>
      <br>
		 <label for='login' class='label'> Email</label><br>
		<input  style='padding:10px;height: 40px;border-radius: 15em;' value='<?php echo $_SESSION['email'];?>' required='yes' type='email' name='login'>
        <br>
		 <label for='adress' class='label'>  Adresse de livraison</label><br>
        <textarea style='padding:10px;width:100%;height: 100px;display: inline-block!important' placeholder='' required='yes'  name='adresse'>
            <?php echo $_SESSION['address']; ?>
		</textarea>	
		</div>
    </form>
   <?php }else{ ?>
 <form action='cart-step2.php' style='width: 1000px' method='POST'>
		<div>
         <label for="username" class="label"> Nom d'utilisateur</label><br>
		<input  style="height: 40px;border-radius: 15em;"	 placeholder="EX: John"         type="text" name="username">
        <label for="fname" class="label"> Nom Complet</label><br>
		<input  style="height: 40px;border-radius: 15em;"	 placeholder="EX: John McJerry" type="text" name="fname">
        <br>
		<div style='height: 40px;border-radius: 15em;width:455px;display: inline-block!important'>
		<label for='login' class='label'> Email</label><br>
		<input  style='padding:10px;height: 40px;border-radius: 15em;' type='email' name='login' required='yes'>
		</div>
		<div style='margin-left:0.3%;height: 40px;border-radius: 15em;width:455px;display: inline-block!important'>
        <label for='password' class='label'>  Mot de Pass</label><br>
        <input required style='padding:10px;height: 40px;border-radius: 15em;display: inline-block!important'  placeholder='Votre Mot de Pass' required='yes' type='password' name='password'>
        </div></div><br>
		<div style='height: 220px;width:100%;display:block!important'>
        <label for='adress' class='label'>  Adresse de livraison</label><br>
        <textarea required style='padding:10px;margin-left:0.3%;width:950px;height: 100px;border-radius: 20px;display: inline-block!important'  placeholder='' required='yes'  name='adresse'>
		</textarea>
		<center>
			<br><br> 
		<div style='margin-left:-0.5%;height: 40px;border-radius: 15em;width:200px;display: inline-block!important'>
         <input style='padding:10px;height: 40px;border-radius: 15em;display: inline-block!important;border:1px dashed red'  value="S'inscrire" required='yes' type='submit' name='inscription'>
        </div></center>
		</div>
		
		 <footer>
<div>
        <a href='http://127.0.0.127/zee/New%20folder/cart.php'><button     style='float:left;border:none;border-radius:4px;color:#555;cursor:pointer;font-size:16px;margin:15px 10px 15px 0;padding:11px;min-width:100px;text-align:center;-webkit-transition:background-color 200ms;transition:background-color 200ms;-webkit-appearance:none'
 value='Go back' > Précédent</button></a>
    </div>
     
   </footer>
    </form> 
    <?php } ?>
    <?php  if(isset($_COOKIE['login'])){ ?>
 </div>
	<footer>
	<div>
        <a href='http://127.0.0.127/zee/New%20folder/cart.php'><button     style='float:left;border:none;border-radius:4px;color:#000;cursor:pointer;font-size:16px;margin:15px 10px 15px 0;padding:11px;min-width:100px;text-align:center;-webkit-transition:background-color 200ms;transition:background-color 200ms;-webkit-appearance:none'
 value='Go back' > Précédent</button></a>
    </div>
     <a href='http://127.0.0.127/zee/New%20folder/summary.php'><button     style='float:right;border:none;border-radius:4px;color:#000;cursor:pointer;font-size:16px;margin:15px 0 15px 10px;padding:11px;min-width:100px;text-align:center;-webkit-transition:background-color 200ms;transition:background-color 200ms;-webkit-appearance:none'
 value='Go back' > Suivant</button></a></footer>
    <?php } ?>
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
    </div>
</body>
</html>
    <?php }} ?>