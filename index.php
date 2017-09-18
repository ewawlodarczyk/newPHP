<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <title>Buddyzm diamentowej drogi</title>
   <!-- jakiś kod do pobierania zawratosci head.php -->
		
		<?php include "head.php"; ?> 
    
    
</head>

<body>

    <div id="main">
    
    
        <div id="header">
        
            <!-- jakiś kod do pobierania zawratosci header.php -->
				
				<?php include "header.php"; ?>
        
        </div>
        <div id="sidebar">
        
            <!-- jakiś kod do pobierania zawratosci menu.php -->
				
				<?php include "menu.php"; ?>
            
        
        </div>
        <div id="content">
            
            <!-- jakiś kod do pobierania zawratosci home.php lub innych -->
				
				<?php 

					include // komenda załączająca plik

					( 

						isset( $_GET['site'] ) // jeśli w adresie istnieje parametr site

						? // gdy istnieje

						$_GET['site'] // użyj parametru

						: // gdy nie istnieje

						"home" // użyj nazwy home

					) 

					. // łączenie tego co wyżej z tym co poniżej

					".php"; // dodanie rozszerzenia aby wyszedł adres np. js.php lub css.php

				?>
        
        </div>
        <div id="footer">
        
           <!-- jakiś kod do pobierania zawratosci footer.php -->
				
				<?php include "footer.php"; ?> 
        
        </div>
        <div class="fixed">
            <!-- jakiś kod do pobierania zawratosci cookies.php -->
				
				<?php include "cookies.php"; ?>
       
    </div>
</body>
</html>
