  
      <table class="table table-bordered text-center" >
          <thead>
            <tr>
              <th class="text-center">NO</th>
              <th class="text-center">Tanggal</th>
              <th class="text-center">Jam</th>
              <th class="text-center">Shift</th>
              <th class="text-center">Distributor</th>
              <th class="text-center">Ekspeditur</th>
              <th class="text-center">No Polisi</th>
              <th class="text-center">Nama Sopir</th>
              <th class="text-center">Netto/Kg</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>


          <?php 
            $no = 0;
            $mahasiswa=$mysqli->query("SELECT * FROM release_terakhir");
            while($m=mysqli_fetch_array($mahasiswa)){
            $no++;    
          ?>  

          <?php 
            include"paging.php";
            $p   = new paging_release;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $mahasiswa=$mysqli->query("SELECT * FROM release_terakhir 
            ORDER BY id DESC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($mahasiswa)){   
            $no++;
          ?>

            <tr>
              <th class="text-center"><?php echo $no;?></th>
              <td><?php echo date ("d F Y",strtotime($m['tanggal'])); ?></td>
              <td><?php echo date ("H:i:s",strtotime($m['jam'])); ?></td>
              <td><?php echo $m['shift']; ?></td>
              <td><?php echo $m['distributor']; ?></td>
              <td><?php echo $m['ekspeditur']; ?></td>
              <td><?php echo $m['no_polisi']; ?></td>
              <td><?php echo $m['nama_sopir']; ?></td>
              <td><?php echo $m['netto']; ?></td>
              <td>
               <a title="View" href="index.php?page=view&id=<?php echo $m['id'];?>"><i class="fa fa-search"></i></a>
              </td>
            </tr>

            <?php } include "total.php"; ?>
            
          </tbody>
        </table>

      <div class="halaman">
        <nav aria-label="...">
          <ul class="pagination">

          <?php } ?>
          <?php 
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM release_terakhir"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>