<?php
  // Get DB Connection Object
  include_once('dbconnect.php');

  // Prepare Query
  $sql = "SELECT * FROM `contact`";
  
  // Query/Fetch Data =>  Database
  $result = $conn->query($sql);

  // Checking and Verifying the result
  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo "<tr>
              <td>".$row['id']."</td>
              <td>".$row['name']."</td>
              <td>".$row['mobile']."</td>
            </tr>";
    }
  }else{
    echo "
          <tr>
            <td colspan='3'>No Data Available</td>
          </tr>    
    ";
  }