
      <table class="table table-bordered">
          <thead>
            <tr>
              <th>NO</th>
              <th>Badge</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Jabatan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>

          <?php 
            $no = 0;
            $organisasi=$mysqli->query("SELECT * FROM anggota");
            while($m=mysqli_fetch_array($organisasi)){
            $no++;    
          ?>  

          <?php 
            include"paging.php";
            $p   = new paging_organisasi;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $organisasi=$mysqli->query("SELECT * FROM anggota  LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($organisasi)){   
            $no++;
          ?>

            <tr>
              <th scope="row"><?php echo $no;?></th>
              <td><?php echo $m['badge']; ?></td>
              <td><?php echo $m['nama']; ?></td>
              <td><?php echo $m['alamat']; ?></td>
              <td><?php echo $m['jabatan']; ?></td>
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
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM anggota"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>