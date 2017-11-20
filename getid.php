<?php  
       
$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'hhh';
         $db = 'pro1';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';

 
 
	//$id = $_GET['id'];
//mysql_select_db('pro', $conn);
$result = mysqli_query($conn,"SELECT * FROM details ORDER BY ID DESC LIMIT 1");
echo "<br><br>";
echo "<center>";
echo "<table border='1'>
<tr>

      <th>ID</th>
      
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo "</center>";
?>
