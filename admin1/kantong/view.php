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
                           <center><h1>Detail Kantong</h1></center>

		<?php
    		include "koneksi.php";
    		$data = mysqli_query($mysqli,"SELECT * from kantong where id='$_GET[id]'");
    		$row = mysqli_fetch_array($data);
    	?>

    	
                        <div class="media">
                            <table class="table-form" border="0" width="100%" cellspacing="0" cellpadding="0">
                                <div class="media-body">
                                    <div class="col-md-2">
                    <img class="media-object dp img-circle" src="images/<?php echo $row['gambar'];?>" style="width: 100px;height:100px;"></br>
                    </div>
        
        <tr>     
            <td width="27%">Nama</td>
            <td>: </td>
            <td><?php echo $row['nama_kantong']; ?></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td width="3%">:</td>
            <td><?php echo $row['jenis_kantong']; ?></td>
        </tr>
        <tr> 
            <td>Berat</td>
            <td width="1%">:</td>
            <td><?php echo $row['berat_kantong']; ?></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td width="1%">:</td>
            <td><?php echo $row['deskripsi']; ?></td>
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