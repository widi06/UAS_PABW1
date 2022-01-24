<! DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../../style/stylee.css">


<!------ Include the above in your HEAD tag ---------->
	<head>
	
	</head>

	<body>
        <main class="login-form">
        <div class="modal-dialog" style="margin-bottom: 0">
            <div class="modal-content">
              <div class="row justify-content">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                           <center><h1>Detail Anggota</h1></center>

		<?php
    		include "koneksi.php";
    		$data = mysqli_query($mysqli,"SELECT * from anggota where id='$_GET[id]'");
    		$row = mysqli_fetch_array($data);
    	?>

    	
                        <div class="media">
                            <table class="table-form" border="0" width="100%" cellspacing="0" cellpadding="0">
                                <div class="media-body">
                                    <div class="col-md-2">
                    <img class="media-object dp img-circle" src="../kantong/images/sig.jpg" style="width: 100px;height:100px;"></br>
                    </div>
        
        <tr>     
            <td width="27%">Badge</td>
            <td>: </td>
            <td> <?php echo $row['badge']?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td width="3%">:</td>
            <td><?php echo $row['nama']?></td>
        </tr>
        <tr> 
            <td>Alamat</td>
            <td width="1%">:</td>
            <td><?php echo $row['alamat']?></td>
        </tr>
        <tr>
            <td>No. Hp</td>
            <td width="1%">:</td>
            <td>08595959595</td>
        </tr>
        <tr>
            <td>Email</td>
            <td width="1%">:</td>
            <td>admin@bahasaweb.com</td>
        </tr>
        <tr> 
            <td>Jabatan</td>
            <td width="1%">:</td>
            <td><?php echo $row['jabatan']?></td>
        </tr>

                                        
                                    </div>
                                </div>
                            </table>
                        </div>
    				</div>
    			   </div>
                   <center><button onclick="kembali()" type="button" class="btn btn-primary">KEMBALI</button>
        
        <script>
            function kembali(){
                window.history.back();
            }
        </script></center>
                   </div>
                </div>
    		</div>
    	</div>
        </main>

        
	</body>
</html>