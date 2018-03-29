<?php
if(isset($_COOKIE["login"])){
	
	?> 
	  <nav class='topnav main-nav main-nav-scroll navtop' id='myTopnav' >
         <li>
            <div ><div id='userbox' style='float: right; '>
	 
		
             </div>
            <div class='table'style='background-color:#E91E63'> 
 
 <li class='menu-ind-top-left menu-ind ' style='padding-top:5px'>
                <a href='index.php'>Acceuil</a>  
            </li>  
  
   <li class='menu-ind-top-left menu-ind' style='padding-top:5px'>
                   <a href='contact.php'>Contactez Nous</a>
            
            
			 <li class='menu-ind-top-right animated flip XD'style='position:relative;float:right;text-decoration:none;text-transform:none;padding-top:0px'> <a href='logout.php'></a>
             </li>
			  <a style='padding: 0' href='./login.php'>
  <div  dir='#' class=' nav-icon' style='display: inline'>
   <li class='menu-ind-top-left animated flip XD'style='position:relative;float:right;text-decoration:none;text-transform:none;padding-top:0px'> <img class='menu-ind-top-left animate jello' style='padding-top:3px;height: auto;width:35px;float:right' src='images/user-icon.png'><a href='profile.php'> Mon Compte </a>
             </li>
  </div> </a> 
</div>
			
        </div>
  </li>
</nav> 
<header class='header1'>
         <h1 class='animated rubberBand' ><a href='index.php'><img alt='' src='images/logo (1)'style='margin-top: 0!important;height:120px;' ></a></h1>
       </header> 
         <nav class='navtop '>
         <div style='margin-top:-10px;float: right;display: inline'>  
		   <a   href='cart.php'>
		    <img class='hover-pulse animated jello' style='height: auto;width:40px;float: right;' src='images/shopping-cart-white.png'>
		   </a>
		  </div>
	
        
                <li class='menu-ind-top animated rubberBand menu-ind'>
				<a href='javascript:void(0);' style='font-size: 3em;margin-left:0px' class='icon' onclick='myFunction();'> </a> 
                     <ul style='font-size:10px;z-index: 999999;text-align:center!important;background-color:transparent!important;height: 420px' class='submenu-ind' >
                  <li  class='submenu last  XD'><a  style='width: 130px;'href='search.php?categorie=ACCESSOIRES'>ACCESSOIRES</a> </li><br>
                    <li class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=CHAUSSURES'>CHAUSSURES</a> </li><br>
                    <li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=CHEMISE'>CHEMISE </a> </li><br>
                    <li class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=GRANDES TAILLES'>GRANDES TAILLES </a> </li><br>
                    <li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=JEANS'>JEANS</a> </li><br>
                    <li class='submenu last XD'><a style='width: 130px;' href='search.php?categorie=PANTACOURT'>PANTACOURT</a> </li><br>
                    <li class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=Bandeaux'>Bandeaux</a> </li><br>
					<li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=SOUS-VÊTEMENTS'>SOUS-VÊTEMENTS</a> </li><br>
                    <li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=Bijoux & Montres'>Bijoux & Montres</a> </li><br>
                   <li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=Sacs à dos'>Sacs à dos</a> </li><br>
                    <li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=Chapeaux'>Chapeaux</a> </li><br> 
          </ul>
            </li>
    
       <div class='table'>
         
         <ul> 
          <li class='menu-ind'>
                <a href='search.php?tag=new'>A la une !</a> 
            </li>
             <li class='menu-ind'>
                <a href='search.php?tag=pp'>Petit Prix</a> 
            </li>
              <li class='menu-ind'>
                <a href='search.php?tag=100'>Top 100</a> 
            </li>
             <li class='menu-ind'>
                <a href='search.php?type=Homme'>Homme</a>
				<ul class='submenu-ind'>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=ACCESSOIRES'>ACCESSOIRES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=CHAUSSURES'>CHAUSSURES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=CHEMISE'>CHEMISE </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=GRANDES TAILLES'>GRANDES TAILLES </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=JEANS'>JEANS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=PANTACOURT'>PANTACOURT</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Bandeaux'>Bandeaux</a> </li><br>
					<li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=SOUS-VÊTEMENTS'>SOUS-VÊTEMENTS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Bijoux & Montres'>Bijoux & Montres</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Sacs à dos'>Sacs à dos</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Chapeaux'>Chapeaux</a> </li><br> 
           </ul> 
            </li>
            
            <li class='menu-ind'>
                <a href='search.php?type=Femme'>Femme</a>
                		<ul class='submenu-ind'>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=ACCESSOIRES'>ACCESSOIRES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=CHAUSSURES'>CHAUSSURES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=CHEMISE'>CHEMISE </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=GRANDES TAILLES'>GRANDES TAILLES </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=JEANS'>JEANS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=PANTACOURT'>PANTACOURT</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Bandeaux'>Bandeaux</a> </li><br>
					<li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=SOUS-VÊTEMENTS'>SOUS-VÊTEMENTS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Bijoux & Montres'>Bijoux & Montres</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Sacs à dos'>Sacs à dos</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Chapeaux'>Chapeaux</a> </li><br> 
           </ul> 
            </li>
            <li class='menu-ind'>
                <a href='search.php?type=Fnfant'>Enfants & Bébé</a>
                <ul class='submenu-ind'>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=ACCESSOIRES'>ACCESSOIRES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=CHAUSSURES'>CHAUSSURES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=CHEMISE'>CHEMISE </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=GRANDES TAILLES'>GRANDES TAILLES </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=JEANS'>JEANS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;' href='search.php?categorie=PANTACOURT'>PANTACOURT</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=Bandeaux'>Bandeaux</a> </li><br>
					<li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=SOUS-VÊTEMENTS'>SOUS-VÊTEMENTS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=Bijoux & Montres'>Bijoux & Montres</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=Sacs à dos'>Sacs à dos</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=Chapeaux'>Chapeaux</a> </li><br> 
           </ul>  
            </li>
	   </div>
         </ul>
			
        
        </div>
        
       </nav>  
<?php }
else{
      ?>     
<div class='fixed' style='display:block!important;'>


        <header class=' header1'>
<div   style='box-shadow: inset 0px 0px 0px white;height: 56px!important;' id='myTopnav'> 
<div  style='float: right!important;margin-top:-18px;margin-right: 3px' >
  <a style='padding: 0' href='./login.php'>
  <div  dir='#' class='nav-icon'>
   <img class=' animate jello' style='height: auto;width:40px;' src='images/user-icon.png'>
  </div> </a>
</div>      
<div style='float: right!important;margin-top:-15px;padding-left: 0px' >
  <a style='padding: 0' href='#'>
  <div  dir='#' class=' nav-icon'>
   <img class='animate jello' style='height: auto;width:30px;' src='images/twitter-icon.png'>
  </div> </a>
</div>
<div  style='float: right!important;margin-top:-15px; ' >
  <a style='padding: 0' href='#'>
  <div  dir='#' class=' nav-icon'>
   <img class='animate jello' style='height: auto;width:30px;' src='images/instagram-icon.png'>
  </div> </a>
</div>
<div  style='float: right!important;margin-top:-15px; ' >
  <a style='padding: 0' href='#'>
  <div  dir='#' class=' nav-icon'>
   <img class='animate jello' style='height: auto;width:30px;' src='images/facebook.png'>
  </div> </a>
</div>
</div>
        <h1 class='animated rubberBand' ><a href='index.php'><img alt='' src='images/logo (1)'style='margin-top: -40px!important;height:100px;' ></a></h1>
        </header>    
           <nav class='navtop '>
         <div style='margin-top:-10px;float: right;display: inline'>  
		   <a   href='cart.php'>
		    <img class='hover-pulse animated jello' style='height: auto;width:40px;float: right;' src='images/shopping-cart-white.png'>
		   </a>
		  </div>
	
        
                <li class='menu-ind-top animated rubberBand menu-ind'>
				<a href='javascript:void(0);' style='font-size: 3em;margin-left:0px' class='icon' onclick='myFunction();'> </a> 
                     <ul style='font-size:10px;z-index: 999999;text-align:center!important;background-color:transparent!important;height: 420px' class='submenu-ind' >
                  <li  class='submenu last  XD'><a  style='width: 130px;'href='search.php?categorie=ACCESSOIRES'>ACCESSOIRES</a> </li><br>
                    <li class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=CHAUSSURES'>CHAUSSURES</a> </li><br>
                    <li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=CHEMISE'>CHEMISE </a> </li><br>
                    <li class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=GRANDES TAILLES'>GRANDES TAILLES </a> </li><br>
                    <li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=JEANS'>JEANS</a> </li><br>
                    <li class='submenu last XD'><a style='width: 130px;' href='search.php?categorie=PANTACOURT'>PANTACOURT</a> </li><br>
                    <li class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=Bandeaux'>Bandeaux</a> </li><br>
					<li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=SOUS-VÊTEMENTS'>SOUS-VÊTEMENTS</a> </li><br>
                    <li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=Bijoux & Montres'>Bijoux & Montres</a> </li><br>
                   <li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=Sacs à dos'>Sacs à dos</a> </li><br>
                    <li  class='submenu last XD'><a  style='width: 130px;'href='search.php?categorie=Chapeaux'>Chapeaux</a> </li><br> 
          </ul>
            </li>
    
       <div class='table'>
         
         <ul> 
          <li class='menu-ind'>
                <a href='search.php?tag=new'>A la une !</a> 
            </li>
             <li class='menu-ind'>
                <a href='search.php?tag=pp'>Petit Prix</a> 
            </li>
              <li class='menu-ind'>
                <a href='search.php?tag=100'>Top 100</a> 
            </li>
             <li class='menu-ind'>
                <a href='search.php?type=Homme'>Homme</a>
				<ul class='submenu-ind'>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=ACCESSOIRES'>ACCESSOIRES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=CHAUSSURES'>CHAUSSURES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=CHEMISE'>CHEMISE </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=GRANDES TAILLES'>GRANDES TAILLES </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=JEANS'>JEANS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=PANTACOURT'>PANTACOURT</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Bandeaux'>Bandeaux</a> </li><br>
					<li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=SOUS-VÊTEMENTS'>SOUS-VÊTEMENTS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Bijoux & Montres'>Bijoux & Montres</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Sacs à dos'>Sacs à dos</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Chapeaux'>Chapeaux</a> </li><br> 
           </ul> 
            </li>
            
            <li class='menu-ind'>
                <a href='search.php?type=Femme'>Femme</a>
                		<ul class='submenu-ind'>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=ACCESSOIRES'>ACCESSOIRES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=CHAUSSURES'>CHAUSSURES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=CHEMISE'>CHEMISE </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=GRANDES TAILLES'>GRANDES TAILLES </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=JEANS'>JEANS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=PANTACOURT'>PANTACOURT</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Bandeaux'>Bandeaux</a> </li><br>
					<li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=SOUS-VÊTEMENTS'>SOUS-VÊTEMENTS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Bijoux & Montres'>Bijoux & Montres</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Sacs à dos'>Sacs à dos</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?type=homme&categorie=Chapeaux'>Chapeaux</a> </li><br> 
           </ul> 
            </li>
            <li class='menu-ind'>
                <a href='search.php?type=Fnfant'>Enfants & Bébé</a>
                <ul class='submenu-ind'>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=ACCESSOIRES'>ACCESSOIRES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=CHAUSSURES'>CHAUSSURES</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=CHEMISE'>CHEMISE </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=GRANDES TAILLES'>GRANDES TAILLES </a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=JEANS'>JEANS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;' href='search.php?categorie=PANTACOURT'>PANTACOURT</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=Bandeaux'>Bandeaux</a> </li><br>
					<li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=SOUS-VÊTEMENTS'>SOUS-VÊTEMENTS</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=Bijoux & Montres'>Bijoux & Montres</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=Sacs à dos'>Sacs à dos</a> </li><br>
                    <li class='submenu last  '><a  style='font-size:10px;width: 100%;'href='search.php?categorie=Chapeaux'>Chapeaux</a> </li><br> 
           </ul>  
            </li>
	   </div>
         </ul>
			
        
        </div>
        
       </nav> </div>
<?php    }
?>