<!-- <form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
    <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td>
                <input type="text" name="txt_nis" value="<?php echo $detail['nis']; ?>">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input type="text" name="txt_nama" value="<?php echo $detail['nama']; ?>">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <input type="text" name="txt_alamat" value="<?php echo $detail['alamat']; ?>">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="btn_simpan" value="Simpan">
            </td>
        </tr>
    </table>
</form> -->

<form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">

    <table>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">NIS</label>
            <input type="text" name="txt_nis" value="<?php echo $detail['nis']; ?>" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nama</label>
            <input type="text" name="txt_nama" value="<?php echo $detail['nama']; ?>" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Alamat</label>
            <input type="text" name="txt_alamat" value="<?php echo $detail['alamat']; ?>" class="form-control" id="formGroupExampleInput2">
        </div>
        <tr>

            <button type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary mb-3">Simpan</button>

        </tr>
    </table>

</form>