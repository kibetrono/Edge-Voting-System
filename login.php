<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/indexconfirm.css">

</head>
<body>

   <form action="verifyLogin.php" method="POST" autocomplete="off">
   <h1 class="text-info text-center">Login Form</h1>

<input type="email"   name="email" class="form-control" placeholder = "Your email address" required><br>

<input type="password"  name="password" class="form-control" placeholder="Password" required><br>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  <input type="submit"  name ="login" class="btn btn-success" value="Login"><br>

  </div>
  <div class="col-md-4"></div>
</div>

   </form>


</body>
</html>