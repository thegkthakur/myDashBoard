<?php

include 'db_connection.php';
$sql ="SELECT * FROM loginTable";
$result = $conn->query($sql);
echo "<table border='1' >
<tr>
<td align=center> <b>ID</b></td>
<td align=center><b>Name</b></td>
<td align=center><b>Email Address</b></td>
<td align=center><b>Password</b></td></td></tr>";
if ($result->num_rows > 0) {
while($data = $result->fetch_assoc())
{   
    echo "<tr>";
    echo "<td align=center>$data[ID]</td>";
    echo "<td align=center>$data[userName]</td>";
    echo "<td align=center>$data[emailAddress]</td>";
    echo "<td align=center>$data[pwd]</td>";
    echo "</tr>";
}
}
echo "</table>";
?>