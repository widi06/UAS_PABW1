
<?php 
  $edit=$mysqli->query("SELECT * FROM release_terakhir where id='$_GET[id]'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_update" action="index.php?page=update" method="post" enctype="multipart/form-data">

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
    <label for="shift">Shift</label>
    <select name="shift" class="form-control" id="shift" name="shift" required>
    	<option value="<?php echo $e['shift'];?>"><?php echo $e['shift'];?></option>
      <option value="1">Pagi</option>
      <option value="2">Sore</option>
      <option value="3">Malam</option>
    </select>
  </div>

  <div class="form-group">
    <label for="distributor">Distributor</label>
    <select name="distributor" class="form-control" id="distributor" name="distributor" required>
      <option value="<?php echo $e['distributor'];?>"><?php echo $e['distributor'];?></option>
      <option value="">None</option>
      <option value="Surticon">Surticon</option>
      <option value="Varia Jatim">Varia Jatim</option>
      <option value="Padi Mas">Padi Mas</option>
      <option value="SID">SID</option>
      <option value="KWSG">KWSG</option>
    </select>
  </div>

  <div class="form-group">
    <label for="ekspeditur">Ekspeditur</label>
    <select name="ekspeditur" class="form-control" id="ekspeditur" name="ekspeditur" required>
      <option value="<?php echo $e['ekspeditur'];?>"><?php echo $e['ekspeditur'];?></option>
      <option value="">None</option>
      <option value="Surticon">Surticon</option>
      <option value="Varia Jatim">Varia Jatim</option>
      <option value="Padi Mas">Padi Mas</option>
      <option value="SID">SID</option>
      <option value="KWSG">KWSG</option>
    </select>
  </div>

  <div class="form-group">
    <label for="no_polisi">Nopol</label>
    <input type="text" class="form-control" id="no_polisi" placeholder="Masukan Nopol" name="no_polisi" required value="<?php echo $e['no_polisi'];?>">
  </div>

  <div class="form-group">
    <label for="nama_sopir">Nama Sopir</label>
    <input type="text" class="form-control" id="nama_sopir" placeholder="Masukan Nama Sopir" name="nama_sopir" required value="<?php echo $e['nama_sopir'];?>">
  </div>

  <div class="form-group">
    <label for="netto">Netto/Kg</label>
    <input type="text" class="form-control" id="netto" placeholder="Masukan Netto" name="netto" required value="<?php echo $e['netto'];?>">
  </div>

  <div class="form-group">
   	<a href="index.php" type="reset" class="btn btn-danger" href="index.php">Cancel</a>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>


</form>