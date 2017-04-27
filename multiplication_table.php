<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Challenge: using loops</title>
</head>
<body>
<h1>Multiplication Table</h1>
<table>
<?php
//Create first row of table head
echo '<tr>';
echo '<th>&nbsp;</th>';
for($col = 1; $col <= 12; $col++) :
echo "<th>$col</th>";
endfor;
echo '</tr>';
//create remaining rows
for ($row= 1, $col= 1; $row <= 12; $row++) :
	echo '<tr>';
// first cell is a table header
if ($col == 1){
	echo "<td>$row</td>";
}
while ($col <=12) :
	echo '<td>'.$row * $col++.'</td>';
endwhile;
echo '</tr>';
// reset $col at the end of each row
$col = 1;
endfor;
?>
</table>
</body>
</html>