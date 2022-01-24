
      <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th class="text-center">NO</th>
              <th class="text-center">NAMA</th>
              <th class="text-center">JENIS</th>
              <th class="text-center">BERAT</th>
              <th class="text-center">DESKRIPSI</th>
              <th class="text-center">GAMBAR</th>
              <th class="text-center">AKSI</th>
              <th class="text-center"><a href="index.php?page=add&id=<?php echo $m['id'];?>"><i class="btn btn-primary btn-xs fa fa-pencil"></i></a> </th>
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
               <a title="Edit" href="index.php?page=edit&id=<?php echo $m['id'];?>"><i class="btn btn-warning btn-xs fa fa-edit"></i></a> | 
               <a title="View" href="index.php?page=view&id=<?php echo $m['id'];?>"><i class="btn btn-success btn-xs fa fa-search"></i></a> |
               <a title="Delete" href="index.php?page=delete&id=<?php echo $m['id'];?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="btn btn-danger btn-xs fa fa-trash-o"></i></a>
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