<?php
	session_start();

	include "database.php";
	include "retrieve.php";
	include "log_function.php";
	include "logic.php";
	
	echo $_SESSION['username'];

?>

<DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta name"viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="pageStyle.css">

                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Sora:wght@800&display=swap" rel="stylesheet">

                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">

                <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
                <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
                <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
                <link rel="manifest" href="site.webmanifest">

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

                <title>Recycling Database Interface</title>
        </head>
        <body>
		<!--
                
                <div id="menu">
                        
                        <div id="logo" class="LogoClass">

                        </div>

                        
                        <div id="recycle" class="menuBox"><span>Recycle &#9660;</span>
                        </div>

                        
                        <div id="search" class = "menuBox"><span>Search</span>
                        
 
                        <script type="text/javascript">
                                document.getElementById("admin").onclick = function() {
                                        window.location.replace("login.php");
                                };

                                document.getElementById("logo").onclick = function() {
                                        window.location.replace("index.php");
                                };

                                $(document).ready(function() {
                                        $('.menuBox').mousedown(function(e) {
                                                $(this).css("color", "#000000");
                                        });
                                });

                                $(document).ready(function() {
                                        $('.menuBox').mouseup(function(e) {
                                                $(this).css("color", "#EDF5E1");
                                        });
                                });
                        </script>
			</div>			

                        
                        <div id="contact" class = "menuBox"><span>Contact</span>
                                <img src="ContactInfo.png" alt="A contact logo" id="contactinfo" class="menuImage">
			</div>

			 
                        <div id="admin" class = "menuBox">
		 		<span>Log In</span> <img src="LogIn.png" alt="A log-in logo" id="login" class="menuImage">
			</div>
				
		</div>
		-->
                <div id="menu">
                               <div id="logo" class="LogoClass">

                        </div>

                        <div id="recycle" class="menuBox"><span>Recycle &#9660;</span>
                        </div>

                        <div id="search" class = "menuBox"><span>Search</span>
                        </div>

                        <div id="admin" class = "menuBox">
                                <span>Log In</span> <img src="LogIn.png" alt="A log-in logo" id="login" class="menuImage" id="logImg">
                        <script type="text/javascript">
                                document.getElementById("admin").onclick = function() {
                                        window.location.replace("login.php");
                                };

                                document.getElementById("logo").onclick = function() {
                                        window.location.replace("index.php");
				};

				document.getElementById("search").onclick = function() {
					window.location.replace("index.php");
                                        let e = document.getElementById("searchbar");
                                        e.scrollIntoView({
                                                block: 'center',
                                                behavior: 'smooth',
                                                inline: 'center'
					});
                                };

                                $(document).ready(function() {
                                        $('.menuBox').mousedown(function(e) {
                                                $(this).css("color", "#000000");
                                        });
                                });

                                $(document).ready(function() {
                                        $('.menuBox').mouseup(function(e) {
                                                $(this).css("color", "#EDF5E1");
                                        });
                                });
                        </script>
                        </div>

                        <div id="contact" class = "menuBox"><span>Contact</span>
                                <img src="ContactInfo.png" alt="A contact logo" id="contactinfo" class="menuImage">
                        </div>

                </div>
		<h1 id="logheader"> Log In </h1>
		<div id="logindiv">
			<form id="loginform" method="POST" autocomplete="off">
				<input type="text" placeholder="Username: " name="username" id="user" class="logfield" autocomplete="off" required><br>
				<input type="password" placeholder="Password: " name="password" id="pass" class="logfield" autocomplete="off" required><br>
				<button type="submit" name="login" id="logsub">Log In</button>
			</form>
		</div>
	</body>
</html>

