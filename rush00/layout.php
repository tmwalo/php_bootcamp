<?php

$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title>BOOM!!</title>
	<link rel='stylesheet' type='text/css' href='./style.css' />
</head>
<body >
	<div align= "center">
		<div>
			<h2 style='text-align:center;'><font color="Red">BOOOM!</font></h2>
				<p style='text-align:center;'><a href='./index.php?view_cart=1'><font color="red">View Cart</a><font></p>
		</div>
		<div id='content'>
		</div>
	</div>

	<div class="dropdown home">
                    <span>Home</span>
                    <div class="dropdown-content">
                      <p>Contacts</p>
                      <p>About</p>
                    </div>
                  </div>

        <div class="dropdown sign">
                <span>Sign-in</span>
                <div class="dropdown-content">
                  <p><a href="login.html">Login</a></p>
                  <p><a href="register.html">Sign-up</a></p>
                </div>
			  </div>
			  <table class="contants" cell-spacing="10" align="center" border="0">
                <td></td>
                <td align="center"><h1>Pistols</h1></td>
                <tr>
                  <th><img src="img/glock.jpg" width="200" height="200"></th>
                  <th><img src="img/pistol.jpeg" width="200" height="200"></th>
                  <td><img src="img/Ruger.jpg" width="200" height="200"></td>
                  <td><img src="img/gold.jpeg" width="200" height="200"></td>
                                    
                </tr>
                <tr>
                    <td><img src="img/revolver.jpg" width="200" height="200"></td>
                    <td><img src="img/black.jpeg" width="200" height="200"></td>
                    <td><img src="img/SR.jpg" width="200" height="200"></td>
                    <td><img src="img/wood.jpg" width="200" height="200"></td>
                </tr>
                <td></td>
                <td align="center"><h1>Assault Rifles</h1></td>
                <tr>
                    <td><img src="img/MTAR.jpg" width="200" height="200"></td>
                    <td><img src="img/MP5.jpg" width="200" height="200"></td>
                    <td><img src="img/Carbine.jpg" width="200" height="200"></td>
                    <td><img src="img/uzi.jpg" width="200" height="200"></td>
                </tr>
        </table>
        <table class="contants" cell-spacing="10" align="center" border="0">
                <tr>
                  <th><img src="img/1.jpg" width="200" height="200"></th>
                  <th><img src="img/3.jpeg" width="200" height="200"></th>
                  <td><img src="img/2.png" width="200" height="200"></td>
                  <td><img src="img/4.jpeg" width="200" height="200"></td>
                                    
                </tr>
                <tr>
                    <td><img src="img/sks.jpeg" width="200" height="200"></td>
                    <td><img src="img/5.jpg" width="200" height="200"></td>
                    <td><img src="img/6.jpg" width="200" height="200"></td>
                    <td><img src="img/skcp.jpg" width="200" height="200"></td>
                </tr>
                <td></td>
                <td align="center"><h1>Ammunition</h1></td>
                <tr>
                    <td><img src="img/ammmo.jpg" width="200" height="200"></td>
                    <td><img src="img/ammoR3.jpg" width="200" height="200"></td>
                    <td><img src="img/ammoR2.jpg" width="200" height="200"></td>
                    <td><img src="img/ammoR1.jpg" width="200" height="200"></td>
                </tr>
        </table>
		
HTML;

$footer = <<<HTML

</html>
HTML;

?>
