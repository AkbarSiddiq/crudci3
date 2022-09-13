<table class="table table-light table-striped">
    <thead>
        <tr>
            <td colspan="4">
                <a href="<?php echo site_url('Welcome/VFormAddSiswa'); ?>">Add</a>
            </td>
        </tr>
        <tr>
            <th scope="col">Nis</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tools</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($DataSiswa)) {
            foreach ($DataSiswa as $ReadDS) {
        ?>

                <tr>
                    <td><?php echo $ReadDS->nis; ?></td>
                    <td><?php echo $ReadDS->nama; ?></td>
                    <td><?php echo $ReadDS->alamat; ?></td>
                    <td>
                        <a href="<?php echo site_url('Welcome/DataSiswa/' . $ReadDS->nis . '/view') ?>">Update</a>
                        <a href="<?php echo site_url('Welcome/DeleteDataSiswa/' . $ReadDS->nis) ?>">Delete</a>
                    </td>
                </tr>

        <?php
            }
        }
        ?>

    </tbody>
</table>