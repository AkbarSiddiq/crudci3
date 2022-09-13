<form action="<?php echo site_url('Welcome/AddDataSiswa'); ?>" method="post">

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">NIS</label>
        <input type="text" name="nis" class="form-control" id="formGroupExampleInput" placeholder="NIS">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="formGroupExampleInput2" placeholder="Nama">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="formGroupExampleInput2" placeholder="Alamat">
    </div>

    <button type="submit" name="simpan" value="simpan" class="btn btn-primary mb-3">Simpan</button>
</form>