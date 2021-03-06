
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
      width:60%;
      border-radius:10px;
      box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
    }
    input[type=text]:focus {
      border-color: #000;
    }
    input[type=password] {
      padding:10px;
      border:0;
      width:60%;
      border-radius:10px;
      box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
    }
    input[type=password]:focus {
      border-color: #000;
    }
    button{
      padding:10px;
      border:0;
      border-radius:10px;
      background-color:skyblue;
    }
    button:hover{
      background-color:CornflowerBlue;
      color:white;
    }

  </style>
</head>
<body style="background: linear-gradient(#ffe6ee, #d4d4f7); background-attachment:fixed; font-family: Georgia, serif;">
<br><br><br>

<div class="container" style="margin-left: 25%;background: linear-gradient(#ffecd9, #fad4af); width:50%; border-radius:50px; box-shadow:0 0 15px 4px rgba(0,0,0,0.06);">
  <br>
  <h2 style="text-align:center;"class="text-center">Login <i class="material-icons">person</i></h2>
  @if (count($errors) > 0)
    <div class="alert alert-danger" style="width:70%; margin:auto; background: linear-gradient(#fcd3cf, #fcaea7);">
    <br>
    <ul style="list-style-type: circle;">
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
     <br>
    </div>
   @endif

   <br>
  <form action = "/check" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label style="margin-left: 40%; margin-bottom:3%;" class="form-group">Username:</label>
    <input style="margin-left: 17%;"type="text" class="form-control" placeholder="enter username" name="username"><br>
    <br>
    <label style="margin-left: 41%; margin-bottom:3%;">Password:</label>
    <input style="margin-left: 17%;"type="password" class="form-control" placeholder="minimum 6 characters" name="password"><br><br>
    <br>
    <button style="width: 30%; margin-left: 35%;" type="submit"  value = "Login" class="btn btn-primary">Login</button>
  </form>
  <a href="/register"><p style="text-align:center;">Create New Account</p></a>
  <br>
</div>
</body>

</html>
