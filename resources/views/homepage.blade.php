<!DOCTYPE html>
<html>
<title>homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  body {
    font-family: "Times New Roman", Georgia, Serif;
  }
  h1, h2, h3, h4, h5, h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
  }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button active"><b>SUNRISE</b></a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/homepage#about" class="w3-bar-item w3-button">About</a>
      <a href="/viewpage" class="w3-bar-item w3-button">Colleges</a>
      <a href="/updatepage" class="w3-bar-item w3-button">Change Password</a>
      <a href="/delete" onclick="return confirm('Are you sure you want to delete Account?')"class="w3-bar-item w3-button">Delete Account</a>
      <a href="/login" class="w3-bar-item w3-button">LogOut</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img src="{{url('/images/sunrise.jpg')}}" alt="sunrise" width="1600" height="700">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge" style="color:white;"><b>My Portfolio</b></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about" style="margin-bottom:0px;">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="{{url('/images/sunrise1.jpg')}}" class="w3-round w3-image w3-opacity-min" alt="about me" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large" style="margin-bottom:0px;">
      <h1 class="w3-center">About Me</h1><hr>
      <h5 class="w3-center">Follow The Sunrise</h5>
      <p class="w3-large" style="text-align:center;">Capture the sunrise. Heading in the direction of light.<br> Chase the light and become the light.</p>
    </div>
  </div>

<!-- End page content -->
</div><br><br><br><br>

</body>
</html>
