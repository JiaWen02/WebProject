<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
</head>
<body style="background: linear-gradient(#ffe6ee, #d4d4f7); background-attachment:fixed;">
<br><br><br>
<div class="container" style="background: #ffe6cc; width:50%;">
  <br>
  <h2 class="text-center">Login</h2>

  @if (count($errors) > 0)
    <div class="alert alert-danger" style="width:70%; margin:auto;">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <br>
  <form action = "/check" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label style="margin-left: 43%; margin-bottom:0%;" class="form-group">Username:</label>
    <input type="text" class="form-control" placeholder="enter username" name="username"><br>
    <label style="margin-left: 44%; margin-bottom:0%;">Password:</label>
    <input type="text" class="form-control" placeholder="minimum 6 characters" name="password"><br><br>
    <button style="width: 30%; margin-left: 35%;" type="submit"  value = "Login" class="btn btn-primary">Login</button>
  </form>
  <a href="/insert"><p style="text-align:center;">Create New Account</p></a>
  <br>
</div>
</body>
</html>