<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/assets/css/index.css">
    
    <title>Registered Voters</title>
</head>
<body>
    <h1 class="text-info text-center">Registered Voters</h1>
    <table class="table table-dark table-striped table-hover">
        <tr>
            <th>Name</th>
            <th>Id Number</th>
            <th>County</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Update </th>
            <th>Delete </th>
        </tr>
        <?php
    require_once 'connect.php';

    $sql="SELECT * FROM voters ";

    $voters=mysqli_query($conn,$sql);


    
// loop voters
foreach ($voters as $voter){

    $votername=$voter["name"];
    $voterid=$voter["id_number"];
    $votercounty=$voter["county"];
    $votergender=$voter["gender"];
    $voterphone=$voter["phone"];


    echo "
    <tr>
    
    <td>$votername</td>
    <td>$voterid</td>
    <td>$votercounty</td>
    <td>$votergender</td>
    <td>$voterphone</td>
 
    <td><a class='btn btn-primary' href=''>Update</a></td>
    <td><a class='btn btn-danger' href='delete.php?v=$voterid'>Delete</a></td>
   
    </tr>
    
    ";
  
}



        ?>

    </table>
</body>
</html>