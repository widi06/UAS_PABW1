
      <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center">NO</th>
              <th class="text-center">Badge</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Alamat</th>
              <th class="text-center">Jabatan</th>
              <th class="text-center">Aksi</th>
              <th class="text-center">
                <a href="index.php?page=add&id=<?php echo $m['id'];?>"><i class="btn btn-primary btn-xs fa fa-pencil"></i></a>
              </th>
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
              <th class="text-center"><?php echo $no;?></th>
              <td><?php echo $m['badge']; ?></td>
              <td><?php echo $m['nama']; ?></td>
              <td><?php echo $m['alamat']; ?></td>
              <td><?php echo $m['jabatan']; ?></td>
              <td class="text-center">
                
               <a title="Edit" href="index.php?page=edit&id=<?php echo $m['id'];?>"><i class="tn btn-warning btn-xs fa fa-edit"></i></a> | 
               <a title="View" href="index.php?page=view&id=<?php echo $m['id'];?>"><i class="tn btn-success btn-xs fa fa-search"></i></a> |
               <a title="Delete" href="index.php?page=delete&id=<?php echo $m['id'];?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="tn btn-danger btn-xs fa fa-trash-o"></i></a>
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