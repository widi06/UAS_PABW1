<form name="form_release" action="index.php?page=create" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="date" class="form-control" id="tanggal" placeholder="Masukan Tanggal" name="tanggal" required>
  </div>

  <div class="form-group">
    <label for="jam">Jam</label>
    <input type="text" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date('H:i:s'); ?>" class="form-control" id="jam" placeholder="Masukan Jam" name="jam" required>
  </div>

  <div class="form-group">
    <label for="shift">Shift</label>
    <select name="shift" class="form-control" id="shift" name="shift" required>
    	<option value="">None</option>
    	<option value="1">Pagi</option>
    	<option value="2">Sore</option>
    	<option value="3">Malam</option>
    </select>
  </div>

  <div class="form-group">
    <label for="distributor">Distributor</label>
    <select name="distributor" class="form-control" id="distributor" name="distributor" required>
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
    <input type="text" class="form-control" id="no_polisi" placeholder="Masukan Nopol" name="no_polisi" required>
  </div>

  <div class="form-group">
    <label for="nama_sopir">Nama Sopir</label>
    <input type="text" class="form-control" id="nama_sopir" placeholder="Masukan Nama Sopir" name="nama_sopir" required>
  </div>

  <div class="form-group">
    <label for="netto">Netto/Kg</label>
    <input type="text" class="form-control" id="netto" placeholder="Masukan Netto" name="netto" required>
  </div>

  <div class="form-group">
   	<a href="index.php" type="reset" class="btn btn-danger" href="index.php">Cancel</a>
    <button type="submit" class="btn btn-primary">Save</button>
    
  </div>


</form>