
<?php 
  $edit=$mysqli->query("SELECT * FROM anggota where id='$_GET[id]'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_update" action="index.php?page=update" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="badge">Badge</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="badge" placeholder="Masukan Badge" name="badge" required value="<?php echo $e['badge'];?>">
  </div>

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" required value="<?php echo $e['nama'];?>">
  </div>

  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" required value="<?php echo $e['alamat'];?>">
  </div>

  <div class="form-group">
    <label for="jabatan">Jabatan</label>
    <select name="jabatan" class="form-control" id="jabatan" name="jabatan" required>
      <option value="<?php echo $e['jabatan'];?>"><?php echo $e['jabatan'];?></option>
      <option value="">None</option>
      <option value="Administrasi">ADMINISTRASI</option>
      <option value="Koordinator">KOORDINATOR</option>
      <option value="Shipping">SHIPPING</option>
      <option value="Packer/Loader">PACKER/LOADER</option>
      <option value="Kebersihan">Cleaning</option>
      <option value="Security">SECURITY</option>
    </select>
  </div>

  <div class="form-group">
   	<a href="index.php" type="reset" class="btn btn-danger" href="index.php">Cancel</a>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>


</form>