<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Circular Frames with Images in Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .circular-frame {
      width: calc(15% - 20px); /* 25% width for each circular frame with 20px margin */
      height: auto;
      border-radius: 50%;
      overflow: hidden;
      border: 2px solid rgba(230, 99, 0, 0.6);
    
      margin: 10px; /* Adjust the margin to create gaps between circular frames */
    }

    .circular-frame img {
      width: 100%;
      height: auto;
      display: block;
      background-size: cover
    }

    @media (max-width: 576px) {
      /* For smaller screens, make each circular frame occupy 100% width */
      .circular-frame {
        width: 100%;
        margin: 10px 0; /* Adjust the margin for smaller screens */
      }
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col text-center">
      <div class="d-flex flex-wrap justify-content-center m-4">
        <!-- Circular Frames -->
       
        <div class="circular-frame">
          <img src="https://image.useinsider.com/pumaindia/defaultImageLibrary/Nitro-1709634960.jpeg" alt="Placeholder Image">
         </div>
     
        
        

        <div class="circular-frame">
          <img src="https://image.useinsider.com/pumaindia/defaultImageLibrary/Kids-1709634911.jpeg" alt="Placeholder Image">
        
        </div>
    
    

        <div class="circular-frame">
          <img src="https://image.useinsider.com/pumaindia/defaultImageLibrary/3-1709900898.jpeg" alt="Placeholder Image">
        </div>

        <div class="circular-frame">
          <img src="	https://image.useinsider.com/pumaindia/defaultImageLibrary/Exclusives-1709877142.jpeg" alt="Placeholder Image">
        </div>

        <div class="circular-frame">
          <img src="https://image.useinsider.com/pumaindia/defaultImageLibrary/2-1709900914.jpeg" alt="Placeholder Image">
        </div>
        <!-- End Circular Frames -->
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (optional) -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!-- 
     <style>
     .background-image {
    background-image: url('https://img.freepik.com/free-photo/sports-shoe-competition-abstract-multi-color-background-generated-by-ai_188544-19600.jpg?size=626&ext=jpg&ga=GA1.1.1395880969.1709942400&semt=sph');
    background-size: cover;
    background-repeat: no-repeat;
    width: 100vw; /* 100% of viewport width */
    height: 100vh; /* 100% of viewport height */
}

  </style>
</head>
<body>



<div class="background-image"></div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

 -->