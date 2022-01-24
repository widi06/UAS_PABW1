
<?php 
  $edit=$mysqli->query("SELECT * FROM sparepart where id='$_GET[id]'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_sparepart" action="index.php?page=update" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="date" class="form-control" id="tanggal" name="tanggal" required value="<?php echo $e['tanggal'];?>">
  </div>

  <div class="form-group">
    <label for="jam">Jam</label>
    <input type="text" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date('H:i:s'); ?>" class="form-control" id="jam" placeholder="Masukan Jam" name="jam" required value="<?php echo $e['jam'];?>">
  </div>

  <div class="form-group">
    <label for="nama_sparepart">NAMA SPAREPART</label>
    <input type="text" class="form-control" id="nama_sparepart" placeholder="Nama Sparepart" name="nama_sparepart" required value="<?php echo $e['nama_sparepart'];?>">
  </div>

  <div class="form-group">
    <label for="jumlah">JUMLAH</label>
    <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah" required value="<?php echo $e['jumlah'];?>">
  </div>

  <div class="form-group">
    <label for="tipe">TIPE</label>
    <select name="tipe" class="form-control" id="tipe" name="tipe" required>
    	<option value="<?php echo $e['tipe'];?>"><?php echo $e['tipe'];?></option>
    	<option value="Mekanikal">Mekanikal</option>
      <option value="Elektrikal">Elektrikal</option>
      <option value="Lainnya">Lainnya..</option>
    </select>
  </div>

  <div class="form-group">
    <label for="status">STATUS</label>
    <select name="status" class="form-control" id="status"required>
      <option value="<?php echo $e['status'];?>"><?php echo $e['status'];?></option>
      <option value="">None</option>
      <option value="Ready">Ready</option>
      <option value="Kurang">Kurang</option>
    </select>
  </div>

  <div class="form-group">
    <label for="foto">FOTO</label>
    <input type="file" class="form-control" id="foto" name="foto">
    <span><?php echo $e['foto'];?></span>
  </div>

  <div class="form-group">
   	<a href="index.php" type="reset" class="btn btn-danger" href="index.php">Cancel</a>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>


</form>