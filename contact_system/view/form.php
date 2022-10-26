<?php require('../functions/select_function.php') ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>form view</title>
</head>
<body>
    <form method="POST" action="../actions/action_add.php">
        <input type="text" name="full_name" placeholder="enter your full name" id="full_name" required>
        <input type="text" name="phone_number" id="phone_number" placeholder="Enter your phone number" required>
        <input type="submit" name="submit" value="add"> 
    </form>
    <br>
    <h1>Update form</h1>
    <?php if(isset($_GET['pid']))
    {
        $pid=$_GET['pid'];
        $data= select_one($pid);
        $pname=$data['pname'];
        $pphoned=$data['pphoned'];
    } 
    ?>
    <form name="update_form" method="POST" action="../actions/action_update.php">
        <input name="pid" type="text" value="<?php echo $pid; ?>" hidden>
        <input type="text"  name="updated_full_name" value="<?php if(isset($pname)){echo $pname;}  ?>" placeholder="enter your full name" id="full_name" required>
        <input type="text" name="updated_phone_number" value="<?php if(isset($pphoned)){echo $pphoned;} ?>" id="phone_number" placeholder="Enter your phone number" required>
        <input type="submit" name="Update" value="Update"> 
    </form>
    <br>
    <?php
    $rows=select_all();
    echo '<table class="table table-striped table-dark">';
        echo '<thead>';
        echo '    <tr>';
        echo '    <th scope="col">ID</th>';
        echo '    <th scope="col">Name</th>';
        echo '    <th scope="col">Phone number</th>';
        echo ' <th scope="col">Update/Delete</th>';
        echo '    </tr>';
        echo '</thead>';
    foreach( $rows as $row ){
        
            
       
        echo '<tbody>';
        echo '    <tr>';
        echo ' <td>'.$row['pid'].'</td>';
        echo ' <td>'.$row['pname'].'</td>';
        echo ' <td>'.$row['pphoned']. '</td>';
        echo '<td><a href="?pid='.$row['pid'].'">Update</a> <a href="../functions/delete_function.php?pid='.$row['pid'].'" >Delete</a></td>';
        //../functions/select_function.php
        //echo ' <td><input type="button" value="Update" name="Update" onclick="validate('.$row['pid'].')" class="btn btn-primary">  
        //<input type="button" value="Delete" name="Delete" onclick="validate('.$row['pid'].')" class="btn btn-danger">';
        echo '</tr>'; 
       
    }
    echo ' </tbody>
        </table>';
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add to List
</button>
<form name="update_form" method="POST" action="../actions/action_update.php">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <input name="pid" type="text" value="<?php echo $pid; ?>" hidden>
        <input type="text"  name="updated_full_name" value="<?php if(isset($pname)){echo $pname;}  ?>" placeholder="enter your full name" id="full_name" required>
        <input type="text" name="updated_phone_number" value="<?php if(isset($pphoned)){echo $pphoned;} ?>" id="phone_number" placeholder="Enter your phone number" required>
         
    
      </div>
      <div class="modal-footer">
        <button type="button" href="../view/form.php" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" href="../view/form.php" class="btn btn-primary" name="Update" value="Update">
      </div>
    </div>
  </div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
