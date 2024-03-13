<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Background Video with Transparent Overlay Card</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  <style>
    /* Set height and position for video background */
    .video-container {
      position: relative;
      height: 100vh;
      overflow: hidden;
      margin-top: 90px;
    }

    /* Style the video element */
    #video-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 60%;
      object-fit: cover;
    }

    /* Style the overlay card */
    .overlay-card {
      position: absolute;
      top: 31%;
      left: 20%;
      transform: translate(-50%, -50%);
      max-width: 400px; /* Adjust as per your requirement */
      padding: 20px;
      background-color: transparent; /* Set background color with alpha value for transparency */
      border-radius: 10px;
/*   
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); */
    }
    
        /*/////////////////////////////////////////////////////*/
        .overlay-card2{
      position: absolute;
      top: 71%;
      left: 20%;
      transform: translate(-50%, -50%);
      max-width: 400px; /* Adjust as per your requirement */
      padding: 20px;
      background-color: transparent; /* Set background color with alpha value for transparency */
      border-radius: 10px;
/*   
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); */
    }
    .overlay-card3{
      position: absolute;
      top: 71%;
      left: 51%;
      transform: translate(-50%, -50%);
      max-width: 400px; /* Adjust as per your requirement */
      padding: 20px;
      background-color: transparent; /* Set background color with alpha value for transparency */
      border-radius: 10px;
/*   
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); */
    }
   

 
  </style>
</head>
<body class="hello">

<div class="video-container">
  <!-- Embed your video using <video> element -->
  <video autoplay muted loop id="video-background">
    <source src="https://cdn.sanity.io/files/qa41whrn/prod/9786423c096b6e0aeb06e5aa424d88cb60f754e8.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <!-- Overlay card -->
  <div class="overlay-card">

    <h1 class="text-light">MB.03 x DEXTER'S LABORATORY</h1>
    <h3  class="text-light" >MELO'S LATEST EXPERIMENT</h3>
    <div class="flex-row justify-content-between t-2 ">
    <button type="button" class="btn btn-light p-2 mr-3">SHOP NOW</button>
    <button type="button" class="btn btn-light p-2">EXPLORE MB SHOES</button>
    </div>
   
  </div>

  <div class="overlay-card2 d-flex flex-row  ">

  <div class="card text-bg-dark">
  <img src="https://cdn.sanity.io/images/qa41whrn/prod/bdce6a06fada515dd4878a89ea129a9278fb1a98-3200x3200.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small>Last updated 3 mins ago</small></p>
  </div>
</div>
 </div>
 <!-- overlay2 end -->
 <!--overlay3 strat  -->
 <div class="overlay-card3 d-flex flex-row  ">

<div class="card text-bg-dark">
<img src="	https://cdn.sanity.io/images/qa41whrn/prod/dc168fd6f5d9a135c03cd43d50bd1607a4f5d293-1536x1536.jpg" class="card-img" alt="...">
<div class="card-img-overlay">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  <p class="card-text"><small>Last updated 3 mins ago</small></p>
</div>
</div>
</div>

 <!-- overlay 3 end -->
 <!-- <div class="overlay-card4 d-flex flex-row  ">

<div class="card text-bg-dark">
<img src="	https://cdn.sanity.io/images/qa41whrn/prod/1f86f6c6a7dc940f1c4793ca464f14dc7c312bab-1536x1536.jpg" class="card-img" alt="...">
<div class="card-img-overlay">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  <p class="card-text"><small>Last updated 3 mins ago</small></p>
</div>
</div>
</div> -->
 <!--  -->
  <!-- ///////////////////////////// -->



</div><!-- video-container -->

<!-- ///////////////////////////////////////////////////////////////////////////// -->

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-LdJwTzn4w+gksNQnOi8VDG49t0f/pm6dbwYWRz3v2LZI+q/pV3L+2IeTLYUk+hKJ" crossorigin="anonymous"></script>
</body>
</html>
