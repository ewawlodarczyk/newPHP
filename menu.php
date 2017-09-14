<?php 

	$site = isset( $_GET['site'] ) ? $_GET['site'] : 'home';

	// za pomocą isset sprawdzam czy parametr site istnieje, $_GET pobiera wartość paramentru site, parametr site występuje w adresie strony i za jego pomocą zmieniam content strony

	// zapis powyższy oznacza, że jeśli site istnieje to wpisz go do zmiennej $site, a jeśli nie to do zmiennej $site wpisz słowo: home

	// poniżej komenda echo oznacza wyświetl wynik

	// w menu otwieram kod php aby sprawzić czy zmienna $site ustawiona wyżej jest równa home, lub c lub java lub js lub php lub css lub html i jeśli tak to za pomocą echo wyświetlam w kodzie html klasę active a jeśli nie to nie wyświetlam nic (pusty znak)
	
?>

<a class=" <?php echo $site == 'home' ? 'active' : '';  ?> "     href="index.php">Home</a>
<a class=" <?php echo $site == 'buddyzm' ? 'active' : '';  ?> "   href="index.php?site=buddyzm">Buddyzm</a>
<a class=" <?php echo $site == 'medytacja' ? 'active' : '';  ?> "href="index.php?site=medytacja">Medytacja</a>
<a class=" <?php echo $site == 'osrodek' ? 'active' : '';  ?> "href="index.php?site=osrodek">Ośrodek</a>
<a class=" <?php echo $site == 'wydarzenia' ? 'active' : '';  ?> "href="index.php?site=wydarzenia">Wydarzenia</a>
<a class=" <?php echo $site == 'wyklady' ? 'active' : '';  ?> "href="index.php?site=wyklady">Wykłady</a>
<a class=" <?php echo $site == 'kontakt' ? 'active' : '';  ?> "href="index.php?site=kontakt">Kontakt</a>

<!--
            <a href="index.php">Home</a>
            <a href="index.php?site=buddyzm">Buddyzm</a>
            <a href="index.php?site=medytacja">Medytacja</a>
            <a href="index.php?site=osrodek">Ośrodek</a>
            <a href="index.php?site=wydarzenia">Wydarzenia</a>
            <a href="index.php?site=wyklady">Wykłady</a>
            <a href="index.php?site=kontakt">Kontakt</a>
-->