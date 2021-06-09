<?php
include("conex.php");
Conectarse();

?>

<html>
<head>
<title>Ejemplo de PHP</title>
</head>
<body>
<hr>

<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
  <TR>
    <TD>&nbsp;<B>Nombre</B></TD> 
  </TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("
  <tr>
    <td>&nbsp;%s</td> 
  </tr>", 
       $row["nombre"]
	   
	   );
}

?>
</table>
</body>
</html>

<?php
	$sql = "
	INSERT INTO registro 
	(
	nombre
	) 
	VALUES (
	'John'
	)";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>