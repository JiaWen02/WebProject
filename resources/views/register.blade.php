<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    input[type=text] {
      padding:10px;
      border:0;
      box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
      border-radius:10px;
    }
    input[type=text]:focus {
      background-color: #fcde83;
      border-color: #000;
    }
    button{
      background-color:skyblue;
    }
    button:hover{
      background-color:blue;
    }
  </style>
</head>
<body style="background: linear-gradient(#f2ffcc, #ccffe6); background-attachment:fixed; font-family: Georgia, serif;">
<br><br><br>
<div class="container" style="margin-left: 25%;background: linear-gradient(#fbfcac, #f7ed81); width:50%; border-radius:50px; box-shadow:0 0 15px 4px rgba(0,0,0,0.06);">
  <br>
  <h2 style="text-align:center;"class="text-center">Create New Account <i class="material-icons">person</i></h2>

  @if (count($errors) > 0)
    <div class="alert alert-danger" style="width:70%; margin:auto; background: linear-gradient(#fcd3cf, #fcaea7);">
     <ul style="list-style-type: circle;">
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif
   <br>
  <form action = "/create" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label style="margin-left: 42%; margin-bottom:0%;" class="form-group">Username:</label>
    <input style="margin-left: 32%;"type="text" class="form-control" placeholder="enter username" name="name"><br>
    <br>
    <label style="margin-left: 39%;" margin-bottom:0%;">Contact Number:</label>
    <input style="margin-left: 32%;"type="text" class="form-control" placeholder="01x-xxxxxxx" name="contact"><br>
    <br>
    <label style="margin-left: 45%; margin-bottom:0%;">Email:</label>
    <input style="margin-left: 32%;"type="text" class="form-control" placeholder="enter email" name="email"><br>
    <br>
    <label style="margin-left: 43%; margin-bottom:0%;">Password:</label>
    <input style="margin-left: 32%;"type="text" class="form-control" placeholder="minimum 6 characters" name="password"><br><br>
    <br>
    <button style="width: 30%; margin-left: 35%;" type="submit"  value = "Register" class="btn btn-primary">Register</button>
  </form>
  <a href="/login"><p style="text-align:center;">Already Have An Account</p></a>
  <br>
</div>
<br><br><br>
</body>
</html>