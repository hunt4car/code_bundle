<?php  //below sptis out user info
$sql = "SELECT * FROM users";
            $result = $dbc->query($sql);
            if ($result->num_rows > 0) {
            $i=1;
            echo "<table width='600'>
                <tr>
                    <th>ID</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                </tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>".$row["user_id"]."</td>";
                    echo "<td>".$row["user_firstname"]."</td>";
                    echo "<td>".$row["user_lastname"]."</td>";
                    echo "<td>".$row["user_email"]."</td>";
                echo "</tr>";
                }//end while
            echo "</table>";
            $i++;
            } else {
            echo "0 results found in user database!";
            }// end if else

?>