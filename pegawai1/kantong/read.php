
      <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th class="text-center">NAMA</th>
              <th class="text-center">NO</th>
              <th class="text-center">JENIS</th>
              <th class="text-center">BERAT</th>
              <th class="text-center">DESKRIPSI</th>
              <th class="text-center">GAMBAR</th>
              <th class="text-center">AKSI</th>
            </tr>
          </thead>
          <tbody>


          <?php 
            $no = 0;
            $mahasiswa=$mysqli->query("SELECT * FROM kantong");
            while($m=mysqli_fetch_array($mahasiswa)){
            $no++;    
          ?>  

          <?php 
            include"paging.php";
            $p   = new paging_mahasiswa;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $mahasiswa=$mysqli->query("SELECT * FROM kantong 
            ORDER BY id DESC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($mahasiswa)){   
            $no++;
          ?>

            <tr>
              <th class="text-center"><?php echo $no;?></th>
              <td><?php echo $m['nama_kantong']; ?></td>
              <td><?php echo $m['jenis_kantong']; ?></td>
              <td><?php echo $m['berat_kantong']; ?></td>
              <td><?php echo $m['deskripsi']; ?></td>
              <td><img src="images/<?php echo $m['gambar'];?>" height="50"></td>
              <td>
               <a title="View" href="index.php?page=view&id=<?php echo $m['id'];?>"><i class="fa fa-search"></i></a>
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
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM kantong"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>