<form name="form_organisasi" action="index.php?page=create" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="badge">Badge</label>
    <input type="text" class="form-control" id="badge" placeholder="Masukan Badge" name="badge" required>
  </div>

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" required>
  </div>

  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" required>
  </div>

  <div class="form-group">
    <label for="jabatan">Jabatan</label>
    <select name="jabatan" class="form-control" id="jabatan" name="jabatan" required>
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
    <button type="submit" class="btn btn-primary">Save</button>
    
  </div>


</form>