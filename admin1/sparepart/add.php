
<form name="form_sparepart" action="index.php?page=create" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="date" class="form-control" id="tanggal" placeholder="Masukan Tanggal" name="tanggal" required>
  </div>

  <div class="form-group">
    <label for="jam">Jam</label>
    <input type="text" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date('H:i:s'); ?>" class="form-control" id="jam" placeholder="Masukan Jam" name="jam" required>
  </div>

  <div class="form-group">
    <label for="nama_sparepart">NAMA SPAREPART</label>
    <input type="text" class="form-control" id="nama_sparepart" placeholder="Nama Sparepart" name="nama_sparepart" required>
  </div>

  <div class="form-group">
    <label for="jumlah">JUMLAH</label>
    <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah" required>
  </div>

  <div class="form-group">
    <label for="tipe">TIPE</label>
    <select class="form-control" id="tipe" name="tipe" required>
    	<option value="">None</option>
    	<option value="Mekanikal">Mekanikal</option>
    	<option value="Elektrikal">Elektrikal</option>
    	<option value="Lainnya">Lainnya..</option>
    </select>
  </div>

  <div class="form-group">
    <label for="status">STATUS</label>
    <select name="status" class="form-control" id="status"required>
      <option value="">None</option>
      <option value="Ready">Ready</option>
      <option value="Kurang">Kurang</option>
    </select>
  </div>

  <div class="form-group">
    <label for="foto">FOTO</label>
    <input type="file" class="form-control" id="foto" name="foto" required>
  </div>

  <div class="form-group">
    <label for="qr_code">QR</label>
    <input type="file" class="form-control" id="qr_code" name="qr_code" required>
  </div>

  <div class="form-group">
   	<a href="index.php" type="reset" class="btn btn-danger" href="index.php">Cancel</a>
    <button type="submit" class="btn btn-primary">Save</button>
    
  </div>


</form>