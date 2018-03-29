<?php if(!isset($_COOKIE["loggedin"]))
{header( "refresh:0.01;url=index2.php" );
      exit();
}else{
?>
 <?php
 session_start();
 $connection1=mysqli_connect('127.0.0.127', 'mohamed', 'pass', 'valium');
$connection2=mysqli_connect('127.0.0.127', 'root', '', 'valium'); 
   mysqli_close($connection1);
   mysqli_close($connection2); 
   setcookie("login", "", time() - 86400);
   session_abort();
?>
<?php ?>
 <html>
<head>
   <link rel="stylesheet" href="animate.css">
<style>

/* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,

img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav 

li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption

,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-

size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
.underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a 

underline */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
body{
	font-family:"Century Gothic" Geneva Helvetica, sans-serif;
	background: url('../images/bg.jpg');
}
.wrap{
	margin:0 auto; 
	width: 96%;
}
h1{
	margin-top: 20px;
	color: #603813;
	font-size: 3em;
	text-transform: uppercase;
	font-weight: bold;
}
.banner{
	text-align:center;
	margin-top: 30px;
}
.banner img{
	margin-top: 0px;
}
.page{
	text-align:center;
	font-family: "Century Gothic";
}
.page h2{
	font-size:3em;
	color: white;
	font-weight:200;
}
.footer{
	font-family: "Century Gothic";
	position: absolute;
	right: 30px;
	bottom:20px;
}
.footer p{
	font-size:1em;
	color: #603813;
}
.footer a{
	 color: #f9614d;
}
.footer a:hover{
	text-decoration:underline;
}
/*media queries*/
@media all and (max-width:1366px) and (min-width:1280px){
.wrap{
	width: 90%;
}
.banner{
	margin-top: 30px;
}
}
@media all and (max-width:1280px) and (min-width:1024px){
.wrap{
	width: 90%;
}
}	
@media all and (max-width:1024px) and (min-width:800px){
.wrap{
	width: 90%;
}
h1{
	font-size: 2em;
}
.banner{
	margin-top: 0px;
}
.page h2{
	font-size: 2em;
}
}
@media all and (max-width:800px) and (min-width:640px){
.wrap{
	width: 90%;
}
h1{
	font-size: 2em;
}
.banner{
	margin-top: 10px;
}
.banner img{
	width: 34%;
}
.page h2{
	font-size:2em;
}
}
@media all and (max-width:640px) and (min-width:480px){
.wrap{
	width: 90%;
}
h1{
	font-size: 1.6em;
}
.banner{
	margin-top: 0px;
}
.banner img{
	width: 32%;
}
.page h2{
	font-size:1.6em;
}
}
@media all and (max-width:480px) and (min-width:320px){
.wrap{
	width: 90%;
}
h1{
	font-size: 1.4em;
}
.banner{
	margin-top: 0px;
}
.banner img{
	width: 32%;
}
.page h2{
	font-size:1.4em;
}
.footer p{
	font-size: 0.9em;
}
}
@media all and (max-width:320px){
.wrap{
	width: 90%;
}
h1{
	font-size: 1.4em;
}
.banner{
	margin-top: 10px;
}
.banner img{
	width:80%;
}
.page{
	font-size:1em;
}
.footer{
	bottom: 10px;
}
.footer p{
	font-size: 0.9em;
}
}

</style>
<?php  echo "
     <title>Redirection...</title>
    <meta http-equiv='refresh'
content='3;URL= http://127.0.0.127/Mydminpanel/login.php'>
</head>
 
		<p class='animated flash' style='text-align:center;margin:10px 0 10px 0;box-shadow:inset 0px 40px 30px red;padding:5px 13px 5px 13px;color:white'>Compte Déconnecté avce succés</p>  
 
   
<body>  <br>
<div class='page'>
	   
Vous serez automatiquement redirigé vers la page de connexion .<br>
    Si votre navigateur ne vous redirige pas en 3 secondes, ou si Vous 
    ne souhaitez pas attendre
    <a style='text-decoration:none'href=' http://127.0.0.127/Mydminpanel/login.php'>Cliquez ici</a>. 
</div>
</body> 
</html>
   "; 
  exit();
?>
<?php } ?>