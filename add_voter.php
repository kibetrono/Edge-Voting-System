<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/assets/css/index.css">
    <title>Voter System</title>
</head>
<body>
    <h1 class="text-info text-center">Add Voters Here</h1>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="add_voter_handler.php" method="POST">
<br>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your name" required>
                </div>
<br>

                <div class="form-group">
                    <input type="number" name="id_number" class="form-control" placeholder="Id number" required>
                </div>
<br>

                <div class="form-group">
               <select class="form-control" name="county" id="">
                   <option value="">Select County</option>
                   <option value="Nairobi">Nairobi</option>
                   <option value="Nakuru">Nakuru</option>
                   <option value="Mombasa">Mombasa</option>
                   <option value="Kisumu">Kisumu</option>
               </select>
            </div>
<br>
            <div class="form-group">
               <select class="form-control" name="gender" id="">
                   <option value="">Select gender</option>
                   <option value="Male">Male</option>
                   <option value="Female">Female</option>
                   <option value="Other">Other</option>
               </select>
            </div>
<br>

            <div class="form-group">
                <input class="form-control" name="phone" type="text" placeholder="Voter phone number" required>
<br>
            </div>
<br>

            <div class="form-group">
                <input type="submit" class="btn btn-success btn-lg" name="vote" value="Add" required>
                <a href="voters.php">View Register Voters</a>
            </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>
</html>