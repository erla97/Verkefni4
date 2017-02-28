<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <title>Verkefni 4</title>
</head>
<body>
<?php 
	include "dbcon.php";
	include "query.php";
 ?>
<table border="1">
    <tr>
	<th>Nafn á mynd:</th>
	<th>Slóð:</th>
	</tr>
	<?php 
		# birtir töflu með player og score
		foreach ($myndir as $entry) {
			echo '<tr><td>'.$entry[0].'</td><td>'.$entry[1].'</td></tr>';
		}
	 ?>
</table>
</body>
</html>