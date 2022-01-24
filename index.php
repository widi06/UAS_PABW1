<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/buttercake@3.0.0/dist/css/butterCake.min.css">
    <script src="style/jquery-3.3.1.min.js"></script>
</head>
<body>
    <?php

    if (isset($_GET['pesan'])) {
        if ($_GET['pesan']== "gagal") {
            echo "<script>alert('Cek Data Anda !')</script>";
        } else if ($_GET['pesan']== "logout"){
            echo "<script>alert('Anda Telah Logout !')</script>";
        } else if ($_GET['pesan']== "belum_login") {
            echo "<script>alert('Anda Harus Login Atau Registrasi !')</script>";
        } 
    }
    ?>
    <section class="login-page flex-center-center py-5 bg-light">
    <div class="w-100 mx-auto px-2" style="max-width: 400px">
    <form action="cek_login.php" method="post">

    		<div class="text-center">
    			<div id="tempat_jam"></div>
    		
    		</div>

        <div class="card overflow-unset mt-9 mb-1">
            <div class="card-body">
                
                <!-- AVATAR -->
                <div class="avatar-icon text-center">
                    <img src="admin1/kantong/images/SIG.jpg" alt="avatar" class="img-circle img-hover card mb-2 ml-auto mr-auto p-1">
                </div>

                <!-- Username -->
                <div class="form-group">
                    <label for="username">USERNAME</label>
                    <input type="text" name="username" id="username" class="form-control" required autofocus=>
                </div>

                <!--Password-->
                <div class="form-group">
                    <label for="password">PASSWORD</label>
                    <input type="password" name="password" id="password" class="form-control" required autofocus>
                </div>

                <!-- REMEMBER ME -->
                <div class="group">
                <div class="custom-checkbox">
                    <input type="checkbox" id="rememberMe">
                <label for="rememberMe" class="text-gray">Remember Me</label>
                </div>
                </div>
                
                <!--Login-->
                <div class="form-group">
                    <button type="submit" class="btn primary block btn-lg weight-500">Login</button>
                </div>
            </div>
        </div>
        <!--LINK-->
        <div class="text-center weight-20 text-gray">
            <a href="https://www.facebook.com" title="Facebook" target="_blank"><i class="fa fa-facebook fa-1x fa-fw"></i></a> · 
            <a href="https://www.instagram.com/anggerwidi06/" title="Instagram" target="_blank"><i class="fa fa-instagram fa-1x fa-fw"></i></a> 
            .
            <a href="https://www.youtube.com" title="Youtube" target="_blank"><i class="fa fa-youtube-play fa-1x fa-fw"></i></a> .
            <a href="" class="text-gray">Need Help?</a>
      </div>
        
    </form>
    </div>
    <script>
setInterval(
   function(){
   $.get("jam/realtime.php", function(Jam){
            var xJam = Jam;
            var x = document.getElementById('tempat_jam');
                  x.innerHTML = xJam;
      });
   },1000);
</script>
    </section>
    <style>
        .login-page{
            min-height: 100vh;
        }
        .login-page .avatar-icon img{
            margin-top: -80px;
            width: 128px;
            height: 128px;
        }
    </style>
</body>
</html>
