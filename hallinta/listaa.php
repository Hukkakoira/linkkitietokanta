<html>
 <head>
 <title>Linkkitietokanta: linkit aakkosj&auml;rjestyksess&auml;</title>
 </head>
 <body bgcolor="#ffffff">
 <H2>Kaikki linkit aakkosj&auml;rjestyksess&auml;</H2>
 <ul>
 <?php
 $yhteys = mysqli_connect("localhost","root","")
 or die("Kantaan ei saatu yhteyttä: ".mysqli_error());
 mysqli_select_db($yhteys, "linkki")                                 
 or die("Kantaa ei saatu valittua: ".mysqli_error());   

 $kysely = ("select linkki,avainsana,otsikko,kuvaus
 from linkit");

 $sql = mysqli_query($yhteys, $kysely);


print ("<div class='ottelut'><table>");

while ($rivi = mysqli_fetch_array($sql))

{

 print("<tr><td>");

 print(" {$rivi["linkki"]}</td><td> - </td><td>{$rivi["avainsana"]}</td><td> {$rivi["otsikko"]} - {$rivi["kuvaus"]}");

 print("</td></tr>");

}		  

 print("</table></div>");

  mysqli_close($yhteys);

 
 ?>
 </ul>
 <p>
 <a href="index.php">Takaisin etusivulle</A>
 </body>
 </html>
