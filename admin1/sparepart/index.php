<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <title>Admin | SPAREPART</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="config/css/bootstrap.css">
    <link rel="stylesheet" href="config/css/style.css">
    <link rel="stylesheet" href="config/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="config/box/lib/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="config/box/source/jquery.fancybox.js"></script>
    <script type="text/javascript" src="config/box/source/jquery.fancybox.css"></script>

  </head>
  
  <body>
  <?php
      include "../header.php";
      ?>  

<div class="content-wrapper">
  <div class="ontent-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark-right"></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../../index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Sparepart</li>
        </ol>
      </div>
    </div>
  </div>
</div>

    <div id="container-wrapper">

      <div class="container box">
       <?php include "pages.php";?>
      </div>

    </div>
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="config/js/jquery.min.js"></script>
    <script src="config/js/bootstrap.js"></script>
    <script src="config/ckeditor/ckeditor.js"></script>
    <script>
    $(document).ready(function(){
      $(".perbesar").fancybox();
    }; 
    </script>
  </body>
</html>