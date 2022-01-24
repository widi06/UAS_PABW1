<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <title> PPBWI | KANTONG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

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
          <li class="breadcrumb-item active">Kantong</li>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace( 'deskripsi',{height: 300} );
    </script>
  </body>
</html>