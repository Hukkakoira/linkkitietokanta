 <?php
 

  $yhteys =  mysqli_connect("localhost","root","")
  or die("Kantaan ei saatu yhteytt&auml;: ".mysqli_error());
  mysqli_select_db($yhteys, "linkki")                                 
  or die("Kantaa ei saatu valittua: ".mysqli_error());   
  
  $sivunotsikko;
  $teksti;
  
  $sql_lauseke = 'INSERT into linkit values(' .
  "\"{$_POST['id']}\", " .
  "\"{$_POST['linkki']}\", " .
  "\"{$_POST['avainsana']}\", " .
  "\"{$_POST['otsikko']}\", " .
  "\"{$_POST['kuvaus']}\");";
  
  mysqli_query ($yhteys, $sql_lauseke);
 
  ?>
  <html>
  <head>
  <title>Tallennettu</title>
  </head>
  <body bgcolor="#ffffff">
  <H2>Tallennettu</H2>

  <p>
  <a href="index.php">Takaisin etusivulle</A>
  </body>
  </html>




