<?php
  
  // Get DB Connection Object
  include_once('dbconnect.php');

  $keyword = $_POST['keyword'];

  // Prepare Query
  $sql = "SELECT *  
          FROM `contact` 
          WHERE `name`    LIKE '%".$keyword."%' 
          OR    `mobile`  LIKE '%".$keyword."%'";
  
  // Query/Fetch Data =>  Database
  $result = $conn->query($sql);

  // Checking and Verifying the result
  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $tr  = "<tr>";
      $tr .= "<td>".$row['id']."</td>";
      $tr .= "<td>".$row['name']."</td>";
      $tr .= "<td>".$row['mobile']."</td>";
      $tr .= "<td>"; // id='switch_".$row['id']."'   for='switch_".$row['id']."'
        $tr .= "<div class='custom-control custom-switch'>";
          $tr .=  "<input type='checkbox' class='custom-control-input' id='switch_".$row['id']."' ".($row['status']?'checked':'')." >";
          $tr .=  "<label class='custom-control-label' for='switch_".$row['id']."' >".(($row['status']) ? 'Active' : 'Inactive')."</label>";
        $tr .=  "</div>";
      $tr .= "</td>";
      $tr .= '<td>
                <a href="update_contact.php?id='.$row['id'].'&name='.$row['name'].'&mobile='.$row['mobile'].'" class="btn btn-primary a-btn-slide-text">
                <i class="fas fa-edit"></i>
                    <span class="d-none"><strong>Edit</strong></span>            
                </a>
                <a href="deleteContactData.php?id='.$row['id'].'" class="btn btn-danger a-btn-slide-text">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    <span class="d-none"><strong>Delete</strong></span>            
                </a>
              </td>';
      $tr .= "</tr>";
      echo $tr;
    }
  }else{
    echo "
          <tr class='table-danger text-dark'>
            <td class='text-center' colspan='5'><b>Search with different criteria.</b></td>
          </tr>    
    ";
  }