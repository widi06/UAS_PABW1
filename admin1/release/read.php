  
     
      <table class="table table-bordered text-center">
          <thead>
            <input class="btn btn-primary btn-xl fa fa-pencil" type="button" value="Export To PDF" title="Save as PDF Format" onclick="window.open('report.php');"><br><br>
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
              <th class="text-center"><a title="Tambah" href="index.php?page=add&id=<?php echo $m['id'];?>"><i class="btn btn-primary btn-xs fa fa-pencil"></i></a> </th>
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
               
               <a title="Edit" href="index.php?page=edit&id=<?php echo $m['id'];?>"><i class="btn btn-warning btn-xs fa fa-edit"></i></a> |
               <a title="View" href="index.php?page=view&id=<?php echo $m['id'];?>"><i class="btn btn-success btn-xs fa fa-search"></i></a> |
               <a title="Delete" href="index.php?page=delete&id=<?php echo $m['id'];?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="btn btn-danger btn-xs fa fa-trash-o"></i></a> |
               <a title="Print" href="report2.php?id=<?php echo ($m['id']);?>" target="_blank"><button type="button" class="btn btn-info btn-xs fa fa-print"></button></a>
              </td>
            </tr>

            <?php } include "../../pegawai1/release/total.php"; ?>


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