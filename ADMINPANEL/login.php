<?php
if (isset($_POST['submit']) )
  { if($_POST['login']=='' || $_POST['login']==''){ 
		?>
        <!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style2.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Administrateur</h1>
      <form method="post" action="login.php">
        <p><input type="text" name="login" value="" placeholder="Admin"></p>
        <p><input type="password" name="password" value="" placeholder="Mot de pass"></p> 
         <center>
            <p style='color:red;font-size:10px'>
            Veuillez saisire un Nom d'utilisateur et un Mot de pass valide
            </p>
            <input  class="submit" type="submit" name="submit" value="Se Connecter">
        </center>
      </form>
    </div> 
  </section>

  
</body>
</html>
        <?php }else{
	$connection=mysqli_connect("127.0.0.127", "root", "", "valium"); 
    require_once ('function.inc.php');
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['password'] = $_POST['password'];
	// retrieve the username and password sent from login form // First we remove all HTML-tags and PHP-tags, then we create a md5-hash // This step will make sure the script is not vurnable to sql injections.
	$u = strip_tags($_POST['login']);
	$p = md5(strip_tags($_POST['password']));
	//Now let us look for the user in the database.
	$query = sprintf("SELECT username FROM admin WHERE username = '%s' AND password = '%s' LIMIT 1;",
	mysqli_real_escape_string( $connection,$u), mysqli_real_escape_string( $connection,$p));
	$result = mysqli_query( $connection,$query);
	// If the database returns a 0 as result we know the login information is incorrect.
	// If the database returns a 1 as result we know  the login was correct and we proceed. // If the database returns a result > 1 there are multple users // with the same username and password, so the login will fail.
		if (mysqli_num_rows($result) === 0)
		{ 
		?>
        
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style2.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Administrateur</h1>
      <form method="post" action="login.php">
        <p><input type="text" name="login" value="" placeholder="Admin"></p>
        <p><input type="password" name="password" value="" placeholder="Mot de pass"></p> 
         <center>
            <p style='color:red;font-size:10px'>
            Nom d'utilisateur ou mot de pass incorrect
            </p>
            <input  class="submit" type="submit" name="submit" value="Se Connecter">
        </center>
      </form>
    </div> 
  </section>

  
</body>
</html>
        <?php
	  	} else {
		// Login was successfull
			session_start();
			$row = mysqli_fetch_array($result); 
			// Save the username for use later
			$query = sprintf("SELECT username FROM admin WHERE username = '%s' AND password = '%s' LIMIT 1;",
			mysqli_real_escape_string( $connection,$u), mysqli_real_escape_string( $connection,$p));
			$result = mysqli_query($connection,$query);
			$row = mysqli_fetch_array($result);
			$_SESSION['username'] = $row['username'];
			
			$query = sprintf("SELECT name FROM user WHERE username = '%s' LIMIT 1;",
			mysqli_real_escape_string( $connection,$u));
			$result = mysqli_query($connection,$query);
			$row = mysqli_fetch_array($result); 
			$_SESSION['name'] = $row['name'];
			
			$query = sprintf("SELECT email FROM user WHERE username = '%s' LIMIT 1;",
			mysqli_real_escape_string( $connection,$u));
			$result = mysqli_query($connection,$query);
			$row = mysqli_fetch_array($result);  
			$_SESSION['email'] = $row['email'];
			 
			
			$exipration=time()+1400;
			$login=$_SESSION['username'] ; 
			setcookie("loggedin",$_SESSION['username'],$exipration);
			// Now we show the userbox  
			 header('Location: http://127.0.0.127/Mydminpanel/index2.php');
             exit();
		} 
}
}else{
?>


<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style2.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Administrateur</h1>
      <form method="post" action="login.php">
        <p><input type="text" name="login" value="" placeholder="Admin"></p>
        <p><input type="password" name="password" value="" placeholder="Mot de pass"></p> 
         
          <center>  <input  class="submit" type="submit" name="submit" value="Se Connecter">
        </center>
      </form>
    </div> 
  </section>

  
</body>
</html>
<?php }?>
