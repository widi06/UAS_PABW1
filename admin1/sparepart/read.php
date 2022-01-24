
      <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th class="text-center">NO</th>
              <th class="text-center">TANGGAL</th>
              <th class="text-center">JAM</th>
              <th class="text-center">NAMA SPAREPART</th>
              <th class="text-center">JUMLAH</th>
              <th class="text-center">TIPE</th>
              <th class="text-center">STATUS</th>
              <th class="text-center">FOTO</th>
              <th class="text-center">QR</th>
              <th class="text-center">AKSI</th>
              <th class="text-center"><a href="index.php?page=add&id=<?php echo $m['id'];?>"><i class="btn btn-primary btn-xs fa fa-pencil"></i></a> </th>
            </tr>
          </thead>
          <tbody>


          <?php 
            $no = 0;
            $mahasiswa=$mysqli->query("SELECT * FROM sparepart");
            while($m=mysqli_fetch_array($mahasiswa)){
            $no++;    
          ?>  

          <?php 
            include"paging.php";
            $p   = new paging_mahasiswa;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $mahasiswa=$mysqli->query("SELECT * FROM sparepart
            ORDER BY id DESC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($mahasiswa)){   
            $no++;
          ?>

            <tr>
              <th class="text-center"><?php echo $no;?></th>
              <td><?php echo date ("d F Y",strtotime($m['tanggal'])); ?></td>
              <td><?php echo date ("H:i:s",strtotime($m['jam'])); ?></td>
              <td><?php echo $m['nama_sparepart']; ?></td>
              <td><?php echo $m['jumlah']; ?></td>
              <td><?php echo $m['tipe']; ?></td>
              <td><?php echo $m['status']; ?></td>
              <td><a class="perbesar" href="config/images/<?php echo $m['foto'];?>"><img src="config/images/<?php echo $m['foto'];?>" width="50"></a>

              <td><a class="perbesar" href="config/images/<?php echo $m['qr_code'];?>"><img src="config/images/<?php echo $m['qr_code'];?>" width="50"></a>
              </td>
              <td>
               <a title="Edit" href="index.php?page=edit&id=<?php echo $m['id'];?>"><i class="btn btn-warning btn-xs fa fa-edit"></i></a> | 
               <a title="View" href="index.php?page=view&id=<?php echo $m['id'];?>"><i class="btn btn-success btn-xs fa fa-search"></i></a> |
               <a title="Delete" href="index.php?page=delete&id=<?php echo $m['id'];?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="btn btn-danger btn-xs fa fa-trash-o"></i></a> |
               <a title="Print" href="report.php?id=<?php echo ($m['id']);?>" target="_blank"><button type="button" class="btn btn-info btn-xs fa fa-print"></button></a>
              </td>
            </tr>

            <?php } ?>
            
          </tbody>
        </table>

      <div class="halaman">
        <nav aria-label="...">
          <ul class="pagination">

          <?php } ?>
          <?php 
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM sparepart"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>