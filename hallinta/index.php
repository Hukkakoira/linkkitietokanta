<html>
<head>
<title>Linkkitietokannan yll&auml;pito</title>
</head>
<body bgcolor="#ffffff">
<H2>Linkkitietokannan yll&auml;pito</H2>
<?php

$yhteys = mysqli_connect("localhost","root","")
or die("Kantaan ei saatu yhteytt&auml;: ".mysqli_error());
mysqli_select_db($yhteys, "linkki")                                 
or die("Kantaa ei saatu valittua: ".mysqli_error());   

/* Selvitet??n montako linkki? kannassa on t?ll? hetkell? */
$kysely = "select count(*) from linkit";
$sql = mysqli_query($yhteys, $kysely);



  while ($sisalto = mysqli_fetch_array($sql)){
   print "Tietokannassa on t&auml;ll&auml; hetkell&auml; " . $sisalto[0] . " linkki&auml;<P>";
}

?>
<A HREF="listaa.php">Listaa tallennetut linkit</A><BR>
<A HREF="yllapito.php">Poista linkki</A><BR>
<A HREF="tallenna.php">Tallenna uusi linkki</A>
</body>
</html>


