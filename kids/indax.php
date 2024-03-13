<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         html,body{
      width:100%;
      height: 100%;
   }
   .pkpk1{
    width:50%;
      height: 50%;
    background-color:black;

   }
        .background-imag {
    background-image: url('images/kids.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    /* background-position: center top;   */
    width: 100vw; /* 100% of viewport width */
    height: 75vh; /* 100% of viewport height */
    margin-top: 50px;
}

@media screen and (max-width: 600px) {
    .background-imag {
        height: 50vh; /* Adjust height for small devices */
    }
}
.text{
    color:black;
  margin-top:10px ;
        

}
.card-title-1{
    font-size: 40px; /* Change to the desired font size */
            font-weight: bold; /* Makes the text bold */
}
.btn-1{
    background-color:black;
    color:white;
    margin-right:30px ;
  
}

    </style>
</head>
<body>
<div class="background-imag">
<div class="background-imag d-flex justify-content-end align-items-center">
    <div class="card text-center">
      <div class="card-body mr-3">
        <h1 class="card-title card-title-1 text">PUMA x TROLLS</h1>
        <h5 class="card-text text ">A COLORFUL COLLAB </h5>
        <div class="d-flex justify-content-center align-items-center">
        <button type="button" class="btn  btn-1">Shop NOW </button>
        <button type="button" class="btn btn-1">EXPLORE MORE</button>
        </div>
        
      </div>
    </div>
  </div>
</div>

   <!--  -->

  
</body>
</html>