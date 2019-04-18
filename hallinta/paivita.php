<?php

$nro = $_REQUEST['nro'] ;
$yhteys = mysqli_connect("localhost","root","")
or die("Kantaan ei saatu yhteyttä: ".mysqli_error());
mysqli_select_db($yhteys, "linkki")                                 
or die("Kantaa ei saatu valittua: ".mysqli_error());   
  
$sql = "DELETE FROM linkit WHERE id=$nro";

if ($yhteys->query($sql) === TRUE) {
    echo "Linkki poistettu";
} else {
    echo "Virhe: " . $yhteys->error;
}

$yhteys->close();

 ?>
 <html>
 <head>
 <title>P&auml;</title>
 </head>
 <body bgcolor="#ffffff">
 <H2>Poista linkki</H2>
 
 <p>
 <a href="index.php">Takaisin etusivulle</A>
 </body>
 </html>
