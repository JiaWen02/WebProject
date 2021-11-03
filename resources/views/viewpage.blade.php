<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Colleges</title>
    <style>
        body {
            font-family: "Times New Roman", Georgia, Serif;
        }
        h1, h2, h3, h4, h5, h6 {
            letter-spacing: 5px;
            font-family: "Playfair Display";
        }
        #active {
            background-color: #cccccc;
        }
    </style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="/homepage" class="w3-bar-item w3-button"><b>SUNRISE</b></a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/homepage#about" class="w3-bar-item w3-button">About</a>
      <a href="/viewpage" class="w3-bar-item w3-button" id="active">Colleges</a>
      <a href="/updatepage" class="w3-bar-item w3-button">Change Password</a>
      <a href="/delete" onclick="return confirm('Are you sure you want to delete Account?')" class="w3-bar-item w3-button">Delete Account</a>
      <a href="/login" class="w3-bar-item w3-button">LogOut</a>
    </div>
  </div>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

<!-- First Photo Grid-->
<div class="w3-row-padding w3-padding-16 w3-center" id="college" style="margin-top: 50px;">
    <h1 class="w3-center">Healing Sunrise</h1><br>
    <div class="w3-quarter">
      <img src="{{url('/images/sunrise2.jpg')}}" alt="hong kong" style="width:100%">
      <h4>Hong Kong</h4>
    </div>
    <div class="w3-quarter">
      <img src="{{url('/images/sunrise3.jpg')}}" alt="taiwan" style="width:100%">
      <h4>Taiwan</h4>
    </div>
    <div class="w3-quarter">
      <img src="{{url('/images/sunrise4.jpg')}}" alt="us state" style="width:100%">
      <h4>US State</h4>
    </div>
    <div class="w3-quarter">
      <img src="{{url('/images/sunrise5.jpg')}}" alt="japan" style="width:100%">
      <h4>Japan</h4>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="{{url('/images/sunrise6.jpg')}}" alt="redang" style="width:100%">
      <h4>Redang Island</h4>
    </div>
    <div class="w3-quarter">
      <img src="{{url('/images/sunrise7.jpg')}}" alt="seoul" style="width:100%">
      <h4>Seoul</h4>
    </div>
    <div class="w3-quarter">
      <img src="{{url('/images/sunrise8.jpg')}}" alt="new zealand" style="width:100%; height:170px;">
      <h4>New Zealand</h4>
    </div>
    <div class="w3-quarter">
      <img src="{{url('/images/sunrise9.jpg')}}" alt="australia" style="width:100%; height:170px;">
      <h4>Australia</h4>
    </div>
  </div>

<!-- End page content -->
</div><br><br><br><br>

</body>
</html>