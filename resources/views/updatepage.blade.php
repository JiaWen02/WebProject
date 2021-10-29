
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button active"><b>SUNRISE</b></a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/homepage#about" class="w3-bar-item w3-button">About</a>
      <a href="/viewpage" class="w3-bar-item w3-button">Colleges</a>
      <a href="/updatepage" class="w3-bar-item w3-button">Change Password</a>
      <a href="/delete" onclick="return confirm('Are you sure you want to delete Account?')" class="w3-bar-item w3-button">Delete Account</a>
      <a href="/login" class="w3-bar-item w3-button">LogOut</a>
    </div>
  </div>
</div>
<div class="container" style="margin-left: 25%;background: linear-gradient(#ffecd9, #fad4af); width:50%; border-radius:50px; box-shadow:0 0 15px 4px rgba(0,0,0,0.06);">
  <br>
  <h2 style="text-align:center;"class="text-center">Change Password <i class="material-icons">person</i></h2>
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
<p style="text-align:center; margin-bottom:3%;" class="form-group">Username:</p>
   <p style="text-align:center; margin-bottom:3%;"><b><i><?php echo $_SESSION['username']?></i></b></p>
<br>
  <form action = "/update" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label style="margin-left: 41%; margin-bottom:3%;">Password:</label>
    <input style="margin-left: 17%;"type="password" class="form-control" placeholder="minimum 6 characters" name="password"><br><br>
    <br>

    <label style="margin-left: 35%; margin-bottom:3%;">Confirm Password:</label>
    <input style="margin-left: 17%;"type="password" class="form-control" name="cpassword"><br><br>
    <br>
    <button style="width: 30%; margin-left: 35%;" type="submit"  value = "Submit" class="btn btn-primary"onclick="return confirm('Are you sure you want to change password?')">Submit</button>
  </form>
  <br>
</div>
</body>

</html>
