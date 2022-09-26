<!DOCTYPE html>
<html>
<head>
  <title>Array Multidimensi </title>
</head>
<body>
<table border="1">
<tr><td>Negara</td><td>Ibukota</td><td>Kode Telpon</td></tr>
<?php
$Negara = array(
		array("Indonesia", "D.K.I Jakarta", "+62"),
		array("Singapura", "Singapura", "+65"),
		array("Malaysia", "Kuala Lumpur", "+60"),
		array("Brunei", "Bandar Seri Begawan", "+673"),
		array("Thailand", "Bangkok", "+66"),
        array("Laos", "Vientiane", "+856"),
        array("Filipina", "manila", "+63"),
        array("Myanmar", "Naypyidaw", "+95"),
		);
			
    
        foreach ($Negara as $each){
        
            echo "<tr>";
            foreach ($each as $ibukota){
                echo "<td>" . $ibukota . "</td>";
            }
            echo "</tr>";
}
?>
</table>
</body>
</html>
