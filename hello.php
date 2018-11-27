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
            /***** Mugambi Server Credentials ****/
            // $localhost="localhost";                                                             
            // $username="root";
            // $password="MUGAMBI@123"; 
            /***** Mugambi Server Credentials ****/
            /**** Bakasa Server Credentials ****/
            $localhost="127.0.0.1";                                                             
            $username="homestead";
            $password="secret";
            /**** Bakasa Server Credentials ****/
            $db="git1";

            // $conn=mysqli_connect($localhost,$username,$db); // The one submitted
            $conn=mysqli_connect($localhost,$username,$password,$db); // The correct way 

            if(!$conn) {
                print"<br>Database could not found:</br>";  
            } else {
                print"<br>database connected successfully</br>";
            }

            // $sql="SELECT id, name, gender,age"; // The query submitted
            $sql="SELECT id, name, gender,age from students"; // The correct query

            // $result=$conn->query($sql); // The selection submitted
            $result=mysqli_query($conn,$sql); // This is how mysqli query is done

            // if($result->num_row > 0) // The if statement submitted with the error
            if(mysqli_num_rows($result) > 0) // This is how you do a num_rows on mysqli
            {
                while($row=$result->fetch_assoc()) {
                    print"<tr><td>".$row["id"]."</td><td>". $row["name"]."</td><td>". $row["gender"]."</td><td>". $row["age"]."</td></tr>";
                }
                print"</table>";
            } else {
                print"0 result";
            }
            $conn->close();
            ?>
        </table>
    </body>
</html>