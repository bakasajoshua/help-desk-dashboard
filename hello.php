<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	
<table border="2" colspan="3" rowspan="2" width="50%">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>gender</th>
		<th>age</th>
</tr>
<?php
$localhost="localhost";                                                             
  $username="root";
  $password="MUGAMBI@123";
  $db="git1";
 $conn=mysqli_connect($localhost,$username,$db);
 if(!$conn)
  {
  print"<br>Database could not found:</br>";  
  }else
  {
    print"<br>database connected successfully</br>";
}
    $sql="SELECT id, name, gender,age";
    $result=$conn->query($sql);
    if($result->num_row > 0)
    {
    	while($row=$result->fetch_assoc())
    	{
    		print"<tr><td>".$row["id"]."</td><td>". $row["name"]."</td><td>". $row["gender"]."</td><td>". $row["age"]."</td></tr>";
    	}
    	print"</table>";
    }
    else{
    	print"0 result";
    }
    $conn->close();
    ?>
</table>
</body>
</html>