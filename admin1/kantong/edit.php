
<?php 
  $edit=$mysqli->query("SELECT * FROM kantong where id='$_GET[id]'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_kantong" action="index.php?page=update" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="nama_kantong">NAMA KANTONG</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="nama_kantong" placeholder="Nama Kantong" name="nama_kantong" required value="<?php echo $e['nama_kantong'];?>">
  </div>

  <div class="form-group">
    <label for="jenis_kantong">JENIS KANTONG</label>
    <input type="text" class="form-control" id="jenis_kantong" placeholder="Jenis Kantong" name="jenis_kantong" required value="<?php echo $e['jenis_kantong'];?>">
  </div>

  <div class="form-group">
    <label for="berat_kantong">BERAT KANTONG</label>
    <select name="berat_kantong" class="form-control" id="berat_kantong" name="berat_kantong" required>
    	<option value="<?php echo $e['berat_kantong'];?>"><?php echo $e['berat_kantong'];?></option>
    	<option value="40">40 KG</option>
    	<option value="50">50 KG</option>
    	<option value="60">60 KG</option>
    </select>
  </div>

  <div class="form-group">
    <label for="deskripsi">DESKRIPSI</label>
    <textarea class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" required><?php echo $e['deskripsi'];?></textarea>
  </div>

  <div class="form-group">
    <label for="gambar">GAMBAR</label>
    <input type="file" class="form-control" id="gambar" name="gambar">
    <span><?php echo $e['gambar'];?></span>
  </div>

  <div class="form-group">
   	<a href="index.php" type="reset" class="btn btn-danger" href="index.php">Cancel</a>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>


</form>