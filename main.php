<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puma</title>
 
    <link rel="stylesheet" href="components/navbar.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> 
   
<style>
   *{
      margin: 0;
      padding: 0;
      box-sizing:border-box;
   }
   html,body{
      width:100%;
      height: 100%;
   }
   .mar{
      margin-top:10px ;
   }

</style>
</head>
<body>
   <?php
   include 'components/navbar.php';
   ?> 
      <?php
   include 'circuler_img/c_img.php';
   ?> 
        <?php
   include 'fresh_drip/index.php';
   ?> 
        <?php
    include 'video/index.php';
   ?>
        <?php
 include 'kids/indax.php';
   ?>
   <div class="mar">
      <?php
    include 'footer\index.php';
   ?>
</div>

</body>
</html>
