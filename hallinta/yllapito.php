 <?php



$yhteys = mysqli_connect("localhost","root","")
or die("Kantaan ei saatu yhteyttä: ".mysqli_error());
mysqli_select_db($yhteys, "linkki")                                 
or die("Kantaa ei saatu valittua: ".mysqli_error());   

$kysely = ("select id, linkki,avainsana,otsikko,kuvaus
from linkit");

$sql = mysqli_query($yhteys, $kysely);


print ("<div class='ottelut'><table>");

while ($rivi = mysqli_fetch_array($sql))

{

print("<tr><td>");

print(" {$rivi["id"]}</td><td> - </td>{$rivi["linkki"]}</td><td> - </td><td>{$rivi["avainsana"]}</td><td> {$rivi["otsikko"]} - {$rivi["kuvaus"]}");

print("</td></tr>");

}		  

print("</table></div>");

 mysqli_close($yhteys);

 ?>
 <html>
 <head>
 <title>Linkkitietokannan yll?pitolomake</title>
 </head>
 <body bgcolor="#ffffff">
 <H2>Linkin poisto</H2>
 <form method=post action="paivita.php">
<input type=text name=nro>
  <input type=submit name="toiminto" value="Poista">
 </form>
 </body>
 </html>