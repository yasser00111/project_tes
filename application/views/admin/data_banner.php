<div class="container-fluid">

<section class="content">
<?php foreach ($banner as $ba ) :?>
<form action="<?php echo base_url('admin/data_banner/').$ba->id_banner;?>"method="post"> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>nama pengantin laki-laki</label>
      <input type="text" name="nama_pengantin1"class="form-control" placeholder="<?php echo $ba->nama_pengantin1 ?>" value="<?php echo $ba->nama_pengantin1 ?>">
    </div>
    <div class="form-group col-md-6">
      <label>nama pengantin perempuan</label>
      <input type="text" name="nama_pengantin2"class="form-control" placeholder="<?php echo $ba->nama_pengantin2 ?>" value="<?php echo $ba->nama_pengantin2 ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">title</label>
    <input type="text" name="titel"class="form-control" placeholder="<?php echo $ba->titel ?>" value="<?php echo $ba->titel ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">tanggal</label>
      <input type="text" name="day"class="form-control" placeholder="<?php echo $ba->day ?>" value="<?php echo $ba->day ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">bulan</label>
      <select id="inputState" class="form-control">
        <option selected>pilih bulan</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">tahun</label>
      <input type="text" name="year"class="form-control" placeholder="<?php echo $ba->year ?>" value="<?php echo $ba->year ?>">
    </div>
  </div>
  <div class="box-body">
	                <div class="form-group">
	                  <label for="exampleInputFile">Ganti Gambar Banner</label>
	                  <input type="file" name="image" id="exampleInputFile">

	                  <!-- <p class="help-block">Example block-level help text here.</p> -->
	                </div>
	              </div>
                <button class="btn btn-primary">Simpan</button>
  <?php endforeach; ?>
  
 
</form>
</section>
</div>