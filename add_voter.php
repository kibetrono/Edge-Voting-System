<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter System</title>
</head>
<body>
    <h1 class="text-info text center">Add Voters Here</h1>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="add_voter_handler.php">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your name">
                </div>
                <div class="form-group">
                    <input type="number" name="id_number" class="form-control" placeholder="Id number">
                </div>
                <div class="form-group">
               <select name="county" id="">
                   <option value="">Select County</option>
                   <option value="">Nairobi</option>
                   <option value="">Nakuru</option>
                   <option value="">Mombasa</option>
                   <option value="">Kisumu</option>
               </select>
            </div>

            <div class="form-group">
               <select name="gender" id="">
                   <option value="">Select gender</option>
                   <option value="">Male</option>
                   <option value="">Female</option>
                   <option value="">Other</option>
               </select>
            </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>
</html>