<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
<!-- nav1 start -->
 <nav class="navbar navbar-expand-lg nav1 ">
  <div class="container-fluid d-flex justify-content-center align-self-center">
   <h1 id="nav_text">FREE DELIVERIES. FREE RETURNS.</h1>

  </div>
</nav>
<script>
    function changeText() {
    var textElement = document.getElementById('nav_text');
    var currentText = textElement.textContent;
    
    if (currentText === 'FREE DELIVERIES. FREE RETURNS.') {
      textElement.textContent = 'EXTRA 5% DISCOUNT FOR ALL ONLINE PAYMENTS';
    } else {
      textElement.textContent = 'FREE DELIVERIES. FREE RETURNS.';
    }
  }


  setInterval(changeText, 2000);

</script>
<!-- nav1 End -->
<!-- /////////////////////////////////////////////////////////////////////////////// -->
<!-- nav2  start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
  <a class="navbar-brand logo  d-flex justify-content-center align-self-center" href="#">
      <img src="components\nav_img\puma_(1).png" alt="Puma_logo" width="60" height="70">
    </a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light">

      </span>
    
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">New</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Women</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Men</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Kids</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Sports</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success me-2" type="submit">Search</button>

<!--  -->
<div class="dropdown">
  <div  type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="components\nav_img\user.png" alt="cart"  width="45" height="36">
  </div>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Acount</a></li>
    <li>  <button type="button" class="btn "><a class="dropdown-item" href="#">Login</a></button></li>
  
    <li>  <button type="button" class="btn "><a class="dropdown-item" href="#">SingUp</a></button></li>
  </ul>
</div>
 
    <!--  -->

 <div class="dropdown">
  <div  type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="components\cart1.png" alt="profile" width="45" height="36" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  </div>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
  <!--  -->
      </form>
    </div>
  </div>
</nav>
<!-- nav2 end -->

<div class="after_navbar d-flex flex-column justify-content-center align-items-center">
<div class="af1 text-light">EXTRA 15% OFF ON ORDERS ABOVE ₹2999*</div>
<div class="af2 text-light">Limited Time Offer | Ends Today ⏳</div>
<div class="af3 text-light">Auto-applied at checkout</div>

</div>
</body>
</html>