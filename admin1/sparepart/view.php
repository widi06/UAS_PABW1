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
                           <center><h1>Detail Sparepart</h1></center>

		<?php
    		include "koneksi.php";
    		$data = mysqli_query($mysqli,"SELECT * from sparepart where id='$_GET[id]'");
    		$row = mysqli_fetch_array($data);
    	?>

    	
                        <div class="media">
                            <table class="table-form" border="0" width="100%" cellspacing="0" cellpadding="0">
                                <div class="media-body">
                                    <div class="col-md-2">
                    <img class="media-object dp img-circle" src="config/images/<?php echo $row['foto'];?>" style="width: 100px;height:100px;"></br>
                    </div>

        <tr>     
            <td width="27%">Tanggal</td>
            <td>: </td>
            <td><?php echo date ("d F Y",strtotime($row['tanggal'])); ?></td>
        </tr>

        <tr>
            <td>Jam</td>
            <td width="3%">:</td>
            <td><?php echo date ("H:i:s",strtotime($row['jam']));?></td>
        </tr>
        
        <tr>     
            <td width="27%">Nama Sparepart</td>
            <td>: </td>
            <td><?php echo $row['nama_sparepart']; ?></td>
        </tr>

        <tr>
            <td>Jumlah</td>
            <td width="3%">:</td>
            <td><?php echo $row['jumlah']; ?></td>
        </tr>

        <tr> 
            <td>Tipe</td>
            <td width="1%">:</td>
            <td><?php echo $row['tipe']; ?></td>
        </tr>

        <tr>
            <td>Status</td>
            <td width="1%">:</td>
            <td><?php echo $row['status']; ?></td>
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