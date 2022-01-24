 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | HOME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#target-list">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="../admin/index.php" class="navbar-brand">PACKING PLANTS BANYUWANGI</a>
      </div>

      <div class="collapse navbar-collapse" id="target-list">
        <ul class="nav navbar-nav">
          <li class="active"><a onclick="kembali()" class="tombol" class="navbar-brand">Home</a>
        
        <script>
          function kembali(){
            window.history.back();
          }
        </script>

          <li><a href="../kantong/index.php">Kantong</a></li>
          <li><a href="../anggota/index.php">Organisasi</a></li>
          <li><a href="../release/index.php">Release</a></li>
          <li><a href="../sparepart/index.php">sparepart</a></li>
          <li><a href="../admin/logout.php">Keluar</a></li>
        </ul>

        <form  class="navbar-right">
          <div class="button">
              <li><a href="../jam/index.php"></a></li> 
          </div>
        </form>
      </div>
    </nav>
  
<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>

</body>
</html>