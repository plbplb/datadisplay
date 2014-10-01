	print "Display Equipment edit page for $user<br/>\n";
	print '<form class="form_general" id="main" action="editEquipment.php" method="post">';
	// read all database
	$sql = "SELECT * FROM Equipment";
	$r = sql_query($sql);
	if (! $r)
	{
		print "sql error " . sql_error() . " from $sql";
		exit;
	}
	$j = 0;
	if (sql_count($r) > 0)
	{
		print "<table>";
		print "<tr><th>Equipment</th><th>Description</th><th>Number</th></tr>";
		while ($row = sql_row_keyed($r, $j))
		{
			$equip_name = $row['Equip_name'];
			$equip_description = $row['Equip_description'];
			$equip_count = $row['Equip_count'];
			print "<tr>";
			print "<td>$equip_name</td><td>$equip_description</td><td>$equip_count</td>";
			print "</tr>";
			$j ++;
		}
		print "</table>";
	}
	else 
	{
		print "No equipment in database.<br/>";
	}
	
