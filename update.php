<?php
if(isset($_GET['u_id'])){//we can use any value e.g u_name,u_county
$receivedid=$_GET["u_id"];
$receivedname=$_GET['u_name'];
$receivedcounty=$_GET['u_county'];
$receivedphone=$_GET['u_phone'];
}else{
    // return user back to voters
    header("location:voters.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Voter</title>
</head>
<body>
    <h1 class="text-info">Update Voter</h1>
    <form action="update_handler.php" method="POST">
    <div class="form-group">
        <input type="hidden" name="new_id" value="<?php echo $receivedid  ?>"  class="form-control"  required>
    </div><br>
    <div class="form-group">
        <input type="text" name="new_name" value="<?php echo $receivedname  ?>"  class="form-control"  required>
    </div><br>
    <div class="form-group">
        <input type="text" name="new_county" value="<?php echo $receivedcounty  ?>"  class="form-control"  required>
    </div><br>
    <div class="form-group">
    <input type="tel" name="new_phone" value="<?php echo $receivedphone  ?>"  class="form-control"  required>
</div><br>
<div class="form-group">
        <input type="submit" name="updatebtn" class="btn btn-success" value="Update" required>
    </div>
    </form>
</body>
</html>